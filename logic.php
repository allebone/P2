<?php
	
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

		print_r $selectedWords;

?>
