<?php if ( ! defined('BASEPATH') ) exit('No direct script access allowed!');

class User extends CI_Controller {

  // Used to create initial 'User' table
  // public function index(){
  //   $this->load->model('user_model');
  //   $this->user_model->createUserSchema();
  // }

  public function __construct()
{
    parent::__construct();
    $this->load->model('user_model');
}

public function index()
{
$data['include'] = 'user/index';
$this->load->view('new_user',$data);
}

public function create(){
  // Here you will get data from angular ajax request in json format so you have
  //to decode that json data you will get object array in $request variable

     $postdata = file_get_contents("php://input");
     $request = json_decode($postdata);
     $login = $request->login;
     $password = $request->password;
     $email = $request->email;
     $id = $this->user_model->addUser($login,$password,$email);
     if($id)
     {
        echo $result = '{"status" : "success"}';
     }else{
        echo $result = '{"status" : "failure"}';
     }


    // $request= json_decode(file_get_contents('php://input'), TRUE);
    // $data1=$this->user_model->insert_form($request);
    // $this->fetchdata();
}


public function get_users() {
    $this->load->model(array('user_model'));
    $data = $this->user_model->getAll();
    $this->output->set_content_type('application/json')->set_output(json_encode($data));
}



}// End Controller
 ?>
