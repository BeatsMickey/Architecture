<?php


class Circle implements ICircle
{
    public function circleArea(int $circumference) {
        return (new AdapterCircle())->circleArea($circumference);
    }
}