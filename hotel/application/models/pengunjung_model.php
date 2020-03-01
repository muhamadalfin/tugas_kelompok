<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class pengunjung_model extends CI_Model {

   public function getAllpengunjung(){
       //$query=$this->db->get('mahasiswa');
       //return $query ->result_array();
       return $this->db->get('pengunjung')->result_array();
   }

   public function tambahdatapj(){
       $data=[
            "nama"=> $this->input->post('nama',true),
            "ktp"=> $this->input->post('ktp',true),
            "tlp"=> $this->input->post('tlp',true),
            "alamat"=> $this->input->post('alamat',true),
       ];
       $this->db->insert('pengunjung',$data);
   }

   public function hapusdatapj($id_pengunjung){
       $this->db->where('id_pengunjung',$id_pengunjung);
       $this->db->delete('pengunjung');
   }

   public function getpengunjungByID($id_pengunjung){
       return $this->db->get_where('pengunjung',['id_pengunjung'=>$id_pengunjung])->row_array();
   }

   public function ubahdatapj(){
        $data=[
            "nama"=> $this->input->post('nama',true),
            "ktp"=> $this->input->post('ktp',true),
            "tlp"=> $this->input->post('tlp',true),
            "alamat"=> $this->input->post('alamat',true),
        ];
        $this->db->where('id_pengunjung',$this->input->post('id_pengunjung'));
        $this->db->update('pengunjung',$data);
   }

   public function cariDataPengunjung(){
       $keyword=$this->input->post('keyword');
       $this->db->like('nama',$keyword);
       $this->db->or_like('ktp',$keyword);
       return $this->db->get('pengunjung')->result_array();
   }

}

/* End of file Controllername.php */

?>