<?php
//class mei
<h3>enkapsulasi adalah menyembunyikan data atau variabel dari class lain dan hanya dapat diakses oleh anggota fungsi dari class itu sendiri yang telah dideklarasikan.</h3>
class mei{
	//property
	public $nama;
	public $warna;

	//method tampilkan_nama
	function tampilkan_nama(){
		return "Nama saya Aisyah Syahidatul Mumtazah Dari kelas 1TIB";
	}
	function latihan(){
		return "Latihan Pake GitHub di BPWL 2:03 PM";
	}
}
//instansiasi class mei
$mei = new mei();

//memanggil method tampilkan_nama dari class mei
echo $mei->tampilkan_nama();
echo $mei->latihan();
echo "Selamat Mencoba";
?>
