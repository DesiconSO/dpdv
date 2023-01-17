<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\StoreBillReciveRequest;
use App\Http\Requests\UpdateBillReciveRequest;
use App\Models\BillRecive;

class BillReciveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreBillReciveRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBillReciveRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BillRecive  $billRecive
     * @return \Illuminate\Http\Response
     */
    public function show(BillRecive $billRecive)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BillRecive  $billRecive
     * @return \Illuminate\Http\Response
     */
    public function edit(BillRecive $billRecive)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBillReciveRequest  $request
     * @param  \App\Models\BillRecive  $billRecive
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBillReciveRequest $request, BillRecive $billRecive)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BillRecive  $billRecive
     * @return \Illuminate\Http\Response
     */
    public function destroy(BillRecive $billRecive)
    {
        //
    }
}
