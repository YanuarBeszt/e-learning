<?php

class Akademik extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Akademik_model');
    }

    public function index()
    {
        // penyimpanan data array ke string data
        $data['content'] = VIEW_ADMIN . "content_akademik";
        $data['akademik'] = $this->Akademik_model->akademik_list();
        // load view admin/overview.php
        $this->load->view("admin/overview", $data);
    }
    function akademik_data()
    {
        $data = $this->Akademik_model->akademik_list();
        echo json_encode($data);
    }

    function save()
    {
        $data = $this->Akademik_model->save_akademik();
        echo json_encode($data);
    }

    function update()
    {
        $data = $this->Akademik_model->update_akademik();
        echo json_encode($data);
    }

    function delete()
    {
        $data = $this->Akademik_model->delete_akademik();
        echo json_encode($data);
    }
}
