<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class ProductController extends Controller
{
    public function index(): Response
    {
        $products = Product::with(['storage'])->orderBy('storage_id')->orderBy('title')->paginate(60);


        return Inertia::render('Products/Index', [
            'products' => $products->toArray()
        ]);
    }
}
