<?php

namespace App\Http\Controllers\RollDices;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Dice\DiceHand;

// use Psr\Http\Message\ResponseInterface;

/**
 * Controller for rolling dices.
 */
class RollDices extends Controller
{
    public function get()
    {
        $data = [];

        if (!session('dicehand')) {
            session(['dicehand' => new DiceHand()]);
            return view('rolldices', $data);
        }

        $data = [
            'lastHandGraphical' => session('dicehand')->graphicalValues()
        ];

        return view('rolldices', $data);
    }

    public function post(Request $request)
    {
        if ($request->rollDices) {
            session('dicehand')->roll();
            return redirect('rolldices');
        }

        if ($request->quit) {
            session(['dicehand' => null]);
            return redirect('/');
        }
    }
}
