<?php
    class Main extends CI_Controller{
        public function index()
        {
            $player = $this->input->post('player');
            $query = $this->Shootball_model->output($player);
            if(($query->num_rows()==0)||($query->row()->available==0))
                $this->load->view("select");
            else {
                $data = array('query' => $query);
                $this->load->view("main", $data);
            }
        }
    }