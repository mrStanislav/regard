<?php
	
	$boxesId1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
	$boxes1 = [1, 2, 1, 5, 1, 3, 5, 2, 5, 5];
	$weight1 = 6;
	
	$boxes2 = [2, 4, 3, 6, 1];
	$boxesId2 = [1, 2, 3, 4, 5]; 
	$weight2 = 5;

	function getResult($boxes, $boxesId, $weight) {
		for ($i = 0; $i < count($boxes); $i++) {
			echo "Post #".$boxesId[$i]." (".$boxes[$i]." kg)<br>";
		}
		echo "<br>Weight ".$weight." kg<br><br>";
				
		for ($i = 0; $i < count($boxes)-1; $i++) {
			for ($j = $i + 1; $j < count($boxes); $j++) {
				if($boxes[$i] < $boxes[$j]) {
					$tmp = $boxes[$i];
					$tmpI = $boxesId[$i];
					$boxes[$i] = $boxes[$j];
					$boxesId[$i] = $boxesId[$j];
					$boxes[$j] = $tmp;
					$boxesId[$j] = $tmpI;
				}
			}
		}
		$i = 0;
		$n = 0;
		while ($i < count($boxes)-1) {
			$j = $i + 1;
			$fl = 0;
			while ($j < count($boxes)) {
				if($boxes[$i] + $boxes[$j] == $weight) {
					echo "Delivering: post #".$boxesId[$i]." (".$boxes[$i]." kg) and #".$boxesId[$j]." (".$boxes[$j]." kg)<br>";
					array_splice($boxes, $i, 1);
					array_splice($boxesId, $i, 1);
					array_splice($boxes, $j-1, 1);
					array_splice($boxesId, $j-1, 1);
					$n++;	
					$fl = 1;
					break;
				}
				$j++;
			}
			if ($fl == 0) $i++;
		}
		$undelPosts = array();
		for($i = 0 ; $i < count($boxes); $i++) {
			if($boxes[$i] > $weight) { 
				array_push($undelPosts, $i); 
				continue; 
			}
			echo "Delivering: post #".$boxesId[$i]." (".$boxes[$i]." kg)<br>";
			$n++;
		}
		echo "<br>";
		for ($i = 0 ; $i < count($undelPosts); $i++) {
			echo "UnDelivered post #".$boxesId[$undelPosts[$i]]." (".$boxes[$undelPosts[$i]]." kg) > ".$weight." kg<br>";
		}
		return $n;
	}
	
	echo "<br>Total trip = ".getResult($boxes1, $boxesId1, $weight1);
	echo "<br><br>---------------------------------------<br><br>";
	echo "<br>Total trip = ".getResult($boxes2, $boxesId2, $weight2);