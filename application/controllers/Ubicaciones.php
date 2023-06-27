<?php

class Ubicaciones extends CI_Controller {
	  function __construct()
	    {
	      parent::__construct();
				$this->load->model("Lugar");

	    }

	public function lugar()
	{
	$data["presidente"]=$this->Lugar->obtenerPresidente();
    $data["asambleista"]=$this->Lugar->obtenerAsambleista();
    $data["consejero"]=$this->Lugar->obtenerConsejero();
    $this->load->view('header');
		$this->load->view('ubicaciones/lugar', $data);
    $this->load->view('footer');
  }

	public function lugar2()
	{
		$data["presidente"]=$this->Lugar->obtenerPresidente();
		$data["asambleista"]=$this->Lugar->obtenerAsambleista();
    $data["consejero"]=$this->Lugar->obtenerConsejero();
    $this->load->view('header');
		$this->load->view('ubicaciones/lugar2', $data);
    $this->load->view('footer');
  }
	public function lugar3()
	{
		$data["izquierda"]=$this->Lugar->obtenerIzquierda();
		$data["derecha"]=$this->Lugar->obtenerDerecha();
    $this->load->view('header');
		$this->load->view('ubicaciones/lugar3', $data);
    $this->load->view('footer');
  }
}
