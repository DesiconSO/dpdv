<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\StoreBillPayRequest;
use App\Http\Requests\UpdateBillPayRequest;
use App\Models\BillPay;

class BillPayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.billPay.index');
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
     * @param  \App\Http\Requests\StoreBillPayRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBillPayRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BillPay  $billPay
     * @return \Illuminate\Http\Response
     */
    public function show(BillPay $billPay)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BillPay  $billPay
     * @return \Illuminate\Http\Response
     */
    public function edit(BillPay $billPay)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBillPayRequest  $request
     * @param  \App\Models\BillPay  $billPay
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBillPayRequest $request, BillPay $billPay)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BillPay  $billPay
     * @return \Illuminate\Http\Response
     */
    public function destroy(BillPay $billPay)
    {
        //
    }
}
