<?php
if (isset ( $_POST ['numWords'] )) {
	$numWords = $_POST ['numWords'];
}

if (isset ( $_POST ['specChar'] )) {
	$specChar = $_POST ['specChar'];
}

if (isset ( $_POST ['caseChoice'] )) {
	$caseChoice = $_POST ['caseChoice'];
}

if (isset ( $_POST ['number'] )) {
	$number = $_POST ['number'];
}

if ($words = file ( './wordlist.txt' )) {
	$selected_words = [ ];
	
	for($i = 0; $i < $numWords; $i ++) {
		$max = count ( $words ) - 1;
		$rand = rand ( 0, $max );
		$word = $words [$rand];
		array_push ( $selected_words, $word );
	}
}

// echo $caseChoice;

if ($caseChoice) {
	
	foreach ( $selected_words as $key => $value ) {
		if ($caseChoice == 'lower') {
			$selected_words [$key] = strtolower ( $value );
		} else {
			foreach ( $selected_words as $key => $value ) {
				if ($caseChoice == 'UPPER') {
					$selected_words [$key] = strtoupper ( $value );
				} else {
					foreach ( $selected_words as $key => $value ) {
						$selected_words [$key] = ucfirst ( $value );
					}
				}
			}
		}
	}
}

echo "<br> answer: ";
print_r ( $selected_words );

?>
