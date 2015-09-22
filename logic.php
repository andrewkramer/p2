<?php
	// Constraints
	$defaultWordCount = 4;
	$maxWordCount = 12;
	
	$possibleSeparators = array("", " ", ",", ".", "-", "_");
	$defaultSeparator = " ";
	
	$defaultSymbols = 0;
	$maxSymbols = 12;
	$defaultSymbolLocationRandom = true;
	
	$defaultNumbers = 0;
	$maxNumbers = 12;
	$defaultNumberLocationRandom = true;
	
	
	//Validate User Submitted Variables
	
	// Assume that if the first variable is submitted, then all are submited.
	// If the user violates this assumption by modifying the URL, the only ramification
	// if that notifications will be silently thrown.
	if (isset($_GET["wordCount"])) { 
		// If a given variable is not submitted or is an illegal value, resort to default value
		if ($_GET["wordCount"] > 1 && $_GET["wordCount"] <= $maxWordCount) {
			$wordCount = $_GET["wordCount"];
		} else {
			$wordCount = $defaultWordCount;
		}
		
		if (in_array($_GET["separator"], $possibleSeparators)) {
			$separator = $_GET["separator"];
		} else {
			$separator = $defaultSeparator;
		}
		
		if ($_GET["symbols"] > 0 && $_GET["symbols"] <= $maxSymbols) {
			$symbols = $_GET["symbols"];
		} else {
			$symbols = $defaultSymbols;
		}
		
		if ($_GET["symbolLocationRandom"] == 0 || $_GET["symbolLocationRandom"] == 1) {
			$symbolLocationRandom = $_GET["symbolLocationRandom"];
		} else {
			$symbolLocationRandom = $defaultSymbolLocationRandom;
		}
		
		if ($_GET["numbers"] > 0 && $_GET["numbers"] <= $maxNumbers) {
			$numbers = $_GET["numbers"];
		} else {
			$numbers = $defaultNumbers;
		}
		
		if ($_GET["numberLocationRandom"] == 0 || $_GET["numberLocationRandom"] == 1) {
			$numberLocationRandom = $_GET["numberLocationRandom"];
		} else {
			$numberLocationRandom = $defaultNumberLocationRandom;
		}
	} else { // If the variables have not been submitted, set all values to default.
		$wordCount = $defaultWordCount;
		$separator = $defaultSeparator;
		$symbols = $defaultSymbols;
		$symbolLocationRandom = $defaultSymbolLocationRandom;
		$numbers = $defaultNumbers;
		$numberLocationRandom = $defaultNumberLocationRandom;
	}
	
	//Generate Word List
	$wordList = array("Aardvark", "Beetle", "Cicada", "Dolphin", "Elk", "Fire", "Goad", "Hammer", "Ice", "Jug");
	$wordListLength = count($wordList);
	
	
	//Generate Password
	$password = "";
	$addedSymbols = 0;
	$addedNumbers = 0;
	
	// For each required word in the password
	for ($i = 0; $i < $wordCount; $i++) {
		
		// Get a random word location from the list
		$index = rand(0, $wordListLength - 1);
		
		// Append the new word to the word list
		$password = $password . $wordList[$index];
		
		// Randomly append numbers and/or symbols to the end of the word if 
		// the user requested random placement of these characters
		if ($symbolLocationRandom) {
			while (rand(0,1) == 1 && $addedSymbols < $symbols) {
				$password = $password . chr(rand(33,47));
				$addedSymbols++;
			}
		}
		if ($numberLocationRandom) {
			while (rand(0,1) == 1 && $addedNumbers < $numbers) {
				$password = $password . rand(0,9);
				$addedNumbers++;
			}
		}
			
		// Append separator to all but the last word
		// else add all remaining numbers and symbols to the end of the word
		if ($i < $wordCount - 1) {
			$password = $password . $separator;
		} else {
			for (; $addedSymbols < $symbols; $addedSymbols++) {
				$password = $password . chr(rand(33,47));
			}
			for (; $addedNumbers < $numbers; $addedNumbers++) {
				$password = $password . rand(0,9);
			}
		}
	}
	
	
?>