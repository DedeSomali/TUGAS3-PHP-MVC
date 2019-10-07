<?php 
class About {
	
	public function index($nama = 'Dede', $pekerjaan = 'Mahasiswa')
	{
		echo "Hallo, nama saya $nama, saya adalah seorang $pekerjaan";
  
	}
	public function page()
	{
		echo 'About/page';
	}
}