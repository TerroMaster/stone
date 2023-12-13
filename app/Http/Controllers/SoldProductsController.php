<?php

namespace App\Http\Controllers;

use App\Models\SoldProducts;
use Illuminate\Http\Request;

class SoldProductsController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $soldproducts = (soldproducts::all());

        return $soldproducts; //ПОМЕНЯТЬ
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
    public function store(Request $request)
    {
        if($request->id ==null)
        {
            $soldproducts = new SoldProducts;

            $soldproducts->name = $request->name; //ПОМЕНЯТЬ
            $soldproducts->price = $request->price;
            $soldproducts->sum = $request->sum;
            $soldproducts->stone_products_id = $request->stone_products_id;
        

            $soldproducts->save();
            return $soldproducts;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(SoldProducts $soldproducts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SoldProducts $soldproducts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SoldProducts $soldproducts)
    {
        if($request->id ==null)
        {
            $worker = new SoldProducts;

            $soldproducts->name = $request->name; //ПОМЕНЯТЬ
            $soldproducts->price = $request->price;
            $soldproducts->sum = $request->sum;
            $soldproducts->stone_products_id = $request->stone_products_id;

            $worker->save();
            
            return true;
        } 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SoldProducts $soldproducts)
    {
        //
    }
}