  
<?php 
class Home {
	public function index($nama = 'Dede' , $pekerjaan = 'mahasiswa'){
		echo "Hallo , nama saya $nama , Saya adalah seorang $pekerjaan";
	}
	public function page();
	{
		echo 'About/page';
	}
}