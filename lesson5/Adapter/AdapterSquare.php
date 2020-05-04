<?php


class AdapterSquare implements ISquare
{
    private function sideToDiagonal(int $side) {
        $c = sqrt(2 * ($side ** 2));
        return $c;
    }

    public function squareArea(int $sideSquare) {
        $diagonal = $this->sideToDiagonal($sideSquare);
        return (new SuqareAreaLib())->getSquareArea($diagonal);
    }
}