<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagController extends Controller
{
    public function create()
    {
        return view('createtag');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|unique:tags|max:10',
        ]);
        foreach ($validatedData as $data)
            Tag::create([
                'title' => $data->input('title'),
            ]);
        return redirect('/home');
    }
}
