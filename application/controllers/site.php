<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

  public function index(){
    $this->home();
  }

  public function home(){
    $data['title'] = "Welcome"; // Create new array name title and give it a value of welcome
    // When you pass an array into a view, all of the objects in the array become variables in the the view
    $data['val1'] = "2";
    $data['val2'] = "8";

    $this->load->model("math");

    $data['addTotal'] = $this->math->add($data['val1'], $data['val2']);
    $data['subTotal'] = $this->math->sub($data['val1'], $data['val2']);


    $this->load->view("home_view", $data);
  }

  public function addStuff(){
    $this->load->model("math"); // Load the model
    echo $this->math->add(50, 2); // Access it's add() function
  }


  function about(){
    $data['title'] = "About";
    $this->load->view("about_view");
  }


  function getValues(){
    $this->load->model("get_db");

    $data['results'] = $this->get_db->getAll();

    $this->load->view("db_view", $data);
  }

  function insertValues(){
    $this->load->model("get_db");
    // $newRow1 = array(
    //   "name" => "bob"
    // );

    $newRow2 = array(
      array(
        "name" => "sue"
      ),
      array(
        "name" => "dylan"
      )
    );

    // $this->get_db->insert1($newRow1);

    $this->get_db->insert2($newRow2);

    echo "it has been added";
  }


  function updateValues(){
    $this->load->model("get_db");

    $newRow = array(
      array(
        "id" => "3",
        "name" => "marcus"
      ),
      array(
        "id" => "4",
        "name" => "bill"
      )
    );

    $this->get_db->update2($newRow);
    echo "It has been updated";

  }


  function deleteValues(){
    $this->load->model("get_db");

      $oldRow = array(
        "id" => "7"
      );

      $this->get_db->delete1($oldRow);

      echo "deleted!";
  }

  function emptyTable(){
    $this->load->model("get_db");
    $oldRow = "test";
    $this->get_db->empty1($oldRow);
    echo "emptied!";
  }

















} // End
