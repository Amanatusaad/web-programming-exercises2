<?php
function buatBintang($n){
	echo "<pre>";
	for($i =1; $i <= $n; $i++){
		for ($j=1; $j <= $i; $j++) { 
			# code...
			echo "*";
		}
		echo "\n";
	}
	echo "</pre>";
}

buatBintang(4);
buatBintang(5);
?>