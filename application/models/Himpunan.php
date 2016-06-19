<?php

/**
 *
 * Author Rizki Mufrizal <mufrizalrizki@gmail.com>
 * Since Jun 18, 2016
 * Time 7:14:26 PM
 * Encoding UTF-8
 * Project SPK-SAW
 * Package Expression package is undefined on line 14, column 14 in Templates/Scripting/PHPClass.php.
 *
 */
class Himpunan extends CI_Model {

    public function tambahHimpunan($himpunan) {
        $this->db->insert('tb_himpunan', $himpunan);
    }

    public function ambilHimpunan() {
        $this->db->order_by('batas_atas', 'asc');
        return $this->db->get('tb_himpunan')->result();
    }

    public function ambilHimpunanBerdasarkanId($idHimpunan) {
        $this->db->where('id_himpunan', $idHimpunan);

        return $this->db->get('tb_himpunan')->result();
    }

    public function ubahHimpunan($himpunan, $idHimpunan) {
        $this->db->where('id_himpunan', $idHimpunan);
        $this->db->update('tb_himpunan', $himpunan);
    }

    public function hapusHimpunan($idHimpunan) {
        $himpunan = array(
            'id_himpunan' => $idHimpunan,
        );
        $this->db->delete('tb_himpunan', $himpunan);
    }

}
