<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
		parent::__construct();
		$this->simple_login->cek_login();
		$this->load->helper(array('url','form'));
		$this->load->model('m_account');
	} 
	
	public function index()
	{
		$data['produk'] = $this->m_account->tampil()->result();
		$this->load->view('dashboardv',$data);
	}

	function hapus($id_produk){
		$where = array('id_produk' => $id_produk);
		$this->m_account->hapus_data($where,'produk');
		redirect(base_url('dashboard'));
	}

	function edit($id_produk){
		$where = array('id_produk' => $id_produk);
		$data['produk'] = $this->m_account->edit_data($where,'produk')->result();
		$this->load->view('v_edit',$data);
	}

	function upload(){
			$config['upload_path']         = 'gambar';  // folder upload 
            $config['allowed_types']        = 'gif|jpg|png'; // jenis file
            $config['max_size']             = 3000;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;
 
            $this->load->library('upload', $config);
 
            if ( ! $this->upload->do_upload('gambar')) //sesuai dengan name pada form 
            {
                   echo 'anda gagal upload';
            }
            else {
		$id_produk = $this->input->post('id_produk');
        $nama_produk = $this->input->post('nama_produk');
        $deskripsi = $this->input->post('deskripsi');
        $harga = $this->input->post('harga');
        $file = $this->upload->data();
        $gambar = $file['file_name'];
        $kategori = $this->input->post('kategori');
	 
		$data = array(
			'id_produk' => $id_produk,
			'nama_produk' => $nama_produk,
			'deskripsi' => $deskripsi,
			'harga' => $harga,
			'gambar' => $gambar,
			'kategori' => $kategori
		);
	 
		$where = array(
			'id_produk' => $id_produk
		);
	 
		$this->m_account->update_data($where,$data,'produk');
		redirect(base_url('dashboard'));
		}
	}
}