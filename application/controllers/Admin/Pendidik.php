<?php

class Pendidik extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pendidik_model');
    }

    public function index()
    {
        // penyimpanan data array ke string data
        $data['content'] = VIEW_ADMIN . "content_pendidik";
        $data['pendidik'] = $this->Pendidik_model->pendidik_list();
        // load view admin/overview.php
        $this->load->view("admin/overview", $data);
    }
    function pendidik_data()
    {
        $data = $this->pendidik_model->pendidik_list();
        echo json_encode($data);
    }

    function save()
    {
        $data = $this->pendidik_model->save_pendidik();
        echo json_encode($data);
    }

    function update()
    {
        $data = $this->pendidik_model->update_pendidik();
        echo json_encode($data);
    }

    function delete()
    {
        $data = $this->pendidik_model->delete_pendidik();
        echo json_encode($data);
    }
}
