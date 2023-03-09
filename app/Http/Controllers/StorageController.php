<?php

namespace App\Http\Controllers;

use App\Models\Storage;
use Illuminate\Http\Request;
use Inertia\Inertia;

class StorageController extends Controller
{
    public function index(): \Inertia\Response
    {
        return Inertia::render('Storage/Index', [
            'storages' => Storage::all()
        ]);
    }

    public function create(): \Inertia\Response
    {
        return Inertia::render('Storage/Create');
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'name' => 'required|unique:App\Models\Storage,name'
        ]);
        Storage::create([
            'name' => $request->input('name'),
            'description' => $request->input('description')
        ]);
        return to_route('storage.index');
    }
}
