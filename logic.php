<?php
	// Constraints
	$defaultWordCount = 4;
	$maxWordCount = 12;
	
	$possibleSeparators = array("", " ", ",", ".", "-", "_");
	$defaultSeparator = " ";
	
	$defaultNumbers = 0;
	$maxNumbers = 12;
	$defaultNumberLocationRandom = true;
	
	$defaultSymbols = 0;
	$maxSymbols = 12;
	$defaultSymbolLocationRandom = true;
	
	//Validate User Submitted Variables
	//  Assume default value unless the user submitted variable validates
	$wordCount = $defaultWordCount;
	$separator = $defaultSeparator;
	
	$numbers = $defaultNumbers;
	$numberLocationRandom = $defaultNumberLocationRandom;
	
	$symbols = $defaultSymbols;
	$symbolLocationRandom = $defaultSymbolLocationRandom;
	
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
		
		if ($_GET["numbers"] > 0 && $_GET["numbers"] <= $maxNumbers) {
			$numbers = $_GET["numbers"];
		}
		if (is_bool($_GET["numberLocationRandom"])) {
			$numberLocationRandom = $_GET["numberLocationRandom"];
		}
		
		if ($_GET["symbols"] > 0 && $_GET["symbols"] <= $maxSymbols) {
			$symbols = $_GET["symbols"];
		}
		if (is_bool($_GET["symbolLocationRandom"])) {
			$symbolLocationRandom = $_GET["symbolLocationRandom"];
		}
	}
	
	//Generate Word List
	$wordList = array("Aardvark", "Beetle", "Cicada", "Dolphin", "Elk", "Fire", "Goad", "Hammer", "Ice", "Jug");
	$wordListLength = count($wordList);
	
	
	//Generate Password
	$password = "";
	
	for ($i = 0; $i < $wordCount; $i++) {
		
		// Get a random word location from the list
		$index = rand(0, $wordListLength - 1);
		
		// Append the new word to the word list
		$password = $password . $wordList[$index];
		
		// Append separator to all but the last word
		// else add numbers and symbols to the end of the word
		if ($i < $wordCount - 1) {
			$password = $password . $separator;
		} else {
			if ($symbols > 0) {
				for ($j = 0; $j < $symbols; $j++) {
					$password = $password . chr(rand(33,47));
				}
			}
			if ($numbers > 0) {
				for ($j = 0; $j < $numbers; $j++) {
					$password = $password . rand(0,9);
				}
			}
		}
	}
	
	
?>