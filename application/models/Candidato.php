<?php
  /**
   *
   */
  class Candidato extends CI_Model
  {

    function __construct()
    {
      parent::__construct();
    }
    //funcion para insertar un instructot
    function insertar($datos){
      //ACTIVE_RECORD > en CodeIgniter
      return $this->db->insert("candidato",$datos);
      //Inseccion sQL
    }
    function obtenerTodos(){
      $listadoEmpleados=$this->db->get("candidato");
      if($listadoEmpleados->num_rows()>0){//si hay datos
        return $listadoEmpleados->result();
      }else{//no hay datos
        return false;
      }

    }
    function borrar($id_el){
      $this->db->where("id_el",$id_el);
      if ($this->db->delete("candidato")) {
        return true;
      }else {
        return false;
      }
    }

  }//cierre de la funcion



 ?>
