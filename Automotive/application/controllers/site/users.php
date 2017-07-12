<?php

/**
 * Created by PhpStorm.
 * User: Faisal_pc
 * Date: 5/17/2016
 * Time: 3:38 PM
 */
class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('siteModel/Users_Data','admin');
    }
    
    public function ajax_list()
    {
        $list = $this->admin->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $admin) {
            $no++;
            $row = array();
            $row[] = $admin->cust_id;
            $row[] = $admin->username;
            $row[] = $admin->lastname;
            $row[] = $admin->email;
            $row[] = $admin->date;
            $row[] = $admin->country;
            $row[] = $admin->phone;
            $row[] = $admin->cust_created_at;
            $row[] = $admin->password;

            //add html for action
            $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_person('."'".$admin->cust_id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Delete" onclick="delete_person('."'".$admin->cust_id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->admin->count_all(),
            "recordsFiltered" => $this->admin->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }
//no


    public function ajax_edit($cust_id = '')
    {
        $data = $this->get_by_id($cust_id);
        echo json_encode($data);
    }

// work
    public function ajax_add()
    {
        $data = array(
            'username' => $this->input->post('username'),
            'lastname' => $this->input->post('lastname'),
            'email' => $this->input->post('email'),
            'date' => $this->input->post('date'),
            'country' => $this->input->post('country'),
            'phone' => $this->input->post('phone'),
            'password'=>$this->input->post('password'),

        );
        $insert=  $this->admin->save($data);
        echo json_encode(array("status" => TRUE));
    }
// no
    public function ajax_update()
    {
        $data = array(
            
            'username' => $this->input->post('username'),
            'lastname' => $this->input->post('lastname'),
            'email' => $this->input->post('email'),
            'date' => $this->input->post('date'),
            'country' => $this->input->post('country'),
            'phone' => $this->input->post('phone'),
            'password'=>$this->input->post('password'),
        );
        $this->admin->update(array('cust_id' => $this->input->post('cust_id')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_delete($cust_id)
    {
        $this->admin->delete_by_id($cust_id);
        
    }




    
    


}