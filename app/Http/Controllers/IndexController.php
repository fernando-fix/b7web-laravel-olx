<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $advertisements = Advertisement::orderBy('created_at', 'desc')->limit(8)->get();
        return view('web.pages.home', compact('advertisements'));
    }
}
