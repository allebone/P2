<?php

$password = "";
// check if the submit was clicked
if (isset($_POST['submit1'])) {

    $numWords;
    $specChar;
    $caseChoice;
    $addNum;
    $randomNumber = "";

    $numWords = $_POST ['numWords'];
    $specChar = $_POST ['specChar'];
    $caseChoice = $_POST ['caseChoice'];
    $addNum = $_POST ['number'];
    //echo generatePass($numWords, $addNum, $specChar, $caseChoice);
    // read word list
    if ($words = file('./wordlist.txt')) {
        $selectedWords = [];

        // generate words for the password
        for ($i = 0; $i < $numWords; $i ++) {
            $max = count($words) - 1;
            $rand = rand(0, $max);
            $word = $words [$rand];
            array_push($selectedWords, $word);
        }
    }

    // change case of each word in the array
    foreach ($selectedWords as $key => $value) {
        if ($caseChoice == 'lower') {
            $selectedWords [$key] = strtolower($value);
        } else if ($caseChoice == 'upper') {
            $selectedWords [$key] = strtoupper($value);
        } else {
            $selectedWords [$key] = ucfirst($value);
        }
    }

    // generate a random number between 0 and 10
    if ($addNum == 'true') {
        $randomNumber = rand(0, 10);
    }

    foreach ($selectedWords as $sword) {
        $password .= $sword . "-";
    }
    $password = substr($password, 0, -1);
    $password .= $randomNumber . $specChar;
}
?>
