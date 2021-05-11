<?php

declare(strict_types=1);

// use Psr\Http\Message\ResponseInterface;

namespace App\Http\Controllers\Dice;

// use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Controller for processing game play.
 */
class PostDiceGameComputerPlay extends Controller
{
    public function index()
    {
        session('game')->computerPlay();

        return redirect('dice/results');
        // return redirect()->route('dice.results')->with(['success' => 'Post Successfully Created']);
    }
}
