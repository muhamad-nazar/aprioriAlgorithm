<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //Product
    public function product() {
        $product = Product::all();
        return view('pages.product.index', [
            "link" => "product",
            "title" => "Dashboard Admin | Product",
            "product" => $product
        ]);
    }
}
