<?php

namespace App\Http\Controllers;

use App\Models\Model\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin');
    }

    public function save(Request $request)
    {
        $prod = new products();

        $url = $request->input('url');

        $prod->owner_id = Auth::id();
        $prod->name = $request->input('name');
        $prod->reference = $request->input('ref');
        $prod->price = $request->input('price');
        $prod->description = $request->input('description');
        $prod->category = $request->input('category');

        if(!empty($url) && $url != "N/A" && $url != "none") {
            $prod->image_url = $url;
        } else {
            $prod->image_url = "https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/300px-No_image_available.svg.png";
        }

        $prod->nb_max = $request->input('max');

        $prod->save();

        return redirect()->route('admin');
    }
}
