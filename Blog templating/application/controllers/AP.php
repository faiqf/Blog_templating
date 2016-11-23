<?php defined('BASEPATH') OR exit('No direct script access allowed');

class AP extends CI_Controller {

	public function index()
	{
		$this->load->view('form/form');
	}
	
	public function proses()
	{
	
		 $config['upload_path']         	    =  FCPATH.'uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

	$this->load->library('upload', $config);

	if ( ! $this->upload->do_upload('gambar')) 
	{
		$error = array('eror' => $this->upload->display_errors());
		print_r($eror)
	
	}
	else
	{
		$data = array('upload_data' => $this->upload->data());
		print_r($data);
	}

}

