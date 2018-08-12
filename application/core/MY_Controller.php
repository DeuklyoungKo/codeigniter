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
        $this->load->view('head',array(''));
    }

    function _sidebar(){
      $topics = $this->Topic_model->gets();
      $this->load->view('topic_list', array('topics'=>$topics));
    }

// to make return url
    function _getReturnUrl($inputUrl = false){
      if($inputUrl){
        $result = rawurlencode($inputUrl);
      }else{
        $result = rawurlencode(uri_string());
      }
      return $result;
    }


  }
?>
