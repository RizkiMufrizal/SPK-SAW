<?php

/**
 *
 * Author Rizki Mufrizal <mufrizalrizki@gmail.com>
 * Since Jun 19, 2016
 * Time 8:23:39 AM
 * Encoding UTF-8
 * Project SPK-SAW
 * Package Expression package is undefined on line 14, column 14 in Templates/Scripting/PHPClass.php.
 *
 */
class HimpunanController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Himpunan');
    }

    public function index() {
        $session = $this->session->userdata('isLogin');

        if ($session == false) {
            redirect('admin/login');
        } else {
            $data['himpunan'] = $this->Himpunan->ambilHimpunan();
            $this->load->view('admin/HimpunanView', $data);
        }
    }

    public function tambahHimpunan() {
        $val = array(
            'id_himpunan' => $this->uuid->v4(),
            'batas_atas' => $this->input->post('batas_atas'),
            'batas_bawah' => $this->input->post('batas_bawah'),
            'nilai' => $this->input->post('nilai')
        );
        $this->Himpunan->tambahHimpunan($val);
        redirect('admin/HimpunanController');
    }

    public function editHimpunan($idHimpunan) {
        $data['himpunan'] = $this->Himpunan->ambilHimpunanBerdasarkanId($idHimpunan);
        $this->load->view('admin/HimpunanEditView', $data);
    }

    public function updateHimpunan() {
        $val = array(
            'batas_atas' => $this->input->post('batas_atas'),
            'batas_bawah' => $this->input->post('batas_bawah'),
            'nilai' => $this->input->post('nilai')
        );
        $this->Himpunan->ubahHimpunan($val, $this->input->post('id_himpunan'));
        redirect('admin/HimpunanController');
    }

    public function hapusHimpunan($idHimpunan) {
        $this->Himpunan->hapusHimpunan($idHimpunan);
        redirect('admin/HimpunanController');
    }

}
