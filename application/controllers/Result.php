<?php
class Result extends CI_Controller{
    public function index()
    {
        $data=array();
        for($i=1;$i<9;$i++)
        {
            $tquery = $this->Shootball_model->get_team($i);
            $captain = $this->Shootball_model->player_point($this->input->post('team'.$i));
            $marquee=$this->Shootball_model->player_point($this->input->post('team'.$i));
            $data['team'.$i]=$tquery->row()->total_point+$captain-($tquery->row()->penalty*40);
        }
        $this->load->view('result',$data);
    }
}