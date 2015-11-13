<!-- Be creative and have fun. Feel free to add images or make it more interesting by
using rand() to decide if a play is a hit or miss. -->

<?php
function increaseCounter ($counterToUp){
	$counterToUp++;
	return $counterToUp;
}

function gameOver(){
	return 'Game Over';
}

function pageController() {
	$click = isset($_GET['click']) ? $_GET['click'] : 0;

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
    		<?= $click; ?>
    	</span>
    </h2>
    <?php if ($click !== "Game Over"): ?>
    	<a href="pong.php?click=<?= $hit; ?>">Hit</a> 	
    	<a href="ping.php?click=<?= $miss; ?>">Miss</a> 	
	<?php else: ?>
	    <a href="ping.php">New Game</a> 		
	<?php endif; ?>
</body>
</html>