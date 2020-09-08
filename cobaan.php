<?php
class mobil{
	public $nama, $merek, $warna, $kecepatanMaksimal, $jumlahPenumpang;

	public function tambahkecepatan(){
		return "keceatan bertambah";
	}
}

class MobilSport extends Mobil{
	public $turbo = false;

	public function aktifkanTurbo(){
		$this->turbo = true;
		return "Turbo diaktifkan";
	}
}

$mobilku = new MobilSport();
echo $mobilku->tambahkecepatan();
echo "<br>";
echo $mobilku->aktifkanTurbo();
?>