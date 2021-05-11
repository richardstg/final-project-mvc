<?php

declare(strict_types=1);

namespace App\Http\Controllers\Dice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Dice\DiceGame;
use App\Models\Highscore;

/**
 * Controller for processing game play.
 */
class PostDiceGame extends Controller
{
    public function index(Request $request)
    {
        if ($request->quit) {
            $highscore = new Highscore();

            $highscore->player_points = session('game')->playerTotalScore;
            $highscore->computer_points = session('game')->computerTotalScore;

            $highscore->save();

            session(['game' => null]);

            return redirect('highscore');
        }
        if (session('game') === null) {
            session(['game' => new DiceGame(intval($request->numberDices))]);
            return redirect('dice/play');
        }

        session('game')->newRound();
        return redirect('dice/play');
    }
}
