<?php

// declare(strict_types=1);

namespace App\Http\Controllers\Dice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// use Psr\Http\Message\ResponseInterface;

/**
 * Controller for initializing the game.
 */
class GetDiceGame extends Controller
{
    public function index()
    {
        session(['game' => null]);

        return view('dicegameinit');
    }
}
