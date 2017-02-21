<?php
class Bid extends CI_Controller{
    public function index($category)
    {
        $data = array('category' => $category);
        $this->load->view("bid", $data);
    }

    public function search_result($category)
    {
        $para = $this->input->get('term');
        $query = $this->Shootball_model->get_search($category,$para);
        if($query->num_rows()>0)
        {
            foreach ($query->result_array() as $row) {
                 $row_set[] = stripslashes($row['name']);
            }
            echo json_encode($row_set); //format the array into json data
        }
    }
}