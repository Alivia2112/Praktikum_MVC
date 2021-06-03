<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BMI extends CI_Controller {
    public function index() {
        // BMI PASIEN 1
        $this->load->model('pasien_model', 'pasien1');
        $this->pasien1->id = 1;
        $this->pasien1->kode = '010001';
        $this->pasien1->nama = 'Faiz Fikri';
        $this->pasien1->gender = 'L';

        $this->load->model('bmi_model', 'bmi1');
        $this->bmi1->berat = 64.2;
        $this->bmi1->tinggi = 169;

        $this->load->model('bmi_pasien', 'bmi_pasien1');
        $this->bmi_pasien1->id = 1;
        $this->bmi_pasien1->tanggal = '2021-05-06';
        $this->bmi_pasien1->pasien = $this->pasien1;
        $this->bmi_pasien1->bmi = $this->bmi1;
        $this->bmi_pasien1->bmi->nilai = $this->bmi1->nilaiBMI();
        $this->bmi_pasien1->bmi->status = $this->bmi1->statusBMI();

        // BMI PASIEN 2
        $this->load->model('pasien_model', 'pasien2');
        $this->pasien2->id = 2;
        $this->pasien2->kode = '020001';
        $this->pasien2->nama = 'Pandan Wangi';
        $this->pasien2->gender = 'P';

        $this->load->model('bmi_model', 'bmi2');
        $this->bmi2->berat = 40.2;
        $this->bmi2->tinggi = 152;

        $this->load->model('bmi_pasien', 'bmi_pasien2');
        $this->bmi_pasien2->id = 2;
        $this->bmi_pasien2->tanggal = '2021-05-08';
        $this->bmi_pasien2->pasien = $this->pasien2;
        $this->bmi_pasien2->bmi = $this->bmi2;
        $this->bmi_pasien2->bmi->nilai = $this->bmi2->nilaiBMI();
        $this->bmi_pasien2->bmi->status = $this->bmi2->statusBMI();

        // BMI PASIEN 3
        $this->load->model('pasien_model', 'pasien3');
        $this->pasien3->id = 3;
        $this->pasien3->kode = '010002';
        $this->pasien3->nama = 'Riyadi Salim';
        $this->pasien3->gender = 'L';

        $this->load->model('bmi_model', 'bmi3');
        $this->bmi3->berat = 90.8;
        $this->bmi3->tinggi = 159;

        $this->load->model('bmi_pasien', 'bmi_pasien3');
        $this->bmi_pasien3->id = 3;
        $this->bmi_pasien3->tanggal = '2021-05-10';
        $this->bmi_pasien3->pasien = $this->pasien3;
        $this->bmi_pasien3->bmi = $this->bmi3;
        $this->bmi_pasien3->bmi->nilai = $this->bmi3->nilaiBMI();
        $this->bmi_pasien3->bmi->status = $this->bmi3->statusBMI();

        $list_bmi_pasien = [$this->bmi_pasien1, $this->bmi_pasien2, $this->bmi_pasien3];
        $data['list_bmi_pasien'] = $list_bmi_pasien;

        $this->load->view('header');
        $this->load->view('bmi/index', $data);
        $this->load->view('footer');
    }
}