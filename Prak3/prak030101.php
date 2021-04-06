<?php
function buatBintang($kata, $n){
	echo "<pre>";
	for($i =1; $i <= $n; $i++){
		echo $kata;
	}
	echo "</pre>";
}

buatBintang("Hello", 3);
?>