<?php

function checkAnagram($kosakata1,$kosakata2){
	$toArrayKosakata1 = str_split($kosakata1);
	$toArrayKosakata2 = str_split($kosakata2);
	$found = array();
	$lenKata1 = count($toArrayKosakata1);
	$lenKata2 = count($toArrayKosakata2);
	if ( $lenKata1 == $lenKata2 ) {
		for ($i = 0; $i < $lenKata1; $i++) {
			for ($j = 0; $j < $lenKata2; $j++) {
				if ($toArrayKosakata1[$i] == $toArrayKosakata2[$j]) {
					array_push($found, $toArrayKosakata1[$i].$toArrayKosakata2[$j]);
				}
			}
		}
	} 
	
	print_r((count($found) == $lenKata1) ? 'anagram' : 'bukan anagram');
}

checkAnagram("cobain","obainc");

