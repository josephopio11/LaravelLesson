<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $title = "Welcome to my Course";
        $description = "Created by Joseph Opio";

        // Compact Method
        // return view('products.index', compact('title', 'description'));

        // With Method
        return view('products.index')->with('title', $title);
    }

    public function about()
    {
        return "About us page";
    }
}
