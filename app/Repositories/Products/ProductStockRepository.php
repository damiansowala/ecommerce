<?php

namespace App\Repositories\Products;


class ProductStockRepository
{
    public function createProductStock(array $data)
    {
        return ProductStock::create($data);
    }

    public function updateProductStock($id, array $data)
    {
        $productStock = ProductStock::findOrFail($id);
        $productStock->update($data);
        return $productStock;
    }

    public function deleteProductStock($id)
    {
        $productStock = ProductStock::findOrFail($id);
        $productStock->delete();
    }

    public function getAllProductStocks()
    {
        return ProductStock::all();
    }

    public function getProductStockById($id)
    {
        return ProductStock::findOrFail($id);
    }
}
