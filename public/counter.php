<?php

function increaseCounter ($counterToUp){
	return $counterToUp + 1;
}
function decreaseCounter ($counterToDown){
	$counterToDown--;

	return $counterToDown;
}

function pageController() {
	$counter = isset($_GET['counter']) ? $_GET['counter'] : '0';

	$up = increaseCounter($counter);
	$down = decreaseCounter($counter);
	
	return array (
		'up'   => $up,
		'down' => $down,
		'counter' => $counter
		);
}
extract(pageController());
?>

<!DOCTYPE html>
<html>
<head>
    <title>Counter</title>
    <!-- <link rel="stylesheet" href="/css/server-name-generator.css"> -->
</head>
<body>
    <h2>Your current value:
    	<span>
    		<?= $counter; ?>
    	</span>
    </h2>
    <a href="counter.php?counter=<?= $up ?>">Up</a> 
    <a href="counter.php?counter=<?= $down ?>">Down</a> 
</body>
</html>