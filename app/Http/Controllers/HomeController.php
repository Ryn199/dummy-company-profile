<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Client;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'articles' => Article::latest()->take(3)->get(),
            'products' => Product::all(),
            'events' => Event::latest()->take(3)->get(),
            'galleries' => Gallery::latest()->take(6)->get(),
            'clients' => Client::latest()->take(5)->get(),
        ]);
    }
}
