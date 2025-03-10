<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Product::all();
        return Inertia::render('Product/Index', ['products' => $products]);
    }

    public function indexAdmin()
    {
        $products = Product::paginate(5);
        return Inertia::render('Admin/Products/Index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Admin/Products/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'desc' => 'required|string',
            'image' => 'required|image|max:2048'
        ]);

        $imagePath = $request->file('image')?->store('product', 'public');

        Product::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'desc' => $request->desc,
            'photo' => $imagePath,
        ]);

        return redirect()->route('admin.product');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        return Inertia::render('Admin/Products/Edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'desc' => 'required|string',
            'image' => 'nullable|image|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('product', 'public');
            $product->photo = $imagePath;
        }

        $product->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'desc' => $request->desc,
            'photo' => $product->photo,
        ]);

        return redirect()->route('admin.product');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();


        return redirect()->route('admin.product');
    }
}
