<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 29/11/16
 * Time: 08:06
 */

namespace wcs;


class KataPoker
{
    const HIGH_CARD_SCORE = 1;
    const PAIR_SCORE = 2;
    const DOUBLE_PAIR_SCORE = 4;
    const THREE_OF_A_KING_SCORE = 8;
    const STRAIGHT_SCORE = 16;
    const FLUSH_SCORE = 32;
    const FULL_HOUSE_SCORE = 64;
    const FOUR_OF_A_KING_SCORE = 128;
    const STRAIGHT_FLUSH_SCORE = 256;
    const ROYAL_FLUSH_SCORE = 512;

    private $cardsValue = ['2', '3', '4', '5', '6', '7', '8', '9', '10', 'V', 'D', 'R', 'A'];

    public function action($value)
    {

    }
}