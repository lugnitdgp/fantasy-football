<?php
class Buy extends CI_Controller{
    public function index($player)
    {
        $team = $this->input->post('tid');
        $price = $this->input->post('pri');
        $player_query = $this->Shootball_model->player_row($player);
        $team_query = $this->Shootball_model->team_row($team);
        $total_players = $team_query->row()->goalkeeper+$team_query->row()->defender+$team_query->row()->midfielder+$team_query->row()->striker+ $team_query->row()->marquee;
        if($total_players<15)
       {
           if(($team_query->row()->budget-$price)>=0)
           {
                  switch($player_query->row()->position){
                   case 1:
                       $team_no=$team_query->row()->goalkeeper;
                       if($team_no<2)
                       {
                           $this->Shootball_model->player_into_team($team,$player);
                           $this->Shootball_model->update_team($team,$team_query->row()->budget-$price,'goalkeeper',$team_no+1,$team_query->row()->total_point+$player_query->row()->value);
                           $no_sold=$this->Shootball_model->sold();
                           $data = array('no_sold' => $no_sold);
                           $this->load->view('success',$data);
                       }
                       else
                       {
                            $this->Shootball_model->penalise($team,$team_query->row()->penalty+1);
                            $this->load->view("unsuccessful");
                       }
                       break;
                   case 2:
                       $team_no=$team_query->row()->defender;
                       if($team_no<5)
                       {
                           $this->Shootball_model->player_into_team($team,$player);
                           $this->Shootball_model->update_team($team,$team_query->row()->budget-$price,'defender',$team_no+1,$team_query->row()->total_point+$player_query->row()->value);
                           $no_sold=$this->Shootball_model->sold();
                           $data = array('no_sold' => $no_sold);
                           $this->load->view('success',$data);
                       }
                       else
                       {
                           $this->Shootball_model->penalise($team,$team_query->row()->penalty+1);
                           $this->load->view("unsuccessful");
                       }
                       break;
                   case 3:
                       $team_no=$team_query->row()->midfielder;
                       if($team_no<5)
                       {
                           $this->Shootball_model->player_into_team($team,$player);
                           $this->Shootball_model->update_team($team,$team_query->row()->budget-$price,'midfielder',$team_no+1,$team_query->row()->total_point+$player_query->row()->value);
                           $no_sold=$this->Shootball_model->sold();
                           $data = array('no_sold' => $no_sold);
                           $this->load->view('success',$data);
                       }
                       else
                       {
                           $this->Shootball_model->penalise($team,$team_query->row()->penalty+1);
                           $this->load->view("unsuccessful");
                       }
                       break;
                   case 4:
                       $team_no=$team_query->row()->striker;
                       if($team_no<3)
                       {
                           $this->Shootball_model->player_into_team($team,$player);
                           $this->Shootball_model->update_team($team,$team_query->row()->budget-$price,'striker',$team_no+1,$team_query->row()->total_point+$player_query->row()->value);
                           $no_sold=$this->Shootball_model->sold();
                           $data = array('no_sold' => $no_sold);
                           $this->load->view('success',$data);
                       }
                       else
                       {
                           $this->Shootball_model->penalise($team,$team_query->row()->penalty+1);
                           $this->load->view("unsuccessful");
                       }
                       break;


#marquee player case:

                  case 5:
                        $team_no1=$team_query->row()->marquee;
                     if($team_no1<1)
                        {
                          switch($player_query->row()->marquee){
                   case 1:
                       $team_no=$team_query->row()->goalkeeper;
                       if($team_no<2)
                       {
                           $this->Shootball_model->player_into_team($team,$player);
                           $this->Shootball_model->update_team($team,$team_query->row()->budget-$price,'goalkeeper',$team_no+1,$team_query->row()->total_point+$player_query->row()->value);
                           $this->Shootball_model->update_team1($team,$team_query->row()->budget-$price,'marquee',$team_no1+1,$team_query->row()->total_point);
                           $no_sold=$this->Shootball_model->sold();
                           $data = array('no_sold' => $no_sold);
                           $this->load->view('success',$data);
                       }
                       else
                       {
                            $this->Shootball_model->penalise($team,$team_query->row()->penalty+1);
                            $this->load->view("unsuccessful");
                       }
                       break;
                   case 2:
                       $team_no=$team_query->row()->defender;
                       if($team_no<5)
                       {
                           $this->Shootball_model->player_into_team($team,$player);
                           $this->Shootball_model->update_team($team,$team_query->row()->budget-$price,'defender',$team_no+1,$team_query->row()->total_point+$player_query->row()->value);
                           $this->Shootball_model->update_team1($team,$team_query->row()->budget-$price,'marquee',$team_no1+1,$team_query->row()->total_point);
                           $no_sold=$this->Shootball_model->sold();
                           $data = array('no_sold' => $no_sold);
                           $this->load->view('success',$data);
                       }
                       else
                       {
                           $this->Shootball_model->penalise($team,$team_query->row()->penalty+1);
                           $this->load->view("unsuccessful");
                       }
                       break;
                   case 3:
                       $team_no=$team_query->row()->midfielder;
                       if($team_no<5)
                       {
                           $this->Shootball_model->player_into_team($team,$player);
                           $this->Shootball_model->update_team($team,$team_query->row()->budget-$price,'midfielder',$team_no+1,$team_query->row()->total_point+$player_query->row()->value);
                           $this->Shootball_model->update_team1($team,$team_query->row()->budget-$price,'marquee',$team_no1+1,$team_query->row()->total_point);
                           $no_sold=$this->Shootball_model->sold();
                           $data = array('no_sold' => $no_sold);
                           $this->load->view('success',$data);
                       }
                       else
                       {
                           $this->Shootball_model->penalise($team,$team_query->row()->penalty+1);
                           $this->load->view("unsuccessful");
                       }
                       break;
                   case 4:
                       $team_no=$team_query->row()->striker;
                       if($team_no<3)
                       {
                           $this->Shootball_model->player_into_team($team,$player);
                           $this->Shootball_model->update_team($team,$team_query->row()->budget-$price,'striker',$team_no+1,$team_query->row()->total_point+$player_query->row()->value);
                           $this->Shootball_model->update_team1($team,$team_query->row()->budget-$price,'marquee',$team_no1+1,$team_query->row()->total_point);
                           $no_sold=$this->Shootball_model->sold();
                           $data = array('no_sold' => $no_sold);
                           $this->load->view('success',$data);
                       }
                       else
                       {
                           $this->Shootball_model->penalise($team,$team_query->row()->penalty+1);
                           $this->load->view("unsuccessful");
                       }
                       break;

                     }
                   }
                      
                      else
                        {
                             $this->Shootball_model->penalise($team,$team_query->row()->penalty+1);
                             $this->load->view("unsuccessful");
                         }
            
            break;
            }  
          }
             
           else
           {
               $this->Shootball_model->penalise($team,$team_query->row()->penalty+1);
               $this->load->view("unsuccessful");
           }
       }
       else
       {
           $this->Shootball_model->penalise($team,$team_query->row()->penalty+1);
           $this->load->view("unsuccessful");
       }
    }
}
