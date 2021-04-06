<?php
function buatBintangLagi($n){
	echo "<pre>";
	for($i =1; $i <= $n; $i++){
		# code...
		for ($j= $n; $j >= $i; $j--) { 
			# code...
			echo "*";
		}
		echo "\n";
	}
	echo "</pre>";
}

buatBintangLagi(4);
?>