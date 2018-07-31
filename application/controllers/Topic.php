<?php if(!defined('BASEPATH')) exit ('No direct script access allowed');

class Topic extends CI_Controller{

  function __construct(){
    parent::__construct();

//    $this->load->database();
    $this->load->model('Topic_model');
  }

  function index(){
      $this->load->view('head');
      $topics = $this->Topic_model->gets();
      $this->load->view('topic_list',array('topics'=>$topics));
      $this->load->view('main');
      $this->load->view('footer');
  }


  function get($id){
    $this->load->view('head');
    $topics = $this->Topic_model->gets();
    $this->load->view('topic_list',array('topics'=>$topics));    
    $topic = $this->Topic_model->get($id);
    $this->load->view('get',array('topic'=>$topic));
    $this->load->view('footer');
  }

}
?>
