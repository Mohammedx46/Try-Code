<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function colors()
    {
        return Products::all();
        // return json_encode(Products::all());
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $colors = $this->colors();

        $colors = $colors->pluck("product_color");
        $prod_colors = [];
        foreach($colors as $color){
            $prod_colors []= json_decode($color);
            foreach($prod_colors as $prod_color)
            {
                $colors[] = json_decode($prod_color, true);
            }
        }



        return json_encode($colors);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dat = json_encode([
            [
                [
                    "id" => 1,
                    "name" => "brown",
                    "code" => "123"
                ],
                [
                    "id" => 2,
                    "name" => "red",
                    "code" => "1234"
                ]
            ],
            [
                [
                    "id" => 3,
                    "name" => "brown",
                    "code" => "123"
                ],
                [
                    "id" => 4,
                    "name" => "red",
                    "code" => "1234"
                ]
            ]
        ]);
        $data = [
            "product_color" => $dat
            ];
        

        $posts = Products::create($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductsRequest $request, Products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $products)
    {
        //
    }
}
