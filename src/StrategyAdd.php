<?php

class StrategyAdd implements StrategyInterface
{
    public function execute(float $a, float $b): float
    {
        return $a + $b;
    }
}