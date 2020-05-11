<?php

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        // penyimpanan data array ke string data
        $data['content'] = VIEW_ADMIN . "content_dashboard";
        // load view admin/overview.php
        $this->load->view("admin/overview", $data);
    }
}
