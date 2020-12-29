<?php namespace App\Models;

use CodeIgniter\Model;

class SuratKeluarModel extends Model
{
    /**
     * table name
     */
    protected $table = "surat-keluar";

    public function getSK($id = false){
        if($id == false){
            return $this->findAll();
        }

        return $this->where(['id' => $id]);
        
    }

}