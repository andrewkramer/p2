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
	if ($_GET["wordCount"] > 0 && $_GET["wordCount"] <= $maxWordCount) {
		$wordCount = $GET["wordCount"];
	}
	
	$separator = $defaultSeparator;
	if (in_array($_GET["separator"], $possibleSeparators)) {
		$separator = $_GET["separator"];
	}
	
	
	$numbers = $defaultNumbers;
	if ($_GET["numbers"] > 0 && $_GET["numbers"] <= $maxNumbers) {
		$numbers = $_GET["numbers"];
	}
	
	$numberLocationRandom = $defaultNumberLocationRandom;
	if (is_bool($_GET["numberLocationRandom"])) {
		$numberLocationRandom = $_GET["numberLocationRandom"];
	}
	
	
	$symbols = $defaultSymbols;
	if ($_GET["symbols"] > 0 && $_GET["symbols"] <= $maxSymbols) {
		$symbols = $_GET["symbols"];
	}
	
	$symbolLocationRandom = $defaultSymbolLocationRandom;
	if (is_bool($_GET["symbolLocationRandom"])) {
		$symbolLocationRandom = $_GET["symbolLocationRandom"];
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
		if ($i < $wordCount - 1) {
				$password = $password . $separator;
		}
	}
	
	
?>