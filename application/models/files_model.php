<?php

class Files_model extends CI_Model{

    public function tampil_data($table){

        return $this->db->get($table);
    }

    public function insert_data($data,$table){
 
        $this->db->insert($table,$data);
    }

    public function ambil_id_files($id){
 
        $result=$this->db->where('id_files',$id)->get('tb_files');
        if($result->num_rows() > 0){
            return $result->result();
        }else{
            return false;
        }
    }

    public function update_data($where,$data,$table){

		$this->db->where($where);
		$this->db->update($table,$data);
	}

    public function hapus_data($where,$table){

		$this->db->where($where);
		$this->db->delete($table);
	}

    public function cariData(){

		$cari = $this->input->GET('search', TRUE);
        $data = $this->db->query("SELECT * from tb_files where nama_files like '%$cari%' ");
        return $data->result();
	}
    
}