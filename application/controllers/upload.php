<?php

class Upload extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    public function index() {
        //$this->load->view('v_uploud',array('error'=>' '));
    }

    public function aksi_upload() {
        $config['upload_path'] = './file/'; //letak filenya
        $config['allowed_types'] = 'pdf|doc|docx'; //hanya file dengan ekstensi ini
        $config['max_size'] = 2000;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('berkas')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('home', $error);
        } else {
            $data = array('upload_data' => $this->upload->data());
            $this->load->view('v_uploud_sukses', $data);
        }
    }

}

?>