<?php

require_once 'autoload.php';

$a = 5;

$b = 3;

$strategyAdd = new StrategyAdd();

$context = new Context($strategyAdd);

var_dump('Result of add strategy: '.$context->executeStrategy($a, $b));

$strategySubtract = new StrategySubtract();

$context->setStrategy($strategySubtract);

var_dump('Result of subtract strategy: '.$context->executeStrategy($a, $b));

$strategyMultiply = new StrategyMultiply();

$context->setStrategy($strategyMultiply);

var_dump('Result of multiply strategy: '.$context->executeStrategy($a, $b));