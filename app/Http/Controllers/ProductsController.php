<?php

namespace App\Http\Controllers;

class ProductsController extends Controller
{
    public function index()
    {

        print_r(route('products'));

        return view('products.index');
    }

    public function about()
    {
        return "About us page";
    }

    public function show($name)
    {
        $data = [
            'iphone'  => 'iPhone',
            'samsung' => 'Samsung',
        ];

        return view('products.index',
        [
            'products' => $data[$name] ?? 'Product ' . $name . ' does not exist in the database'
        ]
    );
    }
}
