<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Servicos extends CI_Controller
{

    public function index()
    {
        $this->load->model('servicos_model');
        $data['servicosAtivos'] = $this->servicos_model->servicosAtivos();
        $this->load->view('pages/servicos',  array('data' => $data));
    }
}
