<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        //buscar todos os produtos do banco de dados
        $products = Product::all();

        //Retornar a view 'pages.home' e passar a variável 'products'
        return view('pages.home',[
            'products' => $products
        ]);
    }
}
