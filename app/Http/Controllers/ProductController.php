<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new product.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created product to the database.
     *
     * @param StoreRequest $request
     * @return RedirectResponse
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        Product::create($request->all());
        return redirect()->route('products')->with('success', 'Product created successfully!');
    }

    /**
     * Display the specified product.
     *
     * @param Product $product
     * @return Application|Factory|View
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified product.
     *
     * @param Product $product
     * @return Application|Factory|View
     *
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified product in the database
     *
     * @param UpdateRequest $request
     * @param Product $product
     * @return RedirectResponse
     */
    public function update(UpdateRequest $request, Product $product): RedirectResponse
    {
        $product->update($request->all());
        return redirect()->route('products')->with('success', 'Product updated successfully!');
    }

    /**
     * Archive the specified product in the database.
     *
     * @param Product $product
     * @return RedirectResponse
     */
    public function destroy(Product $product): RedirectResponse
    {
        $product->delete();
        return redirect()->route('products')->with('success','Product deleted successfully!');
    }
}
