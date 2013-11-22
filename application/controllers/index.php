<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->layout->setLayout('template1');
		
	}
	
	public function index()
	{
		$this->layout->view('index');
	}
	public function nosotros()
	{
		$this->layout->setTitle('SETEANDO');
		$this->layout->setDescripcion('DESCRIPCION SETEAADISIMA');
		$this->layout->view('nosotros');	
	}
	
}
