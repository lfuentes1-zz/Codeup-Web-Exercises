<?php
require_once 'functions.php';

function increaseCounter ($counterToUp){
	$counterToUp++;
	return $counterToUp;
}

function gameOver(){
	return 'Game Over';
}

function pageController() {
	// $click = isset($_GET['click']) ? $_GET['click'] : 0;
	$click = inputHas('click') ? inputGet('click') : 0;

	$hit = increaseCounter($click);
	$miss = gameOver();
	
	return array (
		'hit'   => $hit,
		'miss' => $miss,
		'click' => $click
		);
}
extract(pageController());
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hit or Miss Game</title>
    <!-- <link rel="stylesheet" href="/css/server-name-generator.css"> -->
</head>
<body>
    <h2>Your counter value:
    	<span>
    		<?= escape($click); ?>
    	</span>
    </h2>
    <?php if ($click !== "Game Over"): ?>
    	<a href="ping.php?click=<?= escape($hit); ?>">Hit</a> 	
    	<a href="pong.php?click=<?= escape($miss); ?>">Miss</a> 	
	<?php else: ?>
	    <a href="pong.php">New Game</a> 		
	<?php endif; ?>
</body>
</html>