<?php

	class Admin_model extends CI_model{

	public function getAllBarang(){
	return $this->db->get('barang')->result_array();
	}

	public function tambahBarang(){
	$data = [
		"nama_barang" => $this->input->post('nama_barang', true),
		"jenis_barang" => $this->input->post('jenis_barang', true),
		"harga_barang" => $this->input->post('harga_barang', true),
		"stock_barang" => $this->input->post('stock_barang', true),
		"deskripsi_barang" => $this->input->post('deskripsi_barang', true)
		];
		$this->db->insert('barang', $data);
	}

	public function getBarangById($id)
		{
			return $this->db->get_where('barang',['id' => $id])->row_array();
		}

public function editDataBarang()
		{
				$data = [
				"nama_barang" => $this->input->post('nama_barang', true),
		"jenis_barang" => $this->input->post('jenis_barang', true),
		"harga_barang" => $this->input->post('harga_barang', true),
		"stock_barang" => $this->input->post('stock_barang', true),
		"deskripsi_barang" => $this->input->post('deskripsi_barang', true)
				];

				$this->db->where('id', $this->input->post('id'));
				$this->db->update('barang', $data);
		}

		public function hapusDataBarang($id)
		{
			$this->db->where('id',$id);
			$this->db->delete('barang');
		}
}