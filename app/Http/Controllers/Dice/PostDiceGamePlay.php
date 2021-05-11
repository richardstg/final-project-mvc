<?php

declare(strict_types=1);

// use Psr\Http\Message\ResponseInterface;

namespace App\Http\Controllers\Dice;

// use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Controller for processing game play.
 */
class PostDiceGamePlay extends Controller
{
    public function index()
    {
        // $_SESSION["lastRollPlayer"] = $_SESSION["game"]->playerPlay();
        session(['lastRollPlayer' => session('game')->playerPlay()]);

        if (session('game')->playerWin || session('game')->computerWin) {
            return redirect('dice/results');
        }
        return redirect('dice/play');
        // return redirect()->route('dice/play')->with(['success' => 'Post Successfully Created']);
    }
}
