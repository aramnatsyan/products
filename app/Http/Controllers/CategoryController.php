<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;
use App\Models\Category;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class CategoryController extends Controller
{
    /**
     * Display a listing of the categories.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new category.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created category to the database.
     *
     * @param StoreRequest $request
     * @return RedirectResponse
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        Category::create($request->all());
        return redirect()->route('categories')->with('success', 'Category created successfully!');
    }

    /**
     * Display the specified category.
     *
     * @param Category $category
     * @return Application|Factory|View
     */
    public function show(Category $category)
    {
        return view('categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified category.
     *
     * @param Category $category
     * @return Application|Factory|View
     *
     */
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified category in the database
     *
     * @param UpdateRequest $request
     * @param Category $category
     * @return RedirectResponse
     */
    public function update(UpdateRequest $request, Category $category): RedirectResponse
    {
        $category->update($request->all());
        return redirect()->route('categories')->with('success', 'Category updated successfully!');
    }

    /**
     * Archive the specified category in the database.
     *
     * @param Category $category
     * @return RedirectResponse
     */
    public function destroy(Category $category): RedirectResponse
    {
        $category->delete();
        return redirect()->route('categories')->with('success','Category deleted successfully!');
    }
}
