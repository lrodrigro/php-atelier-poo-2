<?php

require("unit.php");

$elf1 = new Elf();
$soldier1 = new Soldier();

$elf1->setSpeed(5);
$soldier1->setSpeed(2);

$elf1->walk('right');
$soldier1->walk('top');

echo "<br>" . PHP_EOL;

echo $elf1;

echo "<br>" . PHP_EOL;

echo $soldier1;

