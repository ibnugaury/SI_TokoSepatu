<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('ModelCrud');
	}

	public function lihatHome(){
		$data['query'] = $this->ModelCrud->lihat();
		$this->load->view('home', $data);
	}

	public function lihatAll(){
		$data['query'] = $this->ModelCrud->lihat();
		$this->load->view('all', $data);
	}

	public function lihatMen(){
		$jenis = 'Pria';
		$data['query'] = $this->ModelCrud->lihatSpesifik($jenis);
		$this->load->view('men', $data);
	}

	public function lihatWomen(){
		$jenis = 'Wanita';
		$data['query'] = $this->ModelCrud->lihatSpesifik($jenis);
		$this->load->view('women', $data);
	}

	public function lihatAbout(){
		$this->load->view('about');
	}

	public function lihatCart(){
		$data['query'] = $this->ModelCrud->lihatCart();
		$this->load->view('cart', $data);
	}

	public function lihatDetail(){
		$id = $this->uri->segment(3);
		$data['query'] = $this->ModelCrud->detail($id);
		$this->load->view('detail', $data);
	}

	public function save(){
		$data = array('id' => $this->input->post('id'),'nama' => $this->input->post('nama'),
			'harga' => $this->input->post('harga'), 'jenis' => $this->input->post('jenis'), 'jumlah' => $this->input->post('jumlah'));

		$proses = $this->ModelCrud->save($data);
		if (!$proses){
			header('Location: lihatCart');
		} else {
			echo "Data Gagal disimpan";
			echo "<br>";
			echo "<a href='".base_url('index.php/crud/lihatAll')."'>Kembali ke form</a>";
		}
	}

	public function edit(){
		$no = $this->uri->segment(3);
		$data['query'] = $this->ModelCrud->edit($no);
		$this->load->view('edit', $data);
	}

	public function update(){
		$no = $this->input->post('no');
		$data = array('jumlah' => $this->input->post('jumlah'));

		$proses = $this->ModelCrud->update($no, $data);
		if (!$proses){
			header('Location: lihatCart');
		} else {
			echo "Data Gagal diubah";
			echo "<br>";
			echo "<a href='".base_url('index.php/crud/lihatCart/')."'>Kembali ke Cart</a>";
		}
	}

	public function delete(){
		$no = $this->uri->segment(3);
		$proses = $this->ModelCrud->delete($no);
		if (!$proses){
			redirect(base_url('index.php/crud/lihatCart'));
		} else {
			echo "Data Gagal dihapus";
			echo "<br>";
			echo "<a href='".base_url('index.php/crud/lihatCart/')."'>Lihat data</a>";
		}
	}
}
