<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ProductService
{
    public function getProducts(
        ?string $page = null,
    ): array {
        $params = array_filter(get_defined_vars());

        return Http::bling()
            ->get("produtos/{$params}/json/")
            ->throw()
            ->json();
    }
}
