<?php

interface StrategyInterface
{
    public function execute(float $a, float $b): float;
}