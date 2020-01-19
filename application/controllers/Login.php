<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('m_login');
    }

    public function index(){
        $this->load->view('login');
    }

    public function cek_login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $where = array(
            'username' => $username,
            'password' => md5($password),
        );
        $cek = $this->m_login->cek_login($where);
        if($cek->num_rows() != 0){
            $data = $cek->row();
            if($data->id_level == 1){
                echo "halaman admin";
            }elseif($data->id_level == 2){
                echo "halaman pegawai";
            }elseif($data->id_level == 3){
                echo "halaman peminjam";
            }
        }else{
            $this->session->set_flashdata('error','Username atau password salah');
            redirect(base_url('login'));
        }
    }

}