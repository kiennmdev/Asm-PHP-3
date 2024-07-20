<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $newProducts = Product::query()->latest('id')->where('is_new', '=', true)->limit(8)->get();
        // dd($newProducts->all());
        return view('client.home', compact('newProducts'));
    }
}
