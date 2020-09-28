<?php namespace App\Controllers;

class Frontend extends BaseController
{
	public function index()
	{
		$this->data['judul'] = "ANJUNGAN MANDIRI RSUD PRAYA";
		return view('frontend/index', $this->data);
	}

	public function pendaftaran()
	{
		$this->data['judul'] = "ANTRIAN APOTIK";
		return view('frontend/pendaftaran', $this->data);
	}
}