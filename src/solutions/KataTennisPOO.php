<?php

namespace wcs;

class Player
{
    /** @var string */
    private $gender;

    /** @var integer */
    private $point;

    /** @var integer */
    private $game;

    /** @var integer */
    private $set;

    /** @var string */
    private $name;

    /**
     * Player constructor.
     * @param string $name
     * @param string $gender
     */
    public function __construct($name, $gender)
    {
        $this->setName($name)->setGender($gender);
        $this->point = 0;
        $this->game = 0;
        $this->set = 0;
    }

    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     * @return Player
     */
    public function setGender(string $gender): Player
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return int
     */
    public function getPoint(): int
    {
        return $this->point;
    }

    /**
     * @return Player
     * @internal param int $point
     */
    public function addPoint(): Player
    {
        $this->point++;
        return $this;
    }

    public function resetPoint()
    {
        $this->point = 0;
    }

    /**
     * @return int
     */
    public function getGame(): int
    {
        return $this->game;
    }

    /**
     * @return Player
     * @internal param int $game
     */
    public function addGame(): Player
    {
        $this->game++;
        $this->resetPoint();
        return $this;
    }

    public function resetGame()
    {
        $this->game = 0;
    }

    /**
     * @return int
     */
    public function getSet(): int
    {
        return $this->set;
    }

    /**
     * @return Player
     * @internal param int $set
     */
    public function addSet(): Player
    {
        $this->set++;
        $this->resetGame();
        $this->resetPoint();
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Player
     */
    public function setName(string $name): Player
    {
        $this->name = $name;
        return $this;
    }
}

class Match
{
    const STR_SCORE = ['0', '15', '30', '40', 'A'];

    /** @var  array Player */
    private $players;

    /** @var  String */
    private $score;

    public function __construct(Player $player1, Player $player2)
    {
        if ($player1->getGender() !== $player2->getGender()){
            throw new \Exception("Mixed matches are forbidden.");
        }
        $this->players[1] = $player1;
        $this->players[2] = $player2;
        $this->score = "";
    }

    public function addEarnedPoints(string $points): void
    {
        $points = str_split($points);
        foreach($points as $point){
            $this->players[$point]->addPoint();
            $this->setGames();
            $this->setSets();
        }
    }

    /**
     * @return string
     */
    public function getScore(): string
    {
        $score  = $this->players[1]->getSet() . "/" . $this->players[2]->getSet();
        $score .= " - ";
        $score .= $this->players[1]->getGame() . "/" . $this->players[2]->getGame();
        $score .= " - ";
        $p1 = $this->players[1]->getPoint();
        $p2 = $this->players[2]->getPoint();
        if (($p1 > 3 || $p2 > 3) && $p2 == $p1){
            $p1 = $p2 = 3;
        } elseif ($p1 > 3 && $p1 - $p2 == 1){
            $p1 = 4;
            $p2 = 3;
        } elseif ($p2 > 3 && $p2 - $p1 == 1){
            $p1 = 3;
            $p2 = 4;
        }
        $pointP1 = self::STR_SCORE[$p1];
        $pointP2 = self::STR_SCORE[$p2];
        $score .= $pointP1 . "/" . $pointP2;
        return $score;
    }

    private function setGames()
    {
        if ($this->players[1]->getPoint() > 3 && $this->getPointDiff(1, 2) >= 2 ){
            $this->players[1]->addGame();
            $this->players[2]->resetPoint();
        }
        if ($this->players[2]->getPoint() > 3 && $this->getPointDiff(2, 1) >= 2 ){
            $this->players[2]->addGame();
            $this->players[1]->resetPoint();
        }
    }

    private function setSets()
    {
        if ($this->players[1]->getGame() > 5 && $this->getGameDiff(1, 2) >= 2 ){
            $this->players[1]->addSet();
            $this->players[2]->resetPoint();
            $this->players[2]->resetGame();
        }
        if ($this->players[2]->getGame() > 5 && $this->getGameDiff(2, 1) >= 2 ){
            $this->players[2]->addSet();
            $this->players[1]->resetPoint();
            $this->players[1]->resetGame();
        }
    }

    private function getPointDiff($p1, $p2)
    {
        return $this->players[$p1]->getPoint() - $this->players[$p2]->getPoint();
    }

    private function getGameDiff($p1, $p2)
    {
        return $this->players[$p1]->getGame() - $this->players[$p2]->getGame();
    }
}

$p1 = new Player("John", "M");
$p2 = new Player("Bill", "M");
$match = new Match($p1, $p2);
$match->addEarnedPoints("11122212222222222222222111111111122222212122222122112222");
echo $match->getScore() . PHP_EOL;