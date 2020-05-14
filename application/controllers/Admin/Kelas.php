<?php

class Kelas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kelas_model');
    }

    public function index()
    {
        // penyimpanan data array ke string data
        $data['content'] = VIEW_ADMIN . "content_kelas";
        $data['jsfile'] = "admin/_partials/js/kelasjs.php";
        $data['kelas'] = $this->Kelas_model->kelas_list();
        // load view admin/overview.php
        $this->load->view("admin/overview", $data);
    }
    function kelas_data()
    {
        $data = $this->Kelas_model->kelas_list();
        echo json_encode($data);
    }

    function save()
    {
        $data = $this->Kelas_model->save_kelas();
        echo json_encode($data);
    }

    function update()
    {
        $data = $this->Kelas_model->update_kelas();
        echo json_encode($data);
    }

    function delete()
    {
        $data = $this->Kelas_model->delete_kelas();
        echo json_encode($data);
    }
}
