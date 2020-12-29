<?php namespace App\Controllers;

use App\Models\SuratMasukModel;

class SuratMasuk extends BaseController
{

	public function index(){
		return view('admin/transaksi-surat/surat-masuk');
	}
}