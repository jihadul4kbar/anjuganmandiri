<?php namespace App\Controllers;

use CodeIgniter\Controllers;
use App\Models\FrontendModel;

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

	public function kamar(){
		$model = new FrontendModel();
		$this->data['judul'] = "INFORMASI KAMAR";
		$this->data['kamar'] = $model->kamar();
		return view('frontend/kamar', $this->data);
	}
}