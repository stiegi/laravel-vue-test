<?php

namespace App\Http\Controllers;

use App\Models\Storage;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use \Illuminate\Http\RedirectResponse;

class StorageController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Storage/Index', [
            'storages' => Storage::all()
        ]);
    }

    public function create(): Response
    {
        return Inertia::render('Storage/Create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|unique:App\Models\Storage,name'
        ]);
        $a = Storage::create([
            'name' => $request->input('name'),
            'description' => $request->input('description')
        ]);
        return to_route('storage.index');
    }

    public function update(Request $request, Storage $storage): RedirectResponse
    {
        $request->validate([
            'name' => 'required|unique:App\Models\Storage,name,' . $storage->id
        ]);
        $storage->update([
            'name' => $request->input('name'),
            'description' => $request->input('description')
        ]);
        return to_route('storage.index');
    }

    public function products(Storage $storage): Response
    {
        return Inertia::render('Storage/Products', [
            'storage' => $storage,
            'products' => $storage->products()->get()
        ]);
    }

    public function edit(Storage $storage): Response
    {
        return Inertia::render('Storage/Edit', [
            'storage' => $storage
           // 'products' => $storage->products()->get()
        ]);
    }
}
