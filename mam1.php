<?php
function alphabeticalOrder(string $str):string {
	$x = str_split($str);
		sort($x);
		return implode('', $x);
	
}
	$input = 'alphabetical';
	$a = alphabeticalOrder($input);
	echo $a;