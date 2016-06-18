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

    public function ambilHimpunan() {
        return $this->db->get('tb_himpunan')->result();
    }

}
