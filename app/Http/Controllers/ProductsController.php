<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGameRequest;
use App\Http\Requests\UpdateGameRequest;
use App\Models\Category;
use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Game::all();
        return view('products.games', compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateGameRequest $request)
    {
        $validatedData = $request->validated();
    
        $imagePath = $request->file('image')->store('product-img');
        $validatedData['image'] = $imagePath;
        $validatedData['category_id'] = $validatedData['category'];
        $game = Game::create($validatedData);

        return redirect()->route('games.show', $game)->with('status', 'El videojuego ha sido creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {
        return view('products.show', compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game)
    {
        $categories = Category::all();
        return view('products.edit', compact('game', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGameRequest $request, Game $game)
    {
        $validatedData = $request->validated();
        $validatedData['category_id'] = $validatedData['category'];
        $game->update($validatedData);

        if ($request->hasFile('image')) {
            Storage::delete($game->image);

            $imagePath = $request->file('image')->store('product-img');
            $game->image = $imagePath;
            $game->save();
        }
        
        return redirect()->route('games.edit', $game)->with('status', 'El videojuego ha sido actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        $game->delete();
        return redirect()->route('games.index');
    }
}
