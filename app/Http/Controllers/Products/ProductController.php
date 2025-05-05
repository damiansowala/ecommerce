<?php

namespace App\Http\Controllers\Products;

use App\Helpers\BarcodeHelper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repositories\Products\ProductRepository;
use App\Repositories\Settings\SettingsSeoRepository;
use App\Repositories\Manufacturers\ManufacturerRepository;

use App\Http\Requests\ProductRequest;
use App\Http\Requests\SettingsSeoRequest;
use App\Http\Requests\ProductEanRequest;
use App\Http\Requests\ProductParamRequest;
use App\Http\Requests\ProductStockRequest;
use App\Http\Requests\StoreProductPricesRequest;

use App\Models\Products\Product;
use App\Models\Products\ProductEan;

class ProductController extends Controller
{
    public $categories;
    public $manufacturers;
    protected $productRepository;
    protected $settingsSeoRepository;
    protected $manufacturerRepository;
    public function __construct()
    {
        $this->middleware('auth');
        $this->productRepository = new ProductRepository;
        $this->settingsSeoRepository = new SettingsSeoRepository;
        $this->manufacturerRepository = new ManufacturerRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $dataTable = $this->productRepository->getProductToTable();

        return view('backend.products.products.index', [
            'dataTable' => $dataTable->toArray(),
            'tableID' => 'exampleTable',
        ]);
    }
    public function create()
    {
        $this->manufacturers = $this->manufacturerRepository->getAllByNameAndId();
        $this->categories = $this->productRepository->getCategoriesWithChildren();
        // $products = Product::with(['category', 'sales', 'coverImage', 'params', 'ean', 'stock', 'info'])->paginate(10);
        return view('backend.products.products.create', ['categories' => $this->categories, 'manufacturers' => $this->manufacturers]);
    }






    public function store(
        ProductRequest $productRequest,
        SettingsSeoRequest $seoSettingsRequest,
        ProductEanRequest $productEanRequest,
        ProductParamRequest $productParamRequest,
        ProductStockRequest $productStockRequest,
        StoreProductPricesRequest $storeProductPricesRequest
    ) {



        // Walidacja danych z formularza
        $validatedProduct = $productRequest->validated();
        $validatedSeo = $seoSettingsRequest->validated();
        $validatedEan = $productEanRequest->validated();
        $validatedParams = $productParamRequest->validated();
        $validatedStock = $productStockRequest->validated();
        $validatedPrices = $storeProductPricesRequest->validated();

        try {


            // Tworzenie produktów i zależności
            $product = $this->productRepository->createProduct($validatedProduct);
            $seo = $this->settingsSeoRepository->createSettingsSeo($validatedSeo);
            $eans = $this->productRepository->createProductEan($validatedEan);
            $params = $this->productRepository->createProductParams($validatedParams);
            $stock = $this->productRepository->createProductStock($validatedStock);
            $this->productRepository->createProductPrices($product->id, $validatedPrices['prices']);



            // Przypisywanie zależności do produktu
            $product->setting_seo_id = $seo->id;
            $product->ean_id = $eans->id;
            $product->params_id = $params->id;
            $product->stock_id = $stock->id;

            // Log::debug('Przekazywane dane EAN do helpera:', ['eanData' => $validatedEan]);
            // BarcodeHelper::generateEanImages($validatedEan, $product->id);

            if ($productRequest->hasFile('mainPhoto')) {
                $product->addMedia($productRequest->file(key: 'mainPhoto'))->toMediaCollection('main_photo');
            }

            if ($productRequest->hasFile('otherPhotos')) {
                foreach ($productRequest->file('otherPhotos') as $file) {
                    $product->addMedia($file)->toMediaCollection('other_photos');
                }
            }


            $product->save();

            \Log::info('Przypisano zależności do produktu.', [
                'product_id' => $product->id,
                'setting_seo_id' => $product->setting_seo_id,
                'ean_id' => $product->ean_id,
                'params_id' => $product->params_id,
                'stock_id' => $product->stock_id
            ]);

            return redirect()->route('product.index')->with('success', 'Produkt został pomyślnie dodany.');
        } catch (\Exception $e) {


            // Logowanie szczegółowego błędu
            \Log::error('Błąd zapisu produktu', [
                'error_message' => $e->getMessage(),
                'exception' => $e->getTraceAsString(),
                'input_data' => [
                    'productRequest' => $validatedProduct,
                    'seoSettingsRequest' => $validatedSeo,
                    'productEanRequest' => $validatedEan,
                    'productParamRequest' => $validatedParams,
                    'productStockRequest' => $validatedStock,
                    'storeProductPricesRequest' => $validatedPrices
                ]
            ]);

            // Zwrócenie błędu do użytkownika
            return back()->with('error', 'Wystąpił błąd podczas dodawania produktu.');
        }
    }







    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $this->categories = $this->productRepository->getCategoriesWithChildren();

        return view('backend.products.products.edit', ['product' => $product, 'categories' => $this->categories]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('backend.products.products.show', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $product = $this->productRepository->findProduct($id);
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'desc' => 'nullable|string',
            'cat_id' => 'required|exists:product_categories,id',
            'purchase_price' => 'required|numeric',
            'sale_id' => 'nullable|exists:sales,id',
            'status' => 'required|string|max:20',
            'cover_img_id' => 'nullable|exists:media,id',
            'params_id' => 'nullable|exists:product_params,id',
            'ean_id' => 'nullable|exists:product_eans,id',
            'stock_id' => 'nullable|exists:product_stocks,id',
            'info_id' => 'nullable|exists:product_info,id',
        ]);

        $product->update($validated);
        return response()->json($product);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = $this->productRepository->findProduct($id);
        $product->delete();
        return response()->json(['message' => 'Product deleted successfully']);
    }

    /**
     * Add stock to the product.
     */
    public function addStock(Request $request, $id)
    {
        $validated = $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        $product = Product::findOrFail($id);
        $product->stock->increment('quantity', $validated['quantity']);

        return response()->json(['message' => 'Stock updated successfully', 'stock' => $product->stock]);
    }

    /**
     * Get product parameters.
     */
    public function getParams($id)
    {
        $product = Product::with('params')->findOrFail($id);
        return response()->json($product->params);
    }

    /**
     * Get product EANs.
     */
    public function getEans($id)
    {
        $product = Product::with('ean')->findOrFail($id);
        return response()->json($product->ean);
    }
}
