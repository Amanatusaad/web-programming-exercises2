<?php
function hitungDenda($tglHarusKembali, $tglKembali){
	$denda = 3000; #besar denda per hari
	
	#memecah tanggal tglHarusKembali
	$pecah1 = explode("-", $tglHarusKembali);
	$date1 = $pecah1[2];
	$month1 = $pecah1[1];
	$year1 = $pecah1[0];

	#memecah tanggal tglKembali
	$pecah2 = explode("-", $tglKembali);
	$date2 = $pecah2[2];
	$month2 = $pecah2[1];
	$year2 = $pecah2[0];

	#menghitung JDN dari masing-masing tanggal
	$tgl1 = GregorianToJD($month1, $date1, $year1);
	$tgl2 = GregorianToJD($month2, $date2, $year2);

	#menghitung selisih hari kedua tanggal
	$selisih = $tgl2 - $tgl1;

	#menghitung Biaya denda
	$bayarDenda = $selisih * $denda;
	echo "Besarnya denda adalah: Rp ".$bayarDenda;
	echo "<br>";
	echo "Dengan keterlambatan pengembalian ".$selisih." hari";
}
hitungDenda("2021-01-03", "2021-01-05");
?>