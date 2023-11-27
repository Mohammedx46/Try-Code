<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Invoices;
use App\Http\Requests\StoreInvoicesRequest;
use App\Http\Requests\UpdateInvoicesRequest;
use App\Http\Resources\V1\InvoiceResource;
use App\Http\Resources\V1\InvoiceCollection;

use App\Http\Controllers\Controller;

class InvoicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new InvoiceCollection(Invoices::paginate());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInvoicesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Invoices $invoices)
    {
        return new InvoiceResource($invoices);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Invoices $invoices)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInvoicesRequest $request, Invoices $invoices)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Invoices $invoices)
    {
        //
    }
}
