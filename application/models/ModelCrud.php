<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelCrud extends CI_Model {

	public function lihat(){
		$query = $this->db->get('product');
		return $query;
	}

	public function lihatSpesifik($jenis){
		$query = $this->db->get_where('product', array('jenis' => $jenis));
		return $query;
	}

	public function lihatCart(){
		$query = $this->db->get('cart');
		return $query;
	}

	public function detail($id){
		$query = $this->db->get_where('product', array('id' => $id));
		return $query;
	}

	public function edit($no){
		$query = $this->db->get_where('cart', array('no' => $no));
		return $query;
	}

	public function save($data){
		$this->db->insert('cart', $data);
	}

	public function update($no, $data){
		$this->db->update('cart', $data, array('no' => $no));
	}

	public function delete($no){
		$this->db->where('no', $no);
		$query = $this->db->delete('cart');
	}
}