<?php

namespace App\Custom;

class SanitizeInput
{
	
	/*
	*	Escape String 
	*
	*	Alternative to mysql_real_escape_string, escape string 
	*	without connecting to database
	*
	*/
	public function escap_string($value)
	{
		$search = array("\\",  "\x00", "\n",  "\r",  "'",  '"', "\x1a");
		$replace = array("\\\\","\\0","\\n", "\\r", "\'", '\"', "\\Z");
	
		return str_replace($search, $replace, $value);
	}
	
	/**
	* Clean input
	*
	**/
	public function cleanInput($input) {
	 
	  $search = array(
		'@<script[^>]*?>.*?</script>@si',   // Strip out javascript
		'@<[\/\!]*?[^<>]*?>@si',            // Strip out HTML tags
		'@<style[^>]*?>.*?</style>@siU',    // Strip style tags properly
		'@<![\s\S]*?--[ \t\n\r]*>@'         // Strip multi-line comments
	  );
	 
		$output = preg_replace($search, '', $input);
		return $output;
	  }
	
	/*
	* Sanitize Input
	*
	**/
	
	public  function sanitizeInput($input) {
		
		if (is_array($input)) {
			foreach($input as $var=>$val) {
				$output[$var] = self::sanitizeInput($val);
			}
		}
		else {

				$input = stripslashes($input);

			$input  = $this->cleanInput($input);
		  $output = $this->escap_string($input);
		}
		return $input;
	}
	
	
}

