<?php

namespace App\Http\Controllers\Highscore;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Highscore;

/**
 * Controller for books.
 */
class HighscoreController extends Controller
{
    public function get()
    {
        $highscores = Highscore::orderBy('player_points', 'DESC')->get();

        $data = [
            'highscores' => $highscores
        ];

        return view('highscore', $data);
    }
}
