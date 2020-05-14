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
        $data['jsfile'] = "admin/_partials/js/pendidikjs.php";
        $data['pendidik'] = $this->Pendidik_model->pendidik_list();
        // load view admin/overview.php
        $this->load->view("admin/overview", $data);
    }
    function pendidik_data()
    {
        $data = $this->Pendidik_model->pendidik_list();
        echo json_encode($data);
    }

    function save()
    {
        $data = $this->Pendidik_model->save_pendidik();
        echo json_encode($data);
    }

    function update()
    {
        $data = $this->Pendidik_model->update_pendidik();
        echo json_encode($data);
    }

    function delete()
    {
        $data = $this->Pendidik_model->delete_pendidik();
        echo json_encode($data);
    }
}
