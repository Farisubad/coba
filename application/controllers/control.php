<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class control extends CI_Controller {

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
	public function __construct()
    {
        parent::__construct();
		//load model
		$this->load->model('dataparkir');
    }
	public function index()
	{
		$querydbparkir = $this->dataparkir->ambildata();
		$DATA = array('querydataparkir'=>$querydbparkir);
		$this->load->view('Dashboard',$DATA);	
	}
	public function tambah_data(){
		$this->load->view('tambah');
	}

	public function fungsitambah(){
		
		$jenis = $this->input->post('jenis');
		$plat = $this ->input ->post ('plat');
		$waktu = $this ->input ->post('waktu');

		$arrayInsert = array(
			
			'jenis'=>$jenis,
			'plat'=>$plat,
			'waktu'=>$waktu
		);
		$this->dataparkir->input($arrayInsert);
		redirect(base_url('index.php'));
	}
	public function edit_data($plat){
		$querydetail = $this->dataparkir->ambildatadetail($plat);
		$data = array('querydatapark'=>$querydetail);
		$this->load->view('edit',$data);
	}
	function fungsiedit(){
		$jenis = $this->input->post('jenis');
		$plat = $this ->input ->post ('plat');
		$waktu = $this ->input ->post('waktu');

		$arrayUpdate = array(
			
			'jenis'=>$jenis,
			'plat'=>$plat,
			'waktu'=>$waktu

		);
		$this->dataparkir->updatedataparkiran($plat,$arrayUpdate);
		redirect(base_url('index.php'));
	}
	public function fungsihapus($plat){
		$this->dataparkir->deletedataparkir($plat);
		redirect(base_url('index.php'));
	}
	
}
