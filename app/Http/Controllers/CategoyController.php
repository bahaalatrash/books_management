<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoyController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }
    public function create()
    {
        return view('categories.create');
    }
    public function store(Request $request)
    {
        Category::create([
            "name" => $request->name
        ]);
        return redirect()->route('categories.index');
    }

    public function edit(int $id)
    {
        $category = Category::find($id);
        return view('categories.edit', compact('category'));
    }
    public function update(Request $request, int $id)
    {
        Category::query()->where('id', $id)->update([
            "name" => $request->name
        ]);
        return redirect()->route('categories.index');
    }

    public function destroy(int $id)
    {
        Category::query()->where('id', $id)->delete();
        return redirect()->route('categories.index');
    }
}
