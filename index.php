<! DOCKTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>
	harjtus-3s - PHP põhitõed
	</title>
</head>

<body>
	<h2>Tingimuslaused</h2>
	<?php $a=4 ?><br>
	<?php $b=5 ?><br>
	<?php
    if ($a<$b) {
        echo "4 on väiksem kui 5";
    }
?>

	<?php $a=5 ?><br>
	<?php $b=4 ?><br>
	<?php
    if ($a<$b) {
        echo "4 on väiksem kui 5";
    }
?>

	<?php $a=5 ?><br>
		<?php $b=4 ?><br>
		<?php
		if ($a<$b) {
        echo "5 on väiksem kui 4";
		}
		elseif ($a>$b) {
		echo"5 on suurem kui 4"; }
		elseif ($a=$b) {
		echo "5 on 4"; }
		
	?>
	
		<?php $a=6 ?><br>
		<?php $b=5 ?><br>
		<?php
		if ($a<$b) {
        echo "5 on väiksem kui 6";
		}
		elseif ($a>$b) {
		echo"5 on suurem kui 6"; }
		elseif ($a=$b) {
		echo "5 on 6"; }
		
	?>
	
		<?php $a=6 ?><br>
		<?php $b=6 ?><br>
		<?php
		if ($a<$b) {
        echo "6 on väiksem kui 6";
		}
		elseif ($a>$b) {
		echo"6 on suurem kui 6"; }
		elseif ($a=$b) {
		echo "6 on 6"; }
		
	?><br>
	
	<?php $age=17; ?>
	<?php $age_limit=18; ?>
	
	<?php 
	if ($age < $age_limit) { 
	echo "Kahjuks olete liiga noor. Te peate olema vähemalt {$age_limit} aastat vana. Tulge " . ($age_limit - $age) . " aasta pärast tagasi"; }
	elseif ($age > $age_limit) {
	echo "Olete piisavalt vana. Tulge edasi!";
	}
	elseif ($age = $age_limit) {
	echo "Olete piisavalt vana. Tulge edasi!";
	}
	
	?>
	

</body>

</html>