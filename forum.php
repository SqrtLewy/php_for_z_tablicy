<!DOCTYPE html>
<html>
    <head>
        <title>Nasze hobby</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="hobby.css"/>
         
    </head>
    <body> 
 <div id="strona">
	<div id="baner">
		<h1>FORUM HOBBYSTYCZNE</h1>
	</div>
	
	<div id="panel_lewy">
	
	
	<h2>Ile liczb chcesz wyświetlić?</h2>
	<form action="forum.php" method="post">
      <input type="number" name="a"> </br></br>
      <button type="submit">Pokaż mi liczby!</button>
	</form>
	
	<?php

$iloscliczb=$_POST['a'];
		for($i = 0; $i < $iloscliczb; $i++ ) {
	$rand = rand(1, 100);
    $randarray[] = $rand;
  }
  
  	for($i = 0; $i < $iloscliczb; $i++ ) {

    echo "$randarray[$i] ,";
  }
	
?> 
	
	</div>
	
	<div id="panel_prawy">
	</div>
</div>
 
    </body>
</html>