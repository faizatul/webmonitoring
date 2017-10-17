<?php

class List_mhs extends CI_Model {

    public function toto() {
        $datasiswa = $this->db->get('mahasiswa');
        return $datasiswa;
    }

    //fungsi insert ke database
    function get_insert($data) {
        $this->db->insert($this->datasiswa->fileTA, $data);
        return TRUE;
    }

    public function ambil_jadwal() {
        $datajadwal = $this->db->get('jadwal');
        return $datajadwal;
    }

}
?>

