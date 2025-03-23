<?php
function mostRecent(string $text): string {
	if (strlen($text) > 1000) {
		return null;
	}
$text=strtolower($text);
$text=preg_replace('/[^ws]/u', '', $text);
$words=explode(' ', $text);
$wordCount=array_count_values($words);
$a='';
$max=0;
foreach ($wordCount as $word => $count) {
	if ($count > $max) {
		$max = $count;
		$a = $word;
	}
}
	return $a;
}
$text1="Это пример текста, где слово 'пример' встречается несколько раз. Пример текста для тестирования.";
$c = mostRecent($text1);
echo "Самое часто слово: '$c'";