<?php
function hitungGaji($gol, $masaKerja){
	if ($gol == "A") {
		# code...
		if ($masaKerja < 10) {
			# code...
			$gaji = 5000000;
		}else {
			$gaji = 7000000;
		}
		echo "Gaji golongan ".$gol." selama masa kerja ".$masaKerja." bulan adalah Rp ".$gaji;
	}elseif ($gol == "B") {
		# code...
		if ($masaKerja < 10) {
			# code...
			$gaji = 6000000;
		}else {
			$gaji = 8000000;
		}
		echo "Gaji golongan ".$gol." selama masa kerja ".$masaKerja." bulan adalah Rp ".$gaji;
	}
	return $gaji;
}

hitungGaji("A" ,12);

?> 