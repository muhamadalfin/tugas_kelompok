<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class reservasi_model extends CI_Model {

   public function getAllreservasi(){
       return $this->db->get('reservasi')->result_array();
   }

   public function tambahdatars(){
       $data=[
            "noreservasi"=> $this->input->post('no_reservasi',true),
            "type"=> $this->input->post('type',true),
            "harga"=> $this->input->post('harga',true),
       ];
       $this->db->insert('reservasi',$data);
   }

   public function hapusdatars($id_reservasi){
       $this->db->where('id_reservasi',$id_reservasi);
       $this->db->delete('reservasi');
   }

   public function getreservasiByID($id_reservasi){
       return $this->db->get_where('reservasi',['id_reservasi'=>$id_reservasi])->row_array();
   }

   public function ubahdatars(){
        $data=[
            "id_pengunjung"=> $this->input->post('id_pengunjung',true),
            "id_kamar"=> $this->input->post('id_kamar',true),
            "tgl1"=> $this->input->post('tgl_masuk',true),
            "tgl2"=> $this->input->post('tgl_keluar',true),
        ];
        $this->db->where('id_reservasi',$this->input->post('id_reservasi'));
        $this->db->update('reservasi',$data);
   }

   public function cariDatareservasi(){
       $keyword=$this->input->post('keyword');
       $this->db->like('id_reservasi',$keyword);
       $this->db->or_like('tgl_masuk',$keyword);
       return $this->db->get('reservasi')->result_array();
   }

}

/* End of file Controllername.php */

?>