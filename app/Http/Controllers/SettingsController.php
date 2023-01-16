<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
public function settings() {
    return view('app\settings');
}
public function update(Request $request)
{
    $request->validate([
        'language' => 'required|string|in:en,pt-BR,es'
    ]);
    session(['language' => $request->language]);
    return redirect()->back();
}
}
