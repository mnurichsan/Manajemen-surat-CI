<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SuratKeluar extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'kode_arsip'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '20',
			],
			'tujuan'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'tanggal_kirim'       => [
				'type'           => 'DATE'
			],
			'no_surat'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'tanggal_surat'       => [
				'type'           => 'DATE'
			],
			'isi'       => [
				'type'           => 'TEXT',
			],
			'keterangan'       => [
				'type'           => 'VARCHAR',
				'constraint'	=> '100' 
			]
		]);

		$this->forge->addPrimaryKey('id');
		$this->forge->createTable('surat-keluar');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
