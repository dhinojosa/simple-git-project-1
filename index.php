<?php
 echo "Hello World";
 class Myclass {
	var $today = now();
	var $stuff = "today is just today";
	public function message() {

	   $MyMsg = "$this->stuff . ": " . $this->today";
           return $MyMsg;		

	}
 }
?>
