<?php
  if(!defined('BASEPATH')) exit('No direct script access allowed');

  class MY_Controller extends CI_Controller{
    function __construct(){
      parent::__construct();
    }

    function _footer(){
      $this->load->view('footer');
    }


    function _head(){
        $this->load->view('head');
    }

    function _sidebar(){
      $topics = $this->Topic_model->gets();
      $this->load->view('topic_list', array('topics'=>$topics));
    }

  }
?>
