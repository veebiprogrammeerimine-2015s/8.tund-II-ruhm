<?php
	
	function divideByChuckNorris($x, $y) {
		
		if($y == 0){
			
			return "Only Chuck Norris knows the answer";
		}
		
		$answer = $x / $y;
		
		return $answer;
	}
	
	$result = divideByChuckNorris(40,21);
	
	echo $result;

?>