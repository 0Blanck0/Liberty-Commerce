<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddressController extends Controller
{

    public function store(Request $request)
    {
        address::create($request->all());
    }

}
