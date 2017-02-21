<?php
class Winner extends CI_Controller{
    public function index($team){
        $data = array('team'=>$team);
        $this->load->view('winner',$data);
    }
}