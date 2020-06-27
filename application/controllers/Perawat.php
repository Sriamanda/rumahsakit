<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perawat extends CI_Controller {
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

	public function DataPerawat()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$id_perawat=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_perawat','id_perawat',$id_perawat)->row();
			$data['detail']['id_perawat']= $tampil->id_perawat;
            		$data['detail']['nik']= $tampil->nik;
            		$data['detail']['nama_perawat']= $tampil->nama_perawat;
            		$data['detail']['jabatan']= $tampil->jabatan;
            		$data['detail']['alamat']= $tampil->alamat;
			$data['content']='Perawat/VFormUpdatePerawat';
		}
		else
		{	
			$data['DataPerawat']=$this->MSudi->GetData('tbl_perawat');
			$data['content']='Perawat/VPerawat';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddPerawat()
	{
		$data['content']='Perawat/VFormAddPerawat';
		$this->load->view('VBackend',$data);
	}
	public function AddDataPerawat()
	{
		 $add['id_perawat']=$this->input->post('id_perawat');
         	 $add['nik']= $this->input->post('nik');
         	 $add['nama_perawat']= $this->input->post('nama_perawat');
         	 $add['jabatan']= $this->input->post('jabatan');  
         	 $add['alamat']= $this->input->post('alamat');  
        	 $this->MSudi->AddData('tbl_perawat',$add);
        	 redirect(site_url('Perawat/DataPerawat'));
	}



	public function UpdateDataPerawat()
	{
		 $id_perawat=$this->input->post('id_perawat');
		 $update['nik']= $this->input->post('nik');
         	 $update['nama_perawat']= $this->input->post('nama_perawat');
         	 $update['jabatan']= $this->input->post('jabatan');
         	 $update['alamat']= $this->input->post('alamat'); 
          	 $this->MSudi->UpdateData('tbl_perawat','id_perawat',$id_perawat,$update);
		 redirect(site_url('Perawat/DataPerawat'));
	}


	public function DeleteDataPerawat()
	{
		 $id_perawat=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('tbl_perawat','id_perawat',$id_perawat);
        	 redirect(site_url('Perawat/DataPerawat'));
	}


}