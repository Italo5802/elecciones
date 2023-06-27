<?php
    /**
     *
     */
    class Lugar extends CI_Model
    {

      function __construct()
      {
        parent::__construct();
      }
      function obtenerPresidente()
        {
          $listadoLugares = $this->db->where('dignidad_el', 'Presidente/a')->get('candidato');
          if ($listadoLugares->num_rows() > 0) {
            return $listadoLugares->result();
          }
          return false;
        }
        function obtenerAsambleista()
        {
          $listadoLugares2 = $this->db->where('dignidad_el', 'Asambleista Nacional')->get('candidato');
          if ($listadoLugares2->num_rows() > 0) {
            return $listadoLugares2->result();
          }
          return false;
        }

        function obtenerConsejero()
        {
          $listadoLugares3 = $this->db->where('dignidad_el', 'Asambleista Provincial')->get('candidato');
          if ($listadoLugares3->num_rows() > 0) {
            return $listadoLugares3->result();
          }
          return false;
        }
        function obtenerIzquierda()
        {
          $listadoLugares3 = $this->db->where('ideologia_el', 'Izquierda')->get('candidato');
          if ($listadoLugares3->num_rows() > 0) {
            return $listadoLugares3->result();
          }
          return false;
        }
        function obtenerDerecha()
        {
          $listadoLugares3 = $this->db->where('ideologia_el', 'Derecha')->get('candidato');
          if ($listadoLugares3->num_rows() > 0) {
            return $listadoLugares3->result();
          }
          return false;
        }
    }

 ?>
