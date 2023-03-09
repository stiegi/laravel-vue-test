<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Storage;
use Illuminate\Http\RedirectResponse;
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

    public function create(Request $request): Response
    {
        return Inertia::render('Products/Create',[
            'storages' => Storage::all(),
            'selected_storage' => $request->query("storage_id", "1")
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'storage_id' => 'exists:App\Models\Storage,id',
            'title' => 'required',
            'price' => 'numeric|integer',
            'amount' => 'numeric|integer'
        ]);
        Product::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'amount' => $request->input('amount'),
            'storage_id' => $request->input('storage_id')
        ]);
        return to_route('storage.products', ['storage' => $request->input('storage_id')]);
    }

    public function edit(Product $product): Response
    {
        return Inertia::render('Products/Edit', [
            'product' => $product,
            'storages' => Storage::all()
            // 'products' => $storage->products()->get()
        ]);
    }

    public function update(Request $request, Product $product): RedirectResponse
    {
        $request->validate([
            'storage_id' => 'exists:App\Models\Storage,id',
            'title' => 'required',
            'price' => 'numeric|integer',
            'amount' => 'numeric|integer'
        ]);
        $product->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'amount' => $request->input('amount'),
            'storage_id' => $request->input('storage_id')
        ]);
        return to_route('storage.products', ['storage' => $request->input('storage_id')]);
    }

    public function delete(Request $request, Product $product): RedirectResponse
    {
        $storage_id = $product->getAttribute('storage_id');
        $product->delete();
        return to_route('storage.products', ['storage' => $storage_id]);
    }
}
