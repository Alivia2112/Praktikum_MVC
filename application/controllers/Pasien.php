<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pasien extends CI_Controller {
    public function index() {
        $this->load->model('pasien_model', 'pasien1');
        $this->pasien1->id = 1;
        $this->pasien1->kode = '010001';
        $this->pasien1->nama = 'Faiz Fikri';
        $this->pasien1->tmpt_lahir = 'Jakarta';
        $this->pasien1->tgl_lahir = '2001-04-01';
        $this->pasien1->gender = 'L';

        $this->load->model('pasien_model', 'pasien2');
        $this->pasien2->id = 2;
        $this->pasien2->kode = '020001';
        $this->pasien2->nama = 'Pandan Wangi';
        $this->pasien2->tmpt_lahir = 'Medan';
        $this->pasien2->tgl_lahir = '2002-02-02';
        $this->pasien2->gender = 'P';

        $this->load->model('pasien_model', 'pasien3');
        $this->pasien3->id = 3;
        $this->pasien3->kode = '030001';
        $this->pasien3->nama = 'Riyadi Salim';
        $this->pasien3->tmpt_lahir = 'Solo-';
        $this->pasien3->tgl_lahir = '2003-03-03';
        $this->pasien3->gender = 'L';

        $list_pasien = [$this->pasien1, $this->pasien2, $this->pasien3];
        $data['list_pasien'] = $list_pasien;

        $this->load->view('header');
        $this->load->view('pasien/index', $data);
        $this->load->view('footer');
    }
}