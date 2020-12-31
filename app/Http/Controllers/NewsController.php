<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

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
        foreach ($validatedData as $data)
            News::create([
                'title' => $data->input('title'),
                'description' => $data->input('description'),
                'short_description' => $data->input('short_description'),
                'image' => $data->input('image'),
                'upload_date' => $data->now()->toDateTimeString(),
                'user_id' => $data->Auth::user()->id,
                'category_id' => $data->input('category_id'),
            ]);
        return redirect('/home');
    }
}
