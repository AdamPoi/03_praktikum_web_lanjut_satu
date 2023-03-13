<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

  public function show(string $product)
  {
    return view('product', ['product' => $product]);
  }
}