<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Servicos_model extends  CI_Model
{



    public function servicosAtivos()
    {
        return $this->db->query('SELECT * FROM servicos WHERE status = ?', [1])->result_array();
    }
}
