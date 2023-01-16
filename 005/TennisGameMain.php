<?php

include ('TennisGame.php');

$tennisGame = new TennisGame();

$tennisGame->getScore('nho', 'phong', 1, 1 );

echo $tennisGame;