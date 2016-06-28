<?php

  class Math extends CI_Model {
    public function  add($val1, $val2){
      return $val1 + $val2;
    }


    public function sub($val1, $val2){
      return $val1 - $val2;
    }

    public function mul($val1, $val2){
      return $val1 * $val2;
    }

    public function div($val1, $val2){
      return $val1 / $val2;
    }



  }// End



 ?>
