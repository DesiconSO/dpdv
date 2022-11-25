<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.products.index', ['product' => Product::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        //
    }

    public function teste()
    {
        $count = 1;
        $finished = false;

        while ($finished == false) {
            $response = Http::bling([])->get("produtos/page={$count}/json/");

            if ($response->successful()) {
                if (isset($response['retorno']['produtos'])) {
                    $dados = $response['retorno']['produtos'];
                    $this->storeProducts($dados);
                } else {
                    $finished = true;
                    break;
                }

                print_r("\nNumero do contador produtos $count");
                $count++;
            } else {
                $finished = true;
                break;
            }
        }
    }

    private function storeProducts($products)
    {
        foreach ($products as $product) {
            Product::updateOrCreate(
                ['sku' => $product['produto']['codigo']],
                [
                    'name' => $product['produto']['descricao'],
                    'price' => $product['produto']['preco'],
                    'sku' => $product['produto']['codigo'],
                ]
            );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('product.index')->with('success', __('table.deleted'));
    }
}
