<?php
namespace InakaPhper\Kinship;

/**
 * Created by PhpStorm.
 * User: okuda
 * Date: 2018/11/20
 * Time: 18:53
 */

class Female
{
    private $grandma;

    private $mum;

    private $me;

    public function __construct(int $number)
    {
        $this->me = (int)$number;
        $this->mum = (int)($this->me > 1 ? round($this->me / 3) : 0);
        $this->grandma = (int)($this->mum > 1 ? round($this->mum / 3) : 0);
    }

    public function getMe()
    {
        return $this->me;
    }

    public function getMum()
    {
        return $this->mum;
    }

    public function getGrandma()
    {
        return $this->grandma;
    }

}