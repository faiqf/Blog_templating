<?php 

class Template
{
	protected $_ci;
		
	function __construct()
	{
			$this->_ci = &get_instance();
	}
	
	function data( $template = NULL, $data = NULL )
	{
		if ( $template !=NULL )
			$data['_side']			= $this->_ci->load->view('sidebar',$data, TRUE);
			$data['_body']			= $this->_ci->load->view($template, $data, TRUE);
			$data['_header']		= $this->_ci->load->view('header', $data, TRUE); //include('header.php')
			$data['_footer']		= $this->_ci->load->view('footer', $data, TRUE);
			echo $data['_template'] = $this->_ci->load->view('template', $data, TRUE);
		
		}

	}


 ?>