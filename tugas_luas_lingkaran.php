<?php
$jari2 = 14;
const phi = 22/7;

function pow_luas($jari2, $pangkat){
	return pow($jari2, $pangkat);
}

echo "<br> <h4>Tugas menghitung Luas Lingkaran</h4>";
echo "<br> Jadi luas lingkaran adalah : ", number_format(phi * pow_luas($jari2, 2) , 2);
?>
