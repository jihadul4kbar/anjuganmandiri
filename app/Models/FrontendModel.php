<?php namespace App\Models;

use CodeIgniter\Model;

class FrontendModel extends Model{
	protected $table;
	public function __construct(){
		parent::__construct();
		$this->table = $this->db->table('bangsal');
	}

	public function kamar(){
		return $this->table->get()->getResultArray();
	}
}