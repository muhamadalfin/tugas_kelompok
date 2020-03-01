<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class kamar_model extends CI_Model {

   public function getAllkamar(){
       return $this->db->get('kamar')->result_array();
   }

   public function tambahdatakm(){
       $data=[
            "nokamar"=> $this->input->post('no_kamar',true),
            "type"=> $this->input->post('type',true),
            "harga"=> $this->input->post('harga',true),
       ];
       $this->db->insert('kamar',$data);
   }

   public function hapusdatamkm($id_kamar){
       $this->db->where('id_kamar',$id_kamar);
       $this->db->delete('kamar');
   }

   public function getkamarByID($id_kamar){
       return $this->db->get_where('kamar',['id_kamar'=>$id_kamar])->row_array();
   }

   public function ubahdatakm(){
        $data=[
            "no_kamar"=> $this->input->post('no_kamar',true),
            "type"=> $this->input->post('type',true),
            "harga"=> $this->input->post('harga',true),
        ];
        $this->db->where('id_kamar',$this->input->post('id_kamar'));
        $this->db->update('kamar',$data);
   }

   public function cariDatakamar(){
       $keyword=$this->input->post('keyword');
       $this->db->like('no_kamar',$keyword);
       $this->db->or_like('type',$keyword);
       return $this->db->get('kamar')->result_array();
   }

   public function booking(){
    $data=[
        "name"=> $this->input->post('name',true),
        "ktp"=> $this->input->post('ktp',true),
        "tlp"=> $this->input->post('tlp',true),
        "alamat"=> $this->input->post('alamat',true),
    ];
    $this->db->insert('pengunjung',$data);
    
    $this->db->select('id_pengunjung');
    $this->db->form('pengunjung');
    $this->db->where('nama', 'name');
    
    $query = $this->db->get();

    $data2=[
    $query => $this->input->post('id_pengunjung',true),
    "id_kamar"=> $this->input->post('id_kamar',true),
    $this->db->set('tgl_masuk', $now),
    ];
    $this->db->insert('reservasi',$data2);
    }

    public function booked(){
        $data=[
            "name"=> $this->input->post('name',true),
            "ktp"=> $this->input->post('ktp',true),
            "tlp"=> $this->input->post('tlp',true),
            "alamat"=> $this->input->post('alamat',true),
        ];
        $this->db->insert('pengunjung',$data);
        
        $this->db->select('id_pengunjung');
        $this->db->form('pengunjung');
        $this->db->where('nama', 'name');
        
        $query = $this->db->get();
    
        $data2=[
        $query => $this->input->post('id_pengunjung',true),
        "id_kamar"=> $this->input->post('id_kamar',true),
        $this->db->set('tgl_masuk', $now),
        ];
        $this->db->insert('reservasi',$data2);
    }

}


?>