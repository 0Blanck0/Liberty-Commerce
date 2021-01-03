<?php

namespace App\Http\Controllers;

use App\Models\Model\paniers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\JsonResponse;
use const http\Client\Curl\AUTH_ANY;

class PaniersController extends Controller
{
    public function index()
    {
        return view('paniers');
    }

    public function buy(Request $request) : JsonResponse
    {
        $data = $request->input('data');

        return response()->json([
            'resp' => "i'm here",
            'data' => $data
        ]);
    }
}
