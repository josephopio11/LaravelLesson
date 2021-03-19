<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $title = "Welcome to my Course";
        $description = "Created by Joseph Opio";

        $data = [
            'productOne' => 'iPhone',
            'productTwo' => 'Samsung'
        ];

        // Compact Method
        // return view('products.index', compact('title', 'description'));

        // With Method
        // return view('products.index')->with('title', $title);
        // return view('products.index')->with('data', $data);

        // Return directly to the vew
        return view('products.index', [
            'data' => $data
        ]);
    }

    public function about()
    {
        return "About us page";
    }
}
