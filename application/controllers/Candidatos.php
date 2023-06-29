<?php
/**
 *
 */
  class Candidatos extends CI_Controller
  {
        function __construct()
        {
          parent::__construct();
          //Cargar modelo
          $this->load->model('Candidato');
        }

        //Invocar al padre del constrcutor
      //Renderizacion de la vista qu emuestra lso desayunos
      public function nuevo(){
        $this->load->view('header');
        $this->load->view('candidatos/nuevo');
        $this->load->view('footer');
      }

      public function index(){
        $data['candidatos']=$this->Candidato->obtenerTodos();
        $this->load->view('header');
        $this->load->view('candidatos/index',$data);
        $this->load->view('footer');
      }

      public function editar($id_el){
        $data['editarCandidato']=$this->Candidato->obtenerPorId($id_el);
        $this->load->view('header');
        $this->load->view('candidatos/editar',$data);
        $this->load->view('footer');
      }


      public function guardar(){
      $datosNuevoCandidato=array(
       "dignidad_el"=>$this->input->post('dignidad_el'),
       "movimiento_el"=>$this->input->post('movimiento_el'),
       "nombre_el"=>$this->input->post('nombre_el'),
       "apellido_el"=>$this->input->post('apellido_el'),
       "profesion_el"=>$this->input->post('profesion_el'),
       "edad_el"=>$this->input->post('edad_el'),
       "latitud_el"=>$this->input->post('latitud_el'),
       "longitud_el"=>$this->input->post('longitud_el'),
       "ideologia_el"=>$this->input->post('ideologia_el'),
     );
     if ($this->Candidato->insertar($datosNuevoCandidato)) {
       redirect('candidatos/index');
     }else{
       echo "<h1>ERROR AL INSERTAR</h1>";

     }
     }

     public function procesarActualizacion() {
       $datosEditados = array(
         "dignidad_el"=>$this->input->post('dignidad_el'),
         "movimiento_el"=>$this->input->post('movimiento_el'),
         "nombre_el"=>$this->input->post('nombre_el'),
         "apellido_el"=>$this->input->post('apellido_el'),
         "profesion_el"=>$this->input->post('profesion_el'),
         "edad_el"=>$this->input->post('edad_el'),
         "latitud_el"=>$this->input->post('latitud_el'),
         "longitud_el"=>$this->input->post('longitud_el'),
         "ideologia_el"=>$this->input->post('ideologia_el'),
       );

       $id_el = $this->input->post('id_el');
       if ($this->Candidato->actualizar($id_el, $datosEditados)) {
         redirect("candidatos/index");
       } else {
       }

     }
     //funcion par aelimianr instructores
    public function eliminar($id_el){
      //echo $id_ins;
      if ($this->Candidato->borrar($id_el)) {//invocando al modelo
        redirect('candidatos/index');
      }else {
        echo "ERROR AL BORRAR :((";
      }
    }



  }
?>
