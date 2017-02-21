<?php
class Shootball_model extends CI_Model{
    public function get_search($category,$para)
    {
        $this->db->select('name');
        $this->db->where('position',$category);
        $this->db->where('available',1);
        $this->db->like('name',$para);
        return $this->db->get('players');
    }
    public function output($player)
    {
        return $this->db->get_where('players',array('name' => $player));
    }
    public function player_row($player)
    {
        return $this->db->get_where('players',array('id' => $player));
    }
    public function team_row($team)
    {
        return $this->db->get_where('teams',array('team_id' => $team));
    }
    public function player_into_team($team,$player)
    {
        $data = array(
            'available'  => '0',
            'team'  => $team
        );
        $this->db->where('id',$player);
        $this->db->update('players', $data);
    }
    public function update_team($team,$budget,$position,$no,$point)
    {
        $data = array(
            $position  => $no,
            'budget'  => $budget,
            'total_point' => $point
        );
        $this->db->where('team_id',$team);
        $this->db->update('teams', $data);
    }
    public function update_team1($team,$budget,$position,$no,$point)
    {
        $data = array(
            $position  => $no,
            'budget'  => $budget,
            'total_point' => $point
        );
        $this->db->where('team_id',$team);
        $this->db->update('teams', $data);
    }
    public function penalise($team,$no)
    {
        $data = array(
            'penalty' => $no
        );
        $this->db->where('team_id',$team);
        $this->db->update('teams', $data);
    }
    public function get_team($team)
    {
        return $this->db->get_where('teams',array('team_id'=>$team));
    }
    public function get_player_by_team($team)
    {
        return $this->db->get_where('players',array('team'=>$team));
    }
    public function sold()
    {
        $query = $this->db->get_where('players',array('available' => 0));
        return $query->num_rows();
    }
    public function sold_players()
    {
        return $this->db->get_where('players',array('available' => 0));
    }
    public function player_point($name)
    {
        $query = $this->db->get_where('players',array('name' => $name));
        if($query->num_rows())
            return $query->row()->value;
        else
            return 0;
    }
}