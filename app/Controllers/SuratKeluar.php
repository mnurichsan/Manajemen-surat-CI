<?php namespace App\Controllers;

use App\Models\SuratKeluarModel;

class SuratKeluar extends BaseController
{
	protected $skModel;
	
	public function __construct(){
		$this->skModel = new SuratKeluarModel();
	}

	public function index(){
		$data = [
			'surat_keluar' => $this->skModel->getSK()
		];

		return view('admin/transaksi-surat/surat-keluar', $data);
	}
	
	public function detail($id){

		$data = [
			'surat_keluar' => $this->skModel->getSK($id)
		];
		
		return view('admin/transaksi-surat/detailSK', $data);
	}
}