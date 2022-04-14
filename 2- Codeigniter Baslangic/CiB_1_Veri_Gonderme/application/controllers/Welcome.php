<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$Personel_listesi = array(
			array(
				"isim" => "Icabi Kırgız",
				"email" => "icabikrz@gmail.com"
			),
			array(
				"isim" => "Aslı Kaya",
				"email" => "asli_gul@gmail.com"
			)
		);

		$viewData["personel_listesi"] = $Personel_listesi;

		// View tarafinda viewData isimli değişken bize $toplam isimli bir değişken olarak dönüşür.
		$this->load->view('personel_listesi', $viewData);
	}
}
