<?php
	
	
	
	function printPass() {

	$numWords;
	$specChar;
	$caseChoice;
	$addNum;
	
		if (isset ( $_POST ['numWords'] )) {
			$numWords = $_POST ['numWords'];
		}

		
		if (isset ( $_POST ['specChar'] )) {
			$specChar = $_POST ['specChar'];
		}

	
		if (isset ( $_POST ['caseChoice'] )) {
			$caseChoice = $_POST ['caseChoice'];
		}

	
		if (isset ( $_POST ['addNum'] )) {
			$number = $_POST ['addNum'];
		}

		echo .generatePass($numWords, $addNum, $specChar, $caseChoice);

	}


	function generatePass($numWords, $addNum, $specChar, $caseChoice) {




	if ($words = file ( './wordlist.txt' )) {
		$selectedWords = [ ];
		for($i = 0; $i < $numWords; $i ++) {
			$max = count ( $words ) - 1;
			$rand = rand ( 0, $max );
			$word = $words [$rand];
			array_push ( $selectedWords, $word );
		}

	}
	
	if ($caseChoice) {
		foreach ( $selectedWords as $key => $value ) {
			
			if ($caseChoice == 'lower') {
				$selectedWords [$key] = strtolower ( $value );
			} else {
				foreach ( $selectedWords as $key => $value ) {
					
					if ($caseChoice == 'UPPER') {
						$selectedWords [$key] = strtoupper ( $value );
					} else {
						foreach ( $selectedWords as $key => $value ) {
							$selectedWords [$key] = ucfirst ( $value );
						}

					}

				}

			}

		}

	}

	
	function make_password($number_of_words, $has_number, $has_symbol) {

		$thepassword = "";
		for ($i = 0; $i < $numWords; $i++) {
			$newword=$words[rand(0, (sizeof($words)-1))];
			$thepassword = $thepassword.$newword;
		}

		
		if ($has_number) {
			$thepassword = $thepassword.rand(0,9);
		}

		
		if ($has_symbol) {
			$thepassword = $thepassword.$symbols[rand(0, (sizeof($symbols)-1))];
		}

		return $thepassword;
	}

	?>
