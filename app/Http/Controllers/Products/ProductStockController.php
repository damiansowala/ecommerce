<?php

namespace App\Http\Controllers\Products;

use App\Http\Requests\ProductStockRequest;
use App\Repositories\ProductStockRepository;
use Illuminate\Http\Request;

class ProductStockController extends Controller
{
    protected $productStockRepository;

    public function __construct(ProductStockRepository $productStockRepository)
    {
        $this->productStockRepository = $productStockRepository;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductStockRequest $request)
    {
        try {
            $validatedData = $request->validated();
            $productStock = $this->productStockRepository->createProductStock($validatedData);

            return response()->json([
                'message' => 'Produkt dodany do magazynu',
                'data' => $productStock,
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Błąd podczas dodawania produktu do magazynu: ' . $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, ProductStockRequest $request)
    {
        try {
            $validatedData = $request->validated();
            $productStock = $this->productStockRepository->updateProductStock($id, $validatedData);

            return response()->json([
                'message' => 'Dane magazynowe zostały zaktualizowane',
                'data' => $productStock,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Błąd podczas aktualizacji danych magazynowych: ' . $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $this->productStockRepository->deleteProductStock($id);

            return response()->json([
                'message' => 'Produkt usunięty z magazynu',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Błąd podczas usuwania produktu z magazynu: ' . $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $productStocks = $this->productStockRepository->getAllProductStocks();
            return response()->json($productStocks, 200);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Błąd podczas pobierania danych magazynowych: ' . $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $productStock = $this->productStockRepository->getProductStockById($id);
            return response()->json($productStock, 200);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Błąd podczas pobierania danych produktu: ' . $e->getMessage(),
            ], 500);
        }
    }
}
