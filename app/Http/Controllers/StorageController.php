<?php

namespace App\Http\Controllers;

use App\Models\Storage;
use Illuminate\Http\Request;
use Inertia\Inertia;

class StorageController extends Controller
{
    public function index(): \Inertia\Response
    {
        return Inertia::render('Storage', [
            'storages' => Storage::all()
        ]);
    }
}
