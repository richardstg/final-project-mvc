<?php

namespace App\Http\Controllers\Dice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// use Psr\Http\Message\ResponseInterface;

/**
 * Controller for showing results.
 */
class GetDiceGameResults extends Controller
{
    public function index()
    {
        $data = [
            "playerLastHandSum" => session('game')->playerLastHandSum,
            "roundPointsPlayer" => session('game')->protocol["player"],
            "roundPointsComputer" => session('game')->protocol["computer"],
            "playerTotalScore" => session('game')->playerTotalScore,
            "computerTotalScore" => session('game')->computerTotalScore,
            "playerWin" => session('game')->playerWin,
        ];

        return view('dicegameresults', $data);
    }
}
