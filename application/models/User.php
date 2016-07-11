<?php

/**
 * Author Rizki Mufrizal <mufrizalrizki@gmail.com>
 * Since May 4, 2016
 * Time 5:15:57 PM
 * Encoding UTF-8
 * Project SPK-SAW
 * Package Expression package is undefined on line 13, column 14 in Templates/Scripting/PHPClass.php.
 */
class User extends CI_Model {

    public function ambilUserUntukLogin($username) {
        $this->db->where('username', $username);
        $this->db->select('password');
        return $this->db->get('tb_user')->result();
    }

}
