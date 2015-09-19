<?php
	// Constraints
	$defaultWordCount = 4;
	$maxWordCount = 12;
	
	$defaultSeparator = " ";
	
	$defaultNumbers = 0;
	$defaultNumberLocationRandom = true;
	
	$defaultSymbols = 0;
	$defaultSymbolLocationRandom = true;
	
	//User Submitted Variables
	$wordCount = 4;
	$separator = " ";
	
	$numbers = 0;
	$numberLocationRandom = true;
	
	$symbols = 0;
	$symbolLocationRandom = true;
	
	
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