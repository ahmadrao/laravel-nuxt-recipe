<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $recipesCount = Recipe::count();
        return view('admin.index', compact('recipesCount'));
    }
}
