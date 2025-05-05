<?php

namespace App\Repositories\Products;

use App\Models\Products\Category;
use App\Models\Products\Product;
use App\Models\Products\ProductEan;
use App\Models\Products\ProductParam;
use App\Models\Products\ProductStock;
use App\Models\Products\ProductPrice;

class ProductRepository
{


    /* CATEGORY */
    /* CATEGORY */
    /* CATEGORY */
    /* CATEGORY */
    /* CATEGORY */


    /**
     * Sprawdza, czy istnieje kategoria o podanej nazwie i identyfikatorze rodzica.
     *
     * @param array $validated Tablica zawierająca dane do walidacji (nazwa kategorii i identyfikator rodzica).
     * @return Category|null Zwraca obiekt kategorii, jeśli istnieje, lub null, jeśli nie istnieje.
     */
    public function existingCategory($validated)
    {
        return Category::where('cat_name', $validated['cat_name'])->where('parent_id', $validated['parent_id'])->first();
    }

    /**
     * Pobiera wszystkie kategorie nadrzędne (bez rodzica).
     *
     * @return \Illuminate\Database\Eloquent\Collection Zbiór obiektów kategorii nadrzędnych.
     */
    public function getParentCategory()
    {
        return Category::whereNull('parent_id')->get();
    }

    /**
     * Tworzy nową kategorię na podstawie podanych danych.
     *
     * @param array $validated Tablica zawierająca zwalidowane dane nowej kategorii.
     * @return Category Utworzony obiekt kategorii.
     */
    public function createCategory($validated)
    {
        return Category::create($validated);
    }

    /**
     * Pobiera wszystkie kategorie nadrzędne wraz z ich dziećmi.
     *
     * @return \Illuminate\Database\Eloquent\Collection Zbiór kategorii nadrzędnych z załadowanymi relacjami dzieci.
     */
    public function getCategoriesWithChildren()
    {
        return Category::with('children')->whereNull('parent_id')->orderBy('cat_name', 'asc')->get();
    }

    /**
     * Znajduje kategorię na podstawie podanego identyfikatora.
     *
     * @param int $id Identyfikator kategorii.
     * @return Category Znaleziony obiekt kategorii lub wyrzuca wyjątek, jeśli kategoria nie istnieje.
     */
    public function findCategory($id)
    {
        return Category::findOrFail($id);
    }
    public function getCategoryName($id)
    {
        return Category::findOrFail($id)->cat_name;
    }

    /**
     * Znajduje kategorię na podstawie identyfikatora wraz z jej dziećmi i ustawieniami SEO.
     *
     * @param int $id Identyfikator kategorii.
     * @return Category Znaleziony obiekt kategorii z załadowanymi relacjami dzieci i SEO.
     */
    public function findCategoryWithChildrenAndSeo($id)
    {
        return Category::with(['children', 'settingSeo'])->findOrFail($id);
    }

    /**
     * Znajduje kategorię na podstawie identyfikatora z jej ustawieniami SEO.
     *
     * @param int $id Identyfikator kategorii.
     * @return Category|null Znaleziony obiekt kategorii z załadowaną relacją SEO lub null, jeśli kategoria nie istnieje.
     */
    public function findCategoryWithSeo($id): mixed
    {
        return Category::with('settingSeo')->find($id);
    }

    /**
     * Pobiera hierarchię kategorii (kategorie nadrzędne z ich dziećmi).
     *
     * @return \Illuminate\Database\Eloquent\Collection Zbiór kategorii nadrzędnych z załadowanymi relacjami dzieci.
     */
    public function getHierarchy(): mixed
    {
        return Category::whereNull('parent_id')->with('children')->get();
    }



    /* PRODUCT */
    /* PRODUCT */
    /* PRODUCT */
    /* PRODUCT */
    /* PRODUCT */


    public function getAllProductsIdAndName()
    {
        return Product::select(
            'products.id',
            'products.name',
        )

            ->orderBy('products.created_at', 'desc')
            ->get();
    }

    public function getProductToTable()
    {
        return Product::select(
            'products.id',
            'products.name',
            'products.desc',
            'product_categories.cat_name as category_name',

            // Ceny detaliczne (retail)
            'retail_prices.net_price as retail_net_price',
            'retail_prices.gross_price as retail_gross_price',
            'retail_prices.margin as retail_margin',
            'retail_prices.min_purchase as retail_min_purchase',

            // Ceny hurtowe (wholesale)
            'wholesale_prices.net_price as wholesale_net_price',
            'wholesale_prices.gross_price as wholesale_gross_price',
            'wholesale_prices.margin as wholesale_margin',
            'wholesale_prices.min_purchase as wholesale_min_purchase',

            // Ceny online
            'online_prices.net_price as online_net_price',
            'online_prices.gross_price as online_gross_price',
            'online_prices.margin as online_margin',
            'online_prices.min_purchase as online_min_purchase',

            'product_eans.ean13',
            'product_eans.ean14',
            'product_eans.ean8',
            'product_eans.ean128',
            'product_params.weight',
            'product_params.width',
            'product_params.height',
            'product_params.length',

            'product_stocks.quantity',
            'product_stocks.low_stock',
            'product_stocks.notifications',
            'products.status',
        )
            ->join('product_categories', 'products.cat_id', '=', 'product_categories.id')
            ->join('product_eans', 'products.ean_id', '=', 'product_eans.id')
            ->join('product_params', 'products.params_id', '=', 'product_params.id')
            ->join('product_stocks', 'products.stock_id', '=', 'product_stocks.id')
            ->join('product_prices as retail_prices', function ($join) {
                $join->on('products.id', '=', 'retail_prices.product_id')
                    ->where('retail_prices.price_type', '=', 'retail');
            })
            ->join('product_prices as wholesale_prices', function ($join) {
                $join->on(
                    'products.id',
                    '=',
                    'wholesale_prices.product_id'
                )
                    ->where('wholesale_prices.price_type', '=', 'wholesale');
            })
            ->join('product_prices as online_prices', function ($join) {
                $join->on('products.id', '=', 'online_prices.product_id')
                    ->where('online_prices.price_type', '=', 'online');
            })
            ->orderBy('products.created_at', 'desc')
            ->get();
    }




    public function createProduct($validated)
    {
        return Product::create($validated);
    }



    public function createProductEan($validated)
    {
        return ProductEan::create($validated);
    }



    public function findProduct($id)
    {
        return Product::findOrFail($id);
    }



    public function findProductWithDependencies($id) {}




    public function getEan($eanId)
    {
        return ProductEan::find($eanId);
    }





    public function createProductParams($validated)
    {
        return ProductParam::create($validated);
    }




    public function getParams($eanId)
    {
        return ProductParam::find($id);
    }




    public function createProductStock($validated)
    {
        return ProductStock::create($validated);
    }





    public function getStock($eanId)
    {
        return ProductStock::find($id);
    }


    public function createProductPrices(int $productId, array $prices)
    {

        foreach ($prices as $price) {
            ProductPrice::updateOrCreate(
                [
                    'product_id' => $productId,
                    'price_type' => $price['price_type'],
                ],
                array_merge($price, ['product_id' => $productId])
            );
        }
    }
}
