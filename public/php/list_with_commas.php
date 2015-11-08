<?php

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';



//Create the $famousFakePhysicists string that lists the physicists and contains the "and" at the end.
$physicistsArray = explode(', ', $physicistsString);
$lastItem = "and " . array_pop($physicistsArray);
array_push($physicistsArray, $lastItem);
$famousFakePhysicists = implode(', ', $physicistsArray);
echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}." . PHP_EOL;
