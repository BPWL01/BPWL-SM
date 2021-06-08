<?php
//class mei
class mei{
	//property
	public $nama;
	public $warna;

	//method tampilkan_nama
	function tampilkan_nama(){
		return "Nama saya Aisyah Syahidatul Mumtazah";
	}
}
//instansiasi class mei
$mei = new mei();

//memanggil method tampilkan_nama dari class mei
echo $mei->tampilkan_nama();
?>