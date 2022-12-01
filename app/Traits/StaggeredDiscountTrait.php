<?php

namespace App\Traits;

use App\Models\Discount;
use App\Models\Product;

trait StaggeredDiscountTrait
{
    public function getStaggeredDiscount(array $product, int $amount)
    {
        $price = $product['preco'];
        $product = Product::all()->firstWhere('sku', '===', $product['codigo']);
        $allProductDiscounts = Discount::all()->where('product_id', '==', $product->id)->sortBy('max_amount', SORT_NATURAL);

        if ($allProductDiscounts->count() > 0) {
            foreach ($allProductDiscounts as $item) {
                if ($item->max_amount <= $amount) {
                    $price = $price - ($price * ($item->discount / 100));
                } else {
                    break;
                }
            }
        }

        return $price;
    }
}
