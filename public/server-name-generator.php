<?php

//Adjectives array
$adjectivesArray = array('bright', 
			   			'clean',
			   			'shiny',
			   			'careful', 
			   			'outstanding',
			   			'talented',
			   			'helpful',
			   			'poised',
			   			'distinct',
			   			'clever');
//Nouns array
$nounsArray = array('eyelash',
					'skin',
					'child',
					'book',
					'adult',
					'flowers',
					'nurse',
					'room',
					'pajamas',
					'waterfall');


function randomServerNameGenerator($localAdjectivesArray, $localNounsArray){
	//Option #1
	// $max = sizeof ($localAdjectivesArray);
	// $randomNumber = rand(0, $max - 1);
	// $adjective = $localAdjectivesArray[$randomNumber];
	// $randomNumber = rand(0, $max -1);
	// $noun = $localNounsArray[$randomNumber];
	// $localServerName = $adjective . ' ' . $noun;

	$adjective = array_rand($localAdjectivesArray);
	$noun = array_rand($localNounsArray);
	$localServerName = $localAdjectivesArray[$adjective] . '-' . 
					   $localNounsArray[$noun];
	return $localServerName;
}
$serverName = randomServerNameGenerator ($adjectivesArray, $nounsArray);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Server name generator using inline PHP</title>
    <link rel="stylesheet" href="/css/server-name-generator.css">
</head>
<body>
    <h1>Server Name Generator</h1>
    <h3>Your server name is: 
    	<span>
    		<?= $serverName; ?>
    	</span>
    </h3>
</body>
</html>