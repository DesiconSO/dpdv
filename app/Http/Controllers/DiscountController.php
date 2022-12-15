<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\StoreDiscountRequest;
use App\Http\Requests\UpdateDiscountRequest;
use App\Models\Discount;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Rap2hpoutre\FastExcel\FastExcel;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.discounts.index', ['discounts' => Discount::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(?Discount $discount = null)
    {
        return view('pages.discounts.create', ['discount' => $discount]);
    }

    public function import(Request $request)
    {
        $file = $request->file('file_input');
        if ($file) {
            $extension = $file->getClientOriginalExtension();
            $fileSize = $file->getSize();

            $this->checkUploadedFileProperties($extension, $fileSize);
            $collection = (new FastExcel)->import($request->file('file_input'));

            $collection->map(function ($item) {
                // Check quantify of discounts have in the array
                for ($i = 0; $i < ((count($item) - 1) / 2); $i++) {
                    if ($item["quantidade_{$i}"] > 0 || $item["porcentagem_{$i}"] > 0) {
                        Discount::updateOrCreate(
                            [
                                'product_id' => Product::where('sku', $item['sku'])->first()->id,
                                'max_amount' => $item["quantidade_{$i}"],
                            ],
                            [
                                'max_amount' => $item["quantidade_{$i}"],
                                'discount' => $item["porcentagem_{$i}"],
                                'product_id' => Product::where('sku', $item['sku'])->first()->id,
                                'user_id' => auth()->user()->id,
                            ]
                        );
                    }
                }
            });

            session()->flash('success', __('form.success'));

            return redirect()->route('discount.index');
        }
    }

    private function checkUploadedFileProperties($extension, $fileSize)
    {
        $valid_extension = ['csv', 'xlsx']; //Only want csv and excel files
        $maxFileSize = 2097152; // Uploaded file size limit is 2mb

        if (in_array(strtolower($extension), $valid_extension)) {
            if ($fileSize <= $maxFileSize) {
            } else {
                throw new \Exception('No file was uploaded', Response::HTTP_REQUEST_ENTITY_TOO_LARGE); //413 error
            }
        } else {
            throw new \Exception('Invalid file extension', Response::HTTP_UNSUPPORTED_MEDIA_TYPE); //415 error
        }
    }

    public function export()
    {
        $excelExemple = collect([
            [
                'sku' => 0,
                'quantidade_0' => 0,
                'porcentagem_0' => 0,
                'quantidade_1' => 0,
                'porcentagem_1' => 0,
                'quantidade_2' => 0,
                'porcentagem_2' => 0,
                'quantidade_3' => 0,
                'porcentagem_3' => 0,
                'quantidade_4' => 0,
                'porcentagem_4' => 0,
                'quantidade_5' => 0,
                'porcentagem_5' => 0,
            ],
        ]);

        return (new FastExcel($excelExemple))->download('discounts-'.Carbon::now().'.xlsx');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDiscountRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDiscountRequest $request)
    {
        Discount::create($request->all());

        session()->flash('success', __('form.success'));

        return redirect()->route('discount.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function show(Discount $discount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function edit(Discount $discount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDiscountRequest  $request
     * @param  \App\Models\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDiscountRequest $request, Discount $discount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function destroy(Discount $discount)
    {
    }
}
