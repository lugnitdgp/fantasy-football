<?php
class Teams extends CI_Controller{
    public function index()
    {
        $data = array('team'=>0);
        $this->load->view('teams',$data);
    }
    public function show_teams($team)
    {
        $tquery = $this->Shootball_model->get_team($team);
        $pquery = $this->Shootball_model->get_player_by_team($team);
        $data = array('team' => $team,'tquery' => $tquery, 'pquery' => $pquery);
        $this->load->view('teams',$data);
    }
}