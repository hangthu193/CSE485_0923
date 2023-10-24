<?php

namespace App\Http\Controllers;

use App\Models\Flower;
use Illuminate\Http\Request;

class FlowerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $flowers = Flower::orderBy("created_at","desc")->get();
        return view("flowers.index", compact("flowers"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("flowers.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $flower = Flower::create($data);
        if( $flower ) {
            return redirect()->route("flowers.index")->with(['success' => "Flower created successfully"], 200);
        } else {
            return redirect()->route("flowers.create")->with(["error","Flower create failed"], 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Flower $flower)
    {
        
        return view('flowers.show', compact('flower'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Flower $flower)
    {
        $flower = Flower::where('id', $flower->id)->first();
        return view('flowers.edit', compact('flower'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Flower $flower)
    {
        $data = $request->except(['_token', '_method']);
        $flower = Flower::where('id', $flower->id);
        if ($flower) {
            $flower->update($data);
            return redirect(route('flowers.index'))->with(['success' => "Flower updated successfully"], 200);
        } else {
            return redirect(route('flowers.edit',['id'=>$flower->id]))->with(['error' => "Flower updated failed"], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Flower $flower)
    {
        $flower->delete();
        return redirect()->route("flowers.index")->with(["success"=> "Flower deleted successfully"],200);
    }
}
