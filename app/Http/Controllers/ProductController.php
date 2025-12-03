<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(string $slug)
    {
        // 1. Encontrar o produto pelo slug (URL amigável)
        $product = Product::where('slug', $slug)->firstOrFail();

        // 2. Retornar a view e passar o produto encontrado
        return view('pages.product-details', [
            'product' => $product
        ]);
    }
}