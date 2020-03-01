<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class pengunjung extends CI_Controller {

   public function __construct(){
       parent::__construct();
        $this->load->model('pengunjung_model');
   }

    public function index()
    {
        //$this->load->model('mahasiswa_model');
        //$this->load->database();
        $data['title']='List Pengunjung';
        $data['pengunjung']=$this->pengunjung_model->getAllpengunjung();
        if( $this->input->post('keyword')){
            $data['pengunjung']=$this->pengunjung_model->cariDatapengunjung();
        }
        $this->load->view('template/header',$data);
        $this->load->view('pengunjung/index',$data);
        $this->load->view('template/footer');
    }

    public function tambah(){
        $data['title']='Form Menambahakan Data Pengunjung';

        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('ktp', 'ktp', 'required');
        $this->form_validation->set_rules('tlp', 'tlp', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header',$data);
            $this->load->view('pengunjung/tambah',$data);
            $this->load->view('template/footer');
        } else {
            $this->pengunjung_model->tambahdatapj();

            // untuk flash data mempunyai 2 parameter
            $this->session->set_flashdata('flash-data','ditambahkan');
            redirect('pengunjung','refresh');
        }
        
    }

    public function hapus($id_pengunjung){
        $this->pengunjung_model->hapusdatapj($id_pengunjung);
        //untuk flash data mempunyai 2 param
        $this->session->set_flashdata('flash-data','dihapus');
        redirect('pengunjung','refresh');
    }

    public function detail($id_pengunjung){
        $data['title']='Detail Pengunjung';
        $data['pengunjung']=$this->pengunjung_model->getpengunjungByID($id_pengunjung);
        $this->load->view('template/header',$data);
        $this->load->view('pengunjung/detail',$data);
        $this->load->view('template/footer');
    }

    public function edit($id_pengunjung){
        $data['title']='Form Edit Data Pengunjung';
        $data['pengunjung']=$this->pengunjung_model->getpengunjungByID($id_pengunjung);

        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('ktp', 'ktp', 'required');
        $this->form_validation->set_rules('tlp', 'tlp', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header',$data);
            $this->load->view('pengunjung/edit',$data);
            $this->load->view('template/footer');
        } else {
            $this->pengunjung_model->ubahdatapj();

            // untuk flash data mempunyai 2 parameter
            $this->session->set_flashdata('flash-data','diedit');
            redirect('pengunjung','refresh');
        }
    }
}

/* End of file Controllername.php */

?>