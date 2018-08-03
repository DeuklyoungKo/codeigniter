<?php if(!defined('BASEPATH')) exit ('No direct script access allowed');

class Auth extends MY_Controller{

  function __construct(){
    parent::__construct();
  }

  function login(){
    $this->_head();
    $this->load->view('login');
    $this->_footer();
  }


  function authentication(){
    $authentication = $this->config->item("authentication");
    if($this->input->POST('id') == $authentication["id"] && $this->input->POST('password') == $authentication["password"]){

    $this->session->set_userdata('is_login',true);
    $this->load->helper('url');
    redirect('/topic/add');
  }else{
    $this->session->set_flashdata('message','fail to sign in');
    $this->load->helper('url');
    redirect('/auth/login');
    }
  }


  function logout(){
//    $this->session->set_userdata('is_login',false);
    $this->session->sess_destroy();
//    session_destroy();
    $this->session->set_flashdata('message','complete sign out');
    $this->load->helper('url');
    redirect('/topic');
  }

}
