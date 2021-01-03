<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function show_product($id)
    {
        $prod = DB::table('products')->where('id', '=', $id)->select('id', 'name', 'image_url', 'description', 'price', 'categories', 'nb_max')->get();
        return view('products', ['prod'=>$prod]);
    }

    public function index()
    {
        return view('products');
    }
}
