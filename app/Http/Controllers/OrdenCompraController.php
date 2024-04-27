<?php

namespace App\Http\Controllers;

use App\Models\OrdenCompra;
use Illuminate\Http\Request;

class OrdenCompraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ordenesCompra = OrdenCompra::all();
        return view('ordenes_compra.index', compact('ordenesCompra'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ordenes_compra.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        OrdenCompra::create($request->all());
        return redirect()->route('ordenes-compra.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(OrdenCompra $ordenCompra)
    {
        return view('ordenes_compra.show', compact('ordenCompra'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrdenCompra $ordenCompra)
    {
        return view('ordenes_compra.edit', compact('ordenCompra'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OrdenCompra $ordenCompra)
    {
        $ordenCompra->update($request->all());
        return redirect()->route('ordenes-compra.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrdenCompra $ordenCompra)
    {
        $ordenCompra->delete();
        return redirect()->route('ordenes-compra.index');
    }
}
