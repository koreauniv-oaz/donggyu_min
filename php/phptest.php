<?php

$alpha = 52;
$beta = 12;

echo $alpha + $beta;


if($alpha <= $beta){
	echo $beta.'is big or same';
} else
	echo $alpha. 'is big';


function checkBig($alpha, $beta){
	if($alpha <= $beta){
		return $beta.'is big or same';
	} else
		return $alpha.'is big';
}


echo checkBig(12, 24);

?>