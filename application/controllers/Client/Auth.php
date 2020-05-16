<?php

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        // penyimpanan data array ke string data
        // $data['content'] = base_url("Client/login");
        // load view admin/overview.php
        $this->load->view("client/login");
    }
}
