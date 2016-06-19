<?php

/**
 * Author Rizki Mufrizal <mufrizalrizki@gmail.com>
 * Since Apr 21, 2016
 * Time 7:20:48 PM
 * Encoding UTF-8
 * Project Metode-Saw
 * Package Expression package is undefined on line 14, column 14 in Templates/Scripting/PHPClass.php.
 */
class CalonSiswaController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('CSVReader');
        $this->load->model('CalonSiswa');
        $this->load->model('NilaiCalonSiswa');
        $this->load->model('Himpunan');
        $this->load->model('Kriteria');
    }

    public function index() {
        $session = $this->session->userdata('isLogin');

        if ($session == false) {
            redirect('admin/login');
        } else {
            $data['calon_siswa'] = $this->CalonSiswa->ambilCalonSiswa();
            $this->load->view('admin/CalonSiswaView', $data);
        }
    }

    public function tambahCalonSiswa() {
        $val = array(
            'nisn' => $this->input->post('nisn'),
            'nama' => $this->input->post('nama'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'nama_orang_tua' => $this->input->post('nama_orang_tua'),
            'pekerjaan_orang_tua' => $this->input->post('pekerjaan_orang_tua'),
            'no_telepon' => $this->input->post('no_telepon'),
            'keterangan' => $this->input->post('keterangan')
        );
        $this->CalonSiswa->tambahCalonSiswa($val);
        redirect('admin/CalonSiswaController');
    }

    public function ambilCalonSiswaDanNilaiBerdasarkanNisn($nisn) {
        $data['calon_siswa_nilai'] = $this->CalonSiswa->ambilCalonSiswaBerdasarkanNisn($nisn);
        $data['kriteria'] = $this->Kriteria->ambilKriteria();
        $this->load->view('admin/CalonSiswaTambahNilaView', $data);
    }

    public function hapusCalonSiswa() {
        $this->CalonSiswa->hapusCalonSiswa();
        redirect('admin/CalonSiswaController');
    }

    public function uploadCsvCalonSiswa() {
        $namaFile = $this->uuid->v4();
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'csv';
        $config['max_size'] = 2000;
        $config['file_name'] = $namaFile;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('csv')) {
            echo $this->upload->display_errors();
        } else {
            $file_data = $this->upload->data();
            $file_path = './uploads/' . $file_data['file_name'];

            $result = $this->csvreader->parse_file($file_path);

            //simpan calon siswa
            foreach ($result as $row) {
                $val = array(
                    'nisn' => $row['nisn'],
                    'nama' => $row['nama'],
                    'tempat_lahir' => $row['tempat_lahir'],
                    'tanggal_lahir' => $row['tanggal_lahir'],
                    'nama_orang_tua' => $row['nama_orang_tua'],
                    'pekerjaan_orang_tua' => $row['pekerjaan_orang_tua'],
                    'no_telepon' => $row['no_telepon'],
                    'keterangan' => $row['keterangan']
                );
                $this->CalonSiswa->tambahCalonSiswa($val);
            }

            //simpan calon siswa
            foreach ($result as $row) {
                $nisn = $row['nisn'];
                $c1 = $row['nilai_peminatan'];
                $c2 = $row['nilai_hasil_pendekatan_psikotest'];
                $c3 = $row['nilai_placementtes'];
                $c4 = $row['nilai_raport'];
                $c5 = $row['nilai_un'];

                foreach ($this->Himpunan->ambilHimpunan() as $h) {
                    if ($c1 >= $h->batas_atas and $c1 <= $h->batas_bawah) {
                        $c1 = $h->nilai;
                    }

                    if ($c2 >= $h->batas_atas and $c2 <= $h->batas_bawah) {
                        $c2 = $h->nilai;
                    }

                    if ($c3 >= $h->batas_atas and $c3 <= $h->batas_bawah) {
                        $c3 = $h->nilai;
                    }

                    if ($c4 >= $h->batas_atas and $c4 <= $h->batas_bawah) {
                        $c4 = $h->nilai;
                    }

                    if ($c5 >= $h->batas_atas and $c5 <= $h->batas_bawah) {
                        $c5 = $h->nilai;
                    }
                }

                $val = array(
                    'id_nilai' => $this->uuid->v4(),
                    'nilai_asli_c1' => $row['nilai_peminatan'],
                    'nilai_asli_c2' => $row['nilai_hasil_pendekatan_psikotest'],
                    'nilai_asli_c3' => $row['nilai_placementtes'],
                    'nilai_asli_c4' => $row['nilai_raport'],
                    'nilai_asli_c5' => $row['nilai_un'],
                    'c1' => $c1,
                    'c2' => $c2,
                    'c3' => $c3,
                    'c4' => $c4,
                    'c5' => $c5,
                    'nisn' => $nisn
                );

                $this->NilaiCalonSiswa->tambahNilaiCalonSiswa($val);

                $valCalonSiswa = array(
                    'status' => true,
                );
                $this->CalonSiswa->ubahCalonSiswa($valCalonSiswa, $nisn);
            }

            redirect('admin/CalonSiswaController');
        }
    }

}
