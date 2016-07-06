<?php
// Model name is always capital letter
class User_model extends CI_Model {

    public function __construct(){
      $this->load->database();
      $this->table_name = 'user';
    }

    public function createUserSchema(){
      $this->load->dbforge();

      $fields = array(
        'id' => array(
          'type' => 'int'
          ,'constraint' => 11
          ,'unsigned' => true
          ,'auto_increment' => true
        )
        ,'login' => array(
            'type' => 'varchar'
            ,'constraint' => 30
        )
        ,'password' => array(
            'type' => 'varchar'
            ,'constraint' => 64 // For Sha256 (sha1, md5)
        )
        ,'email' => array(
            'type' => 'varchar'
            ,'constraint' => 50
        )
      );

      $this->dbforge->add_field($fields);
      $this->dbforge->add_key('id', true);
      $this->dbforge->create_table('user');

    }

    // function table_exists(){
    //   if ($this->db->table_exists('user')){
    //     echo '<p>The user table already exists!</p>';
    //   }
    // }

    public function addUser($login, $password, $email){
      $data = array('login' =>$login, 'password' => $password, 'email' => $email);
      $this->db->insert('user', $data);
      $insert_id = $this->db->insert_id();
      return $insert_id;
    }

    public function getAll() {
        return $this->db->from($this->table_name)->get()->result_array();
    }

}


?>
