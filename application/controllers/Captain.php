<?php
class Captain extends CI_Controller{
    public function index(){
        $data= array('query' => $this->Shootball_model->sold_players());
        $this->load->view('captain',$data);
    }
}