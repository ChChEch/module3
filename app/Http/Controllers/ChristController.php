<?php

namespace App\Http\Controllers;

use App\Models\Christ;
use App\Http\Requests\StoreChristRequest;
use App\Http\Requests\UpdateChristRequest;

class ChristController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Christ::latest()->paginate(12);
        return view('products.index', compact('products'));
    }

    public function preview(){

        $previews = Christ::all()->orderBy($column, 'asc');
        return view('products.show', compact('previews'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreChristRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreChristRequest $request)
    {
        $product = new Christ($request->validated());
        $product->save();
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Christ  $christ
     * @return \Illuminate\Http\Response
     */
    public function show(Christ $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Christ  $christ
     * @return \Illuminate\Http\Response
     */
    public function edit(Christ $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateChristRequest  $request
     * @param  \App\Models\Christ  $christ
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateChristRequest $request, Christ $product)
    {
        $product->fill($request->validated());
        $product->save();
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Christ  $christ
     * @return \Illuminate\Http\Response
     */
    public function destroy(Christ $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Deleted' );
    }
}
