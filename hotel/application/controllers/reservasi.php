<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class reservasi extends CI_Controller {

   public function __construct(){
       parent::__construct();
        $this->load->model('reservasi_model');
   }

    public function index()
    {
        $data['title']='List reservasi';
        $data['reservasi']=$this->reservasi_model->getAllreservasi();
        if( $this->input->post('keyword')){
            $data['reservasi']=$this->reservasi_model->cariDatareservasi();
        }
        $this->load->view('template/header',$data);
        $this->load->view('reservasi/index',$data);
        $this->load->view('template/footer');
    }

    public function tambah(){
        $data['title']='Form Menambahakan Data reservasi';

        $this->form_validation->set_rules('noreservasi', 'No reservasi', 'required');
        $this->form_validation->set_rules('type', 'Type', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header',$data);
            $this->load->view('reservasi/tambah',$data);
            $this->load->view('template/footer');
        } else {
            $this->reservasi_model->tambahdatakm();

            // untuk flash data mempunyai 2 parameter
            $this->session->set_flashdata('flash-data','ditambahkan');
            redirect('reservasi','refresh');
        }
        
    }

    public function hapus($id_reservasi){
        $this->reservasi_model->hapusdatars($id_reservasi);
        //untuk flash data mempunyai 2 param
        $this->session->set_flashdata('flash-data','dihapus');
        redirect('reservasi','refresh');
    }

    public function detail($id_reservasi){
        $data['title']='Detail reservasi';
        $data['reservasi']=$this->reservasi_model->getreservasiByID($id_reservasi);
        $this->load->view('template/header',$data);
        $this->load->view('reservasi/detail',$data);
        $this->load->view('template/footer');
    }

    public function edit($id_reservasi){
        $data['title']='Form Edit Data reservasi';
        $data['reservasi']=$this->reservasi_model->getreservasiByID($id_reservasi);

        $this->form_validation->set_rules('id_pengunjung', 'Id Pengunjung', 'required');
        $this->form_validation->set_rules('id_kamar', 'Id Kamar', 'required');
        $this->form_validation->set_rules('tgl1', 'Tgl Masuk', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header',$data);
            $this->load->view('reservasi/edit',$data);
            $this->load->view('template/footer');
        } else {
            $this->reservasi_model->ubahdatars();

            // untuk flash data mempunyai 2 parameter
            $this->session->set_flashdata('flash-data','diedit');
            redirect('reservasi','refresh');
        }
    }
}

/* End of file Controllername.php */

?>