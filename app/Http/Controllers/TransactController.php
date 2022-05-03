<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTransactRequest;
use App\Http\Requests\UpdateTransactRequest;
use App\Models\Transact;

class TransactController extends Controller
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
     * @param  \App\Http\Requests\StoreTransactRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTransactRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transact  $transact
     * @return \Illuminate\Http\Response
     */
    public function show(Transact $transact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transact  $transact
     * @return \Illuminate\Http\Response
     */
    public function edit(Transact $transact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTransactRequest  $request
     * @param  \App\Models\Transact  $transact
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTransactRequest $request, Transact $transact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transact  $transact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transact $transact)
    {
        //
    }
}
