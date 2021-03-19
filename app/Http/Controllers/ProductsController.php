<?php

namespace App\Http\Controllers;

class ProductsController extends Controller
{
    public function index()
    {
        $title       = "Welcome to my Course";
        $description = "Created by Joseph Opio";

        $data = [
            'productOne' => 'iPhone',
            'productTwo' => 'Samsung',
        ];

        // Return directly to the vew
        return view('products.index', [
            'data' => $data,
        ]);
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
