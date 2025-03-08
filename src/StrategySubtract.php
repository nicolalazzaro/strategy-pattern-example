<?php

class StrategySubtract implements StrategyInterface
{
    public function execute(float $a, float $b): float
    {
        return $a - $b;
    }
}