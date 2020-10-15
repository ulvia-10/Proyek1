<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class kepegawaian_model extends CI_Model {
        
        public function getAllpegawai()
        {
            return $this->db->get('kepegawaian')->result_array();
        }

        public function tambahdatakpw(){
            $data=[
            "Nama_pegawai"=>$this->input->post('nama',true),
            "NIP"=>$this->input->post('nip',true),
            "Alamat_pegawai"=>$this->input->post('alamat',true),
            "Tempat_lahir"=>$this->input->post('tempat',true),
            "Tanggal_lahir"=>$this->input->post('tanggal',true),
            "Golongan"=>$this->input->post('golongan',true),
            "Status_pegawai"=>$this->input->post('status',true)
            ];
            $this->db->insert('kepegawaian', $data);
        }
    
        public function getpegawaiByID($id)
        {
            $query = $this->db->get_where('kepegawaian', array('id'=>$id));
            return $query->row_array();
        }

        public function ubahdatapegawai(){
            $data = [
                "Nama_pegawai" => $this->input->post('nama', true),
                "NIP" => $this->input->post('nip', true),
                "Alamat_pegawai" => $this->input->post('alamat', true),
                "Tempat_lahir"=>$this->input->post('tempat',true),
                "Tanggal_lahir"=>$this->input->post('tanggal',true),
                "Golongan"=>$this->input->post('golongan',true),
                "Status_pegawai"=>$this->input->post('status',true)
                ];
            $this->db->where('Id', $this->input->post('id'));
            $this->db->update('kepegawaian', $data);
        }    

        public function cariDataPegawai(){
            $keyword=$this->input->post('keyword');
            $this->db->like('Nama_pegawai',$keyword);
            $this->db->or_like('NIP',$keyword);
            $this->db->or_like('Alamat_pegawai',$keyword);
            return $this->db->get('kepegawaian')->result_array();
        }

        public function hapusdatakpw($id){
            $this->db->where('Id',$id);
            $this->db->delete('kepegawaian');
    
            redirect('admin/pegawai','refresh');
        }

        public function datatabels(){
            $query = $this->db->order_by('id', 'ASC')->get('kepegawaian');
            return $query->result(); 
        }

        public function datatabelsUserReg(){
            $register = 0;
            $query = $this->db->order_by('id','DESC')->get_where('user_pegawai',array('Status' => $register));
            return $query->result();
        }

        public function datatabelsUserUnreg(){
            $register = 1;
            $query = $this->db->order_by('id','DESC')->get_where('user_pegawai',array('Status' => $register));
            return $query->result();
        }

        public function ubahStatus(){
            $data = [
                "Status" => $this->input->post("Status",true)
            ];
            $this->db->where('id',$this->input->post('id'));
            $this->db->update('user_pegawai');

        }

        public function register(){
            $data = [
                "Username" => $this->input->post("username",true),
                "Email" => $this->input->post("email",true),
                "Password" => $this->input->post("password",true),
                "Status" => 0,
                "Level" => 'Pegawai'
            ];
            $this->db->insert('user_pegawai');
        }
    }
    
    /* End of file kepegawaian_model.php */  
?>