<?php

namespace App\Repositories\Products;

use App\Models\Products\ProductPrice;

class ProductPriceRepository
{
    public function updateOrCreatePrices(int $productId, array $prices)
    {
        foreach ($prices as $price) {
            ProductPrice::updateOrCreate(
                [
                    'product_id' => $productId,
                    'price_type' => $price['price_type'],
                ],
                $price
            );
        }
    }
}
