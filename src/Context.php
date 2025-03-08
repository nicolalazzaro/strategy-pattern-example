<?php

class Context
{
    private StrategyInterface $strategy;

    public function __construct(StrategyInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    public function setStrategy(StrategyInterface $strategy): void
    {
        $this->strategy = $strategy;
    }

    public function executeStrategy(float $a, float $b): float
    {
        return $this->strategy->execute($a, $b);
    }
}