<?php namespace App\Models;

    use CodeIgniter\Model;

    class Data extends Model {

        public function listarDatos(){
            $Datos = $this->db->query("SELECT * from historialuf");
            return $Datos->getResult();
        }

        public function insertar($datos){
            $database = $this->db->table('historialuf');
            $database->insert($datos);
            return  $this->db->insertID();
        }
    }