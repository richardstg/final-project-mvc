<?php

namespace App\Http\Controllers\Dice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// use Psr\Http\Message\ResponseInterface;

/**
 * Controller for playing the round.
 */
class GetDiceGamePlay extends Controller
{
    public function index()
    {
        $data = [
            "playerLastHand" => session('game')->playerLastHand,
            "playerLastHandSum" => session('game')->playerLastHandSum,
            "playerLastHandGraph" => session('game')->playerLastHandGraph,
            "totalPointsPlayer" => session('game')->protocol["player"],
        ];

        return view('dicegameplay', $data);
    }
}
