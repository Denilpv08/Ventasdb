<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $category = Category::all();
        return view('categories.index', compact('category'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->post('name');
        $category->description = $request->post('description');
        $category->save();
        return redirect()->route('categories.index')->with('success', 'Successfully added');
    }

    public function show($id)
    {
        $category = Category::find($id);
        return view('categories.delete', compact('category'));
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->post('name');
        $category->description = $request->post('description');
        $category->update();
        return redirect()->route('categories.index')->with('success', 'Successfully updated');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Successfully deleted');
    }
}
