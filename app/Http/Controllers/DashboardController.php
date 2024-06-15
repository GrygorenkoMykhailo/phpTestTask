<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $products = Product::with('images')->get();
        return view('dashboard.index', ['products' => $products]);
    }

    public function create()
    {
        return view('dashboard.create');
    }
}
