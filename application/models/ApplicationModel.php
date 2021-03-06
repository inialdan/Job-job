<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class ApplicationModel extends CI_Model {

        private $table = "application";

        public function findOne($col, $val){
            return $this->db->get_where($this->table, [$col => $val])->row();
        }

        public function findMyApplication($col, $val){
            return $this->db->get_where($this->table, [$col => $val])->result();
        }
    
        public function findAll(){
            return $this->db->get($this->table)->result();
        }
        
        public function create($data){
            return $this->db->insert($this->table, $data);
        }
        
        public function update($data, $id){
            return $this->db->update($this->table, $data, array('id' => $id));
        }
        
        public function delete($id){
            return $this->db->delete($this->table, array('id' => $id));
        }
        
    }