<?php

namespace App\Http\Controllers;

use App\Mail\GamesSubscription;
use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class GamesController extends Controller
{
    public function index(Request $request) 
    {
        $games = Game::all();
        return view('games.games', compact('games'));
    }

    public function show(Game $game)
    {
        return view('games.show', compact('game'));
    }

    public function sendEmail(Request $request) {
        Mail::to($request->input('email'))->send(new GamesSubscription());
        return redirect('/');
    }
}
