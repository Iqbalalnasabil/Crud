<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function create()
    {
        return view('create-category');
    }

    public function index()
    {
        $categories = Category::all();
        return view('category', compact('categories'));
    }
 
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        Category::create($request->all());
        return redirect('/category')->with('message', 'Data Berhasil ditambahkan');;
    }

    public function delete($id)
    {
        Category::destroy($id);
        return back();
    }
}