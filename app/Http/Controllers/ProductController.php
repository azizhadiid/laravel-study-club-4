<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    function index(Request $request)
    {
        $nama = $request->nama;
        $products = DB::table('products')
            ->where('nama', 'LIKE', '%' . $nama . '%')
            ->simplePaginate(10);
        return view('product', ["products" => $products, 'nama' => $nama]);
    }
}
