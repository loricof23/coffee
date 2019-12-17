<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class productController extends Controller
{
    public function list(){
        $products = Products ::all();

        return view ('pages.product', ['kopi' => $products]);
    }
}
