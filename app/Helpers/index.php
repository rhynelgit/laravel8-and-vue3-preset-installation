<?php

class Helper {
	/*
	|--------------------------------------------------------------------------
	| 	Strings
	|--------------------------------------------------------------------------
	|
	*/

	static function slug($string) {
	/*
	|--------------------------------------------------------------------------
	| 	Slug
	|--------------------------------------------------------------------------
	| 	Slug function is will create a slug string
	|	example output: Just Do It => just-do-it
	*/
		return 
			strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string)));
	}

	static function slug_invert($string) {
	/*
	|--------------------------------------------------------------------------
	| 	Slug Invert
	|--------------------------------------------------------------------------
	|   Slug invert is opposite to slug. It will back to normal from sluggy string
	|	example output: just-do-it => Just Do It
	*/
		return 
			ucwords(str_replace(["-", "–"], ' ', $string));
	}

}