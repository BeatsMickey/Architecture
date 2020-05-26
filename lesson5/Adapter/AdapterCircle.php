<?php


class AdapterCircle implements ICircle
{
    public function circumferenceToDiagonal(int $circumference) {
        $d = $circumference / M_PI;
        return $d;
    }

    public function circleArea(int $circumference) {
        $diagonal = $this->circumferenceToDiagonal($circumference);
        return (new CircleAreaLib())->getCircleArea($diagonal);
    }
}