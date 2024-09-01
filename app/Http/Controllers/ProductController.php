<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // ici je recupères tous les produits
    public function index()
    {
        $products = Product::with('category', 'ratings')->get();
        return response()->json($products);
    }

    // ici c'est la methode cré un nouveau produit
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'image' => 'nullable|string',
            
        ]);

        $product = Product::create($validated);
        return response()->json($product, 201);
    }

    //Récupère un produit spécifique avec ses relations.
    public function show($id)
    {
        $product = Product::with('category', 'ratings')->findOrFail($id);
        return response()->json($product);
    }

    
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'sometimes|string|max:255',
            'description' => 'sometimes|string',
            'price' => 'sometimes|numeric',
            'stock' => 'sometimes|integer',
            'image' => 'nullable|string',
            'category_id' => 'sometimes|exists:categories,id',
            'user_id' => 'sometimes|exists:users,id'
        ]);

        $product = Product::findOrFail($id);
        $product->update($validated);
        return response()->json($product);
    }

    public function destroy($id)
    {
        Product::destroy($id);
        return response()->json(null, 204);
    }
}
