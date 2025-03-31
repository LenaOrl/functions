<?php
function numbers(array $numbers): array {
	$a = [];
	foreach ($numbers as $number){
		if ($number >  1 && isPerfect($number)) {
			$a[] = $number;
		}
	}
	return $a;
}
function isPerfect(int $x): bool {
	$sum = 0;
	for ($i=1; $i <= $x / 2; $i++) {
		if ($x % $i === 0) {
			$sum += $i;
		}
	}
	return $sum === $x;
}
$c = [2, 6, 12, 28, 236, 666];
$a = numbers($c);
print_r($a);
