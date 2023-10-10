<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo "index from TLU";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        echo "create from TLU";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        echo "store from TLU";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        echo "show from TLU";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        echo "create from TLU";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        echo "update from TLU";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        echo "destroy from TLU";
    }
}
