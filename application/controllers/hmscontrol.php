<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hmscontrol extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        }


    public function test(){

        redirect(base_url().'hms/index.php');
    
        }
    
    public function create(){

        $this->load->model("hmsModel");

        $pId  =  $this->input->post('pId');
        $pFirstName = $this->input->post('pFirstName');
        $pLastName = $this->input->post('pLastName');
        $dob =$this->input->post('dob');
        $gender=$this->input->post('gender');
        $email=$this->input->post('email');
        $contact=$this->input->post('contact');
        $address=$this->input->post('address');
        $complaint=$this->input->post('complaint');
        $healthCondition=$this->input->post('healthCondition');
        $allergies=$this->input->post('allergies');

        $data = array(

            "pId" => $pId,
            "pFirstName"=>$pFirstName,
            "pLastName"=>$pLastName,
            "dob"=>$dob,
            "gender"=>$gender,
            "email"=>$email,
            "contact"=>$contact,
            "address"=>$address,
            "complaint"=> $complaint,
            "healthConditions"=>$healthCondition,
            "allergies"=>$allergies
           
       );

        $this->hmsModel->createpatient($data);
        redirect(base_url().'hms/index.php');
       

    }
    public function detail(){

        $this->load->model("hmsModel");
        $pId  =  $this->input->get('pId');
        #readfile("hms/detail.php");
        
        $data = array(

            "pId"  =>  $pId
            
       );
        $data['m']=$this->hmsModel->detail($data);
        $this->load->view('detail',$data);
        
    }
    public function fedit(){

        $this->load->model("hmsModel");
        $pId  =  $this->input->get('pId');
        
        $data = array(

            "pId"  =>  $pId
            
       );

        $data['m']=$this->hmsModel->detail($data);
        $this->load->view('edit',$data);
    }

    public function editOne(){
        $this->load->model("hmsModel");

        $pId  =  $this->input->post('pId');
        $pFirstName = $this->input->post('pFirstName');
        $pLastName = $this->input->post('pLastName');
        $dob =$this->input->post('dob');
        $gender=$this->input->post('gender');
        $email=$this->input->post('email');
        $contact=$this->input->post('contact');
        $address=$this->input->post('address');
        $complaint=$this->input->post('complaint');
        $healthCondition=$this->input->post('healthCondition');
        $allergies=$this->input->post('allergies');

        $data = array(

         
            "pFirstName"=>$pFirstName,
            "pLastName"=>$pLastName,
            "dob"=>$dob,
            "gender"=>$gender,
            "email"=>$email,
            "contact"=>$contact,
            "address"=>$address,
            "complaint"=> $complaint,
            "healthConditions"=>$healthCondition,
            "allergies"=>$allergies
           
       );

        $this->hmsModel->updateOne($data,$pId);
        redirect(base_url().'hms/index.php');
    }


    public function deleteOne(){

        $this->load->model("hmsModel");
        $pId  =  $this->input->get('pId');

       
        $data = array(

            "pId"=>$pId
            
       );
       $this->hmsModel->deleteOne($data);
       redirect(base_url().'hms/index.php');
       #echo 'ok, deleted...'.$pId;
    }
}
?>