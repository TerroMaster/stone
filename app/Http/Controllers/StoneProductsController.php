<?php

namespace App\Http\Controllers;

use App\Models\kr;
use Illuminate\Http\Request;

class StoneProducts extends Controller
{

  /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stoneproducts = (stoneproducts::all());

        return $stoneproducts; //ПОМЕНЯТЬ
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
            $stoneproducts = new StoneProducts;

            $stoneproducts->name = $request->name; //ПОМЕНЯТЬ
            $stoneproducts->type_id = $request->type_id;
            $stoneproducts->price = $request->price;
         

            $worker->save();
            return $worker;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(StoneProducts $stoneproducts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StoneProducts $stoneproducts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StoneProducts $stoneproducts)
    {
        if($request->id ==null)
        {
            $stoneproducts = new StoneProducts;

            $stoneproducts->name = $request->name; //ПОМЕНЯТЬ
            $stoneproducts->type_id = $request->type_id;
            $stoneproducts->price = $request->price;

            $stoneproducts->save();
            
            return true;
        } 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StoneProducts $stoneproducts)
    {
        //
    }
}
