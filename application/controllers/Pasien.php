<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {
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

	public function DataPasien()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$id_pasien=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_pasien','id_pasien',$id_pasien)->row();
			$data['detail']['id_pasien']= $tampil->id_pasien;
            		$data['detail']['nik']= $tampil->nik;
            		$data['detail']['nama_pasien']= $tampil->nama_pasien;
            		$data['detail']['penyakit']= $tampil->penyakit;
            		$data['detail']['alamat']= $tampil->alamat;
			$data['content']='Pasien/VFormUpdatePasien';
		}
		else
		{	
			$data['DataPasien']=$this->MSudi->GetData('tbl_pasien');
			$data['content']='Pasien/VPasien';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddPasien()
	{
		$data['content']='Pasien/VFormAddPasien';
		$this->load->view('VBackend',$data);
	}
	public function AddDataPasien()
	{
		 $add['id_pasien']=$this->input->post('id_pasien');
         	 $add['nik']= $this->input->post('nik');
         	 $add['nama_pasien']= $this->input->post('nama_pasien');
         	 $add['alamat']= $this->input->post('alamat');  
         	 $add['penyakit']= $this->input->post('penyakit');  
        	 $this->MSudi->AddData('tbl_pasien',$add);
        	 redirect(site_url('Pasien/DataPasien'));
	}



	public function UpdateDataPasien()
	{
		 $id_pasien=$this->input->post('id_pasien');
		 $update['nik']= $this->input->post('nik');
         	 $update['nama_pasien']= $this->input->post('nama_pasien');
         	 $update['alamat']= $this->input->post('alamat');
         	 $update['penyakit']= $this->input->post('penyakit'); 
          	 $this->MSudi->UpdateData('tbl_pasien','id_pasien',$id_pasien,$update);
		 redirect(site_url('Pasien/DataPasien'));
	}


	public function DeleteDataPasien()
	{
		 $id_pasien=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('tbl_pasien','id_pasien',$id_pasien);
        	 redirect(site_url('Pasien/DataPasien'));
	}


}