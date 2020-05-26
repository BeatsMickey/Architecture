<?php


class SuqareAreaLib
{
    public function getSquareArea(float $diagonal)
    {
        $area = ($diagonal ** 2) / 2;
        return $area;
    }
}