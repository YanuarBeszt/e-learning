<?php

class Kelas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        // penyimpanan data array ke string data
        $data['content'] = VIEW_ADMIN . "content_kelas";
        // load view admin/overview.php
        $this->load->view("admin/overview", $data);
    }
}
