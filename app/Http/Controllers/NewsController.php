<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|unique:news|max:255',
            'description' => 'required',
            'short_description' => 'required',
            'image' => 'nullable',
            'upload_date' => 'required|date',
            'user_id' => 'required|unique:news|max255',
            'category_id' => 'nullable'
        ]);
    }
}
