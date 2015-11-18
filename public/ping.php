<!-- Be creative and have fun. Feel free to add images or make it more interesting by
using rand() to decide if a play is a hit or miss. -->

<?php
require_once '../Input.php';

function increaseCounter ($counterToUp){
	$counterToUp++;
	return $counterToUp;
}

function gameOver(){
	return 'Game Over';
}

function pageController() {
	// inputHas($key): returns true or false based on whether the key is available.
	// inputGet($key): returns the value specified by the key, or null if the key is not set.
	// $click = isset($_GET['click']) ? $_GET['click'] : 0;
	$click = Input::has('click') ? Input::get('click') : 0;
	// $click = inputHas('click') ? inputGet('click') : 0;

	// if (isset($_GET['click'])) {
	// 	$click = $_GET['click']
	// } else {
	// 	$click = 0;
	// }

	// if (inputHas('click'))
	// {
	// 	$click = inputGet('click')
	// } else {
	// 	$click = 0;
	// }

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
    		<?= Input::escape($click); ?>
    	</span>
    </h2>
    <?php if ($click !== "Game Over"): ?>
    	<a href="pong.php?click=<?= Input::escape($hit); ?>">Hit</a> 	
    	<a href="ping.php?click=<?= Input::escape($miss); ?>">Miss</a> 	
	<?php else: ?>
	    <a href="ping.php">New Game</a> 		
	<?php endif; ?>
</body>
</html>