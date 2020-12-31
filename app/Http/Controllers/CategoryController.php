<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function create()
    {
        return view('createcat');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|unique:categories|max:255',
        ]);
        foreach ($validatedData as $data)
            Category::create([
                'title' => $data->input('title'),
            ]);
        return redirect('/home');
    }
}
