<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class hmsModel extends CI_Model{


    public function createpatient($data){
        $this->load->database();
        $this->db->insert('patient',$data);
       }
       public function deleteOne($data){

        $this->load->database();
        $this->db->delete('patient', $data); 
      }

      public function detail($data){

        $this->load->database();
        $sql = "SELECT * FROM patient WHERE pId like ? "; 
        $query= $this->db->query($sql, $data);
        return $query->result();
      
      }
      public function updateOne($data,$pId){

        $this->load->database();
        $this->db->where('pId', $pId);
        $this->db->update('patient', $data);

    }

}

?>