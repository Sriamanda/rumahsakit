<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MSudi');
	}

	public function index()
	{
		if($this->session->userdata('Login'))
		{
			$data['content']='VBlank';
			$this->load->view('VBackend',$data);
		}
		else
		{
			 redirect(site_url('Login'));
		}

	}

	public function DataObat()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$id_obat=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_obat','id_obat',$id_obat)->row();
			$data['detail']['id_obat']= $tampil->id_obat;
            		$data['detail']['nama_obat']= $tampil->nama_obat;
            		$data['detail']['fungsi_obat']= $tampil->fungsi_obat;
			$data['content']='Obat/VFormUpdateObat';
		}
		else
		{	
			$data['DataObat']=$this->MSudi->GetData('tbl_obat');
			$data['content']='Obat/VObat';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddObat()
	{
		$data['content']='Obat/VFormAddObat';
		$this->load->view('VBackend',$data);
	}
	public function AddDataObat()
	{
		 $add['id_obat']=$this->input->post('id_obat');
         	 $add['nama_obat']= $this->input->post('nama_obat');
         	 $add['fungsi_obat']= $this->input->post('fungsi_obat');

        	 $this->MSudi->AddData('tbl_obat',$add);
        	 redirect(site_url('Obat/DataObat'));
	}



	public function UpdateDataObat()
	{
		 $id_obat=$this->input->post('id_obat');
         	 $update['nama_obat']= $this->input->post('nama_obat');
         	 $update['fungsi_obat']= $this->input->post('fungsi_obat');
          	 $this->MSudi->UpdateData('tbl_obat','id_obat',$id_obat,$update);
		 redirect(site_url('Obat/DataObat'));
	}


	public function DeleteDataObat()
	{
		 $id_obat=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('tbl_obat','id_obat',$id_obat);
        	 redirect(site_url('Obat/DataObat'));
	}


}