<?php

namespace App\Http\Controllers;

use App\Models\kr;
use Illuminate\Http\Request;

class StoneProducts extends Controller
{

    public function index()
    {
        $stoneproducts = StoneProductsResource::collection(Event::all());
    
        return $stoneproducts;
    }


    public function name()
    {

        $materialtype = MaterialtypeName::collection(MaterialType::all());

        return $stoneproducts;
            
    }


    public function store(Request $request)
    {

        



    }

    public function show(kr $kr)
    {

    }

    
    public function edit(kr $kr)
    {

    }

    
    public function update(Request $request, kr $kr)
    {

    }


    public function destroy(kr $kr)
    {

    }
}
