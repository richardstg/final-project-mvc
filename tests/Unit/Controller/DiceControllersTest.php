<?php

namespace App\Http\Controllers\Dice;

use App\Dice\DiceGame;
use App\Dice\DiceHand;
use App\Http\Controllers\RollDices\RollDices;
use Illuminate\Http\Request;
// use Illuminate\Http\Response;
use Tests\TestCase;
// use Illuminate\Foundation\Testing\WithoutMiddleware;

/**
 * Test cases for class Dice.
 */
class DiceControllersTest extends TestCase
{
    /**
     *
     */
    public function testGetDiceGame()
    {
        // $request = Request::create('/store', 'POST', [
        //     'title'     =>     'foo',
        //     'text'     =>     'bar',
        // ]);
        // $response = $this->withSession(['game' => null])->get('/dice');
        // $this->session(['answers' => array('something')]);

        // $this->call('GET', '/dice')->assertViewHas(null);

        // $controller = new GetDiceGame();
        // $response = $controller->index();
        // $this->assertEquals($response, $this->get('/dice')->content());

        $response = $this->get('/dice');
        $this->assertTrue($response->isOk());
    }

    /**
     *
     */
    public function testGetDiceGamePlay()
    {
        $game = new DiceGame();

        $this->session(['game' => $game]);

        // $controller = new GetDiceGamePlay();
        // $response = $controller->index();

        // $this->assertEquals($response, $this->get('/dice/play')->content());

        $this->call('GET', '/dice/play')->assertViewHas('playerLastHand');
    }

    /**
     *
     */
    public function testGetDiceGameResults()
    {
        $game = new DiceGame();
        $this->session(['game' => $game]);

        // $controller = new GetDiceGameResults();
        // $response = $controller->index();

        // $this->assertEquals($response, $this->get('/dice/results')->content());
        $this->call('GET', '/dice/results')->assertViewHas('playerWin');
    }

    /**
     *
     */
    public function testPostDiceGame()
    {
        $this->withoutMiddleware();
        $game = new DiceGame();

        $this->withSession(['game' => $game])->post('/dice')->assertRedirect("/dice/play");
    }

    /**
     *
     */
    public function testPostDiceGamePlay()
    {
        $this->withoutMiddleware();
        $game = new DiceGame();

        $this->withSession(['game' => $game])->post('/dice/play', ['numDices' => 5])->assertRedirect("/dice/play");
    }

    /**
     *
     */
    public function testPostDiceGameComputerPlay()
    {
        $this->withoutMiddleware();
        $game = new DiceGame();

        $this->withSession(['game' => $game])->post('/dice/computerplay')->assertRedirect("/dice/results");
    }

    /**
     *
     */
    public function testPostRollDices()
    {
        $this->withoutMiddleware();
        $diceHand = new DiceHand();

        $this->withSession(['dicehand' => $diceHand])->post('/rolldices', ['rollDices' => true])->assertRedirect("/rolldices");
        $this->withSession(['dicehand' => $diceHand])->post('/rolldices', ['quit' => true])->assertRedirect("/");
    }
}
