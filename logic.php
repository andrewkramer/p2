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
	//  Assume default value unless the user submitted variable validates
	$wordCount = $defaultWordCount;
	$separator = $defaultSeparator;
	
	$symbols = $defaultSymbols;
	$symbolLocationRandom = $defaultSymbolLocationRandom;
	
	$numbers = $defaultNumbers;
	$numberLocationRandom = $defaultNumberLocationRandom;
	
	
	// Assume that is "wordCount" is present that the entire form has been submitted.
	// If a user violates this assumption by modifying the URL, the only ramification
	// if that notices about the missing indexes will be thrown.
	if (isset($_GET["wordCount"])) { 
		if ($_GET["wordCount"] > 0 && $_GET["wordCount"] <= $maxWordCount) {
			$wordCount = $_GET["wordCount"];
		}
		if (in_array($_GET["separator"], $possibleSeparators)) {
			$separator = $_GET["separator"];
		}
		
		if ($_GET["symbols"] > 0 && $_GET["symbols"] <= $maxSymbols) {
			$symbols = $_GET["symbols"];
		}
		if ($_GET["symbolLocationRandom"] == 0 || $_GET["symbolLocationRandom"] == 1) {
			$symbolLocationRandom = $_GET["symbolLocationRandom"];
		}
		
		if ($_GET["numbers"] > 0 && $_GET["numbers"] <= $maxNumbers) {
			$numbers = $_GET["numbers"];
		}
		if ($_GET["numberLocationRandom"] == 0 || $_GET["numberLocationRandom"] == 1) {
			$numberLocationRandom = $_GET["numberLocationRandom"];
		}
	}
	
	//Generate Word List
	$wordList = array("Aardvark", "Beetle", "Cicada", "Dolphin", "Elk", "Fire", "Goad", "Hammer", "Ice", "Jug");
	$wordListLength = count($wordList);
	
	
	//Generate Password
	$password = "";
	$addedSymbols = 0;
	$addedNumbers = 0;
	
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