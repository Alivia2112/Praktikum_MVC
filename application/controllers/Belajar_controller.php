<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belajar_controller extends CI_controller
{
    function _contruct(){
        parent::_contruct();
    }

    public function home()
    {
        $this->load->view('belajar_view');
    }

    public function contact()
    {
        $this->load->view('belajar_view');
    }
}