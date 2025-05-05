<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Models\Products\Category;
use App\Models\Settings\SettingSeo;
use Illuminate\Http\Request;
use App\Repositories\Products\ProductRepository;
use App\Repositories\Settings\SettingsSeoRepository;

class CategoryController extends Controller
{
    protected $productRepository;
    protected $settingsSeoRepository;
    public function __construct()
    {
        $this->middleware('auth');
        $this->productRepository = new ProductRepository;
        $this->settingsSeoRepository = new SettingsSeoRepository;
    }
    public function index()
    {
        $categories = $this->productRepository->getHierarchy();
        $categories = $this->productRepository->getParentCategory();
        $editedCategoryId = null;
        return view('backend.products.products.categories.index', compact('categories', 'editedCategoryId'));
    }
    public function show($id)
    {
        $category = $this->productRepository->findCategoryWithChildrenAndSeo($id);
        return view('backend.products.products.categories.show', compact('category'));
    }
    public function edit($id)
    {
        $category = $this->productRepository->findCategoryWithSeo($id);
        if (!$category) {
            return redirect()->route('categories.index')->with('error', 'Kategoria nie została znaleziona.');
        }
        $categories = $this->productRepository->getParentCategory();
        $settingSeo = $category->settingSeo ?: new SettingSeo();
        $editedCategoryId = $category->id;
        return view('backend.products.products.categories.edit', compact('category', 'categories', 'editedCategoryId', 'settingSeo'));
    }
    public function update(Request $request, $id)
    {
        // Walidacja danych kategorii i SEO
        $validated = $request->validate([
            'cat_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'parent_id' => 'nullable|exists:product_categories,id',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
        ]);
        // Znalezienie kategorii
        $category = $this->productRepository->findCategory($id);
        $category->update($validated);
        // Aktualizacja danych SEO
        $seoData = $request->only(['meta_title', 'meta_description', 'meta_keywords']);
        // Jeśli SEO istnieje, zaktualizuj je, w przeciwnym razie utwórz nowe
        if ($category->settingSeo) {
            $category->settingSeo->update($seoData);
        } else {
            $category->settingSeo()->create($seoData); // Jeśli nie ma SEO, utwórz nowe
        }
        // Pobranie hierarchii kategorii
        $categories = $this->productRepository->getHierarchy();
        $editedCategoryId = null;
        return redirect()->back()->with([
            'success' => 'Kategoria została zaktualizowana.',
            'categories' => $categories,
            'editedCategoryId' => $editedCategoryId,
        ]);
    }
    public function destroy($id)
    {
        $category = $this->productRepository->findCategory($id);
        // Usuwanie powiązanych ustawień SEO, jeśli istnieją
        if ($category->settingSeo) {
            $category->settingSeo->delete();  // Usunięcie powiązanego rekordu SEO
        }
        // Zaktualizowanie podkategorii, przypisanie ich do kategorii bez rodzica
        $category->children()->update(['parent_id' => null]);
        // Pobranie hierarchii kategorii
        $categories = $this->productRepository->getHierarchy();
        $editedCategoryId = null;
        // Usunięcie kategorii
        if ($category->delete()) :
            return redirect()
                ->route('categories.index')
                ->with([
                    'success' => 'Kategoria została usunięta.',
                    'categories' => $categories,
                    'editedCategoryId' => $editedCategoryId,
                ]);
        else:
            return redirect()
                ->route('categories.index')
                ->with([
                    'error' => 'Problem z usunięciem kategorii.',
                    'categories' => $categories,
                    'editedCategoryId' => $editedCategoryId,
                ]);
        endif;
    }
}
