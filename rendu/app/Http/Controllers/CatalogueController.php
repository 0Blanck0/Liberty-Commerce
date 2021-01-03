<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatalogueController extends Controller
{
    public function show()
    {
        $prod = DB::table('products')->select('id', 'name', 'image_url', 'price')->get();
        return view('catalogue', ['prod'=>$prod]);
    }
}
