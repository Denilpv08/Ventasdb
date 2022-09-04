<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Client;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $product = Product::all();
        return view('products.index', compact('product'));
    }

    public function create()
    {
        $product = Product::all();
        $category = Category::all();
        $client = Client::all();
        return view('products.create', compact('product', 'client', 'category'));
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->post('name');
        $product->id_category = $request->post('category');
        $product->id_client = $request->post('client');
        $product->price = $request->post('price');
        $product->stock = $request->post('stock');
        $product->save();
        return redirect()->route('products.index')->with('success', 'Successfully added');
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('products.delete', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $category = Category::all();
        $client = Client::all();
        return view('products.edit', compact('product', 'category', 'client'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->post('name');
        $product->id_category = $request->post('category');
        $product->id_client = $request->post('client');
        $product->price = $request->post('price');
        $product->stock = $request->post('stock');
        $product->update();
        return redirect()->route('products.index')->with('success', 'Successfully updated');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Successfully deleted');
    }
}
