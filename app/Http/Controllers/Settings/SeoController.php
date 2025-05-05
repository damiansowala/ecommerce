<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    public function index()
    {
        return view('Settings-SEO::index');
    }

    public function update(Request $request)
    {
        // Logika aktualizacji ustawień SEO
    }
}
