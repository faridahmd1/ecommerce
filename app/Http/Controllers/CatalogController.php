<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCatalogRequest;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\UpdateCatalogRequest;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('catalog.index',[
            'catalogs'=>Catalog::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('catalog.create',[
            'categories'=>Category::all()
        ]);   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        // dd($request);
        $request -> validate([
            'category_id' => 'required',
            'name' => 'required|max:255',
            'price' => 'required|numeric',
            'detail' => 'required',
        ]);

        Catalog::create([
            'category_id'   => $request->category_id,
            'name'     => $request->name,
            'price'   => $request->price,
            'detail'   => $request->detail,
        ]);
        return redirect()->route('catalog.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Catalog $catalog)
    {
        return view('catalog.show', compact('catalog'));
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Catalog $catalog)
    {
        $categories = Category::all();
        return view('catalog.edit', compact('catalog', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Catalog $catalog)
    {
        $request->validate([
            'category_id' => 'required',
            'name' => 'required|max:255',
            'price' => 'required|numeric',
            'detail' => 'required',
        ]);

        $catalog->update($request->all());

        return redirect()->route('catalog.index')->with('success', 'Catalog updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Catalog $catalog)
    {
        $catalog->delete();

        return redirect()->route('catalog.index')->with('success', 'Catalog deleted successfully.');
    }
}
