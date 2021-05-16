<?php

namespace App\Dice;

/**
 * Dice game.
 */
class DiceGame
{
    /**
     * @var DiceHand    $diceHand       DiceHand object.
     * @var int         $numDices       Number of dices.
     * @var int         $numPlayers     Number of players.
     * @var int         $pointsRound    Points of round.
     * @var array       $protocol       Game stats, points of each player.
     */
    public $diceHand;
    public $numDices;
    public $protocol;
    public $computerLastHand;
    public $playerLastHand;
    public $playerLastHandGraph;
    public $playerLastHandSum;
    public $computerLastHandSum;
    public $playerWin;
    public $computerWin;
    public $playerTotalScore;
    public $computerTotalScore;
    public $playerBitcoin;
    public $computerBitcoin;
    public $bet;

    /**
     * @var integer MAXPOINTS Maximum points.
     */
    const MAXPOINTS = 21;

    /**
     * Constructor to create a DiceGame.
     *
     * @param int $numDices Number of dices to create, defaults to five.
     */
    public function __construct(int $numDices = 1)
    {
        $this->diceHand  = new DiceHand($numDices);
        $this->numDices = $numDices;
        $this->protocol = ["player" => 0, "computer" => 0];
        $this->playerLastHand = [];
        $this->computerLastHand = [];
        $this->playerLastHandGraph = [];
        $this->playerLastHandSum = 0;
        $this->computerLastHandSum = 0;
        $this->playerWin = false;
        $this->computerWin = false;
        $this->playerTotalScore = 0;
        $this->computerTotalScore = 0;
        $this->playerBitcoin = 10;
        $this->computerBitcoin = 100;
        $this->bet = null;
    }

    /**
     * Player play.
     *
     * @return array
     */
    public function playerPlay()
    {
        $this->diceHand->roll();
        $this->playerLastHand = $this->diceHand->values();
        $this->playerLastHandSum = $this->diceHand->sum();
        $this->playerLastHandGraph = $this->diceHand->graphicalValues();
        $this->protocol["player"] += $this->diceHand->sum();

        $this->assertPlayerWin();

        return $this->diceHand->values();
    }

    /**
     * Player win.
     *
     * @return void
     */
    public function playerWin()
    {
        $this->playerWin = true;
        $this->playerTotalScore += 1;
        $this->playerBitcoin += $this->bet;
        $this->computerBitcoin -= $this->bet;
    }

    /**
     * Computer win.
     *
     * @return void
     */
    public function computerWin()
    {
        $this->computerWin = true;
        $this->computerTotalScore += 1;
        $this->playerBitcoin -= $this->bet;
        $this->computerBitcoin += $this->bet;
    }

    /**
     * Assert if player win.
     *
     * @return void
     */
    public function assertPlayerWin()
    {
        if ($this->protocol["player"] === 21) {
            $this->playerWin();
        } else if ($this->protocol["player"] > 21) {
            $this->computerWin();
        }
    }

    /**
     * Assert if computer win.
     *
     * @return void
     */
    public function assertComputerWin()
    {
        if ($this->protocol["computer"] > 21) {
            $this->playerWin();
            return;
        }
        $this->computerWin();
    }

    /**
     * Computer play.
     *
     * @return array
     */
    public function computerPlay()
    {
        while ($this->protocol["computer"] <= $this->protocol["player"]) {
            $this->diceHand->roll();
            $this->computerLastHand = $this->diceHand->values();
            $this->computerLastHandSum = $this->diceHand->sum();
            $this->protocol["computer"] += $this->diceHand->sum();
        }

        $this->assertComputerWin();

        return $this->diceHand->values();
    }

    /**
     * Reset game for new round.
     *
     * @return void
     */
    public function newRound()
    {
        $this->protocol = ["player" => 0, "computer" => 0];
        $this->playerLastHand = [];
        $this->computerLastHand = [];
        $this->playerLastHandGraph = [];
        $this->playerLastHandSum = 0;
        $this->computerLastHandSum = 0;
        $this->playerWin = false;
        $this->computerWin = false;
        $this->bet = null;
    }
}
