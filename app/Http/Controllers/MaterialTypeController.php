<?php

namespace App\Http\Controllers;

use App\Models\kr;
use Illuminate\Http\Request;

class MaterialType extends Controller
{
 /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materialtype = (materialtype::all());

        return $materialtype; //ПОМЕНЯТЬ
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
            $materialtype = new MaterialType;

            $materialtype->name = $request->name; //ПОМЕНЯТЬ
       

            $materialtype->save();
            return $materialtype;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(MaterialType $materialtype)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MaterialType $materialtype)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MaterialType $materialtype)
    {
        if($request->id ==null)
        {
            $materialtype = new MaterialType;

            $materialtype->name = $request->name;
       

            $materialtype->save();
            
            return true;
        } 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MaterialType $materialtype)
    {
        //
    }
}