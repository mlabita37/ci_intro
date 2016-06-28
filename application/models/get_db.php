<?php

  class Get_db extends CI_Model {

    function getAll(){
      $query = $this->db->query("SELECT * FROM test");
      return $query->result(); // Result will return from the string, converts it into an array similar to how MySQL fetch would do
    }

    // function insert1($data){ // Recieves a parameter that is an array
    //   $this->db->insert("test", $data);
    //
    // }

    function insert2($data){
      $this->db->insert_batch("test", $data);
    }

    function update1($data){
      $this->db->update("test", $data, "id = 2");
    }

    function update2($data){
      $this->db->update_batch("test", $data, "id");

    }

    function delete1($data){
      $this->db->delete("test", $data);
    }

    function empty1($table){
      $this->db->empty_table($table);
    }




  }// End

 ?>
