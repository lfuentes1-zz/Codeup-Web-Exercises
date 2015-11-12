<?php

$myFavoriteThings = array ('1thing', '2thing', '3thing', '4thing', '5thing');

?>

<!DOCTYPE html>
<html>
<head>
    <title>My favorite things using inline PHP</title>
    <link rel="stylesheet" href="/css/my-favorite-things.css">
</head>
<body>
    <h1>My Favorite Things</h1>
    	<table id="style-table">
		    	<?php foreach ($myFavoriteThings as $thing): ?>
		    	<tr>
		    		<td> <?= $thing; ?> <br> 
		    		</td>
		    	<tr>
		    	<?php endforeach; ?>
		</table>
</body>
</html>