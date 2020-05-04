<?php


class Square implements ISquare
{
    public function squareArea(int $sideSquare) {
        return (new AdapterSquare())->squareArea($sideSquare);
    }
}