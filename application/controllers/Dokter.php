<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller {
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

	public function DataDokter()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$id_dokter=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_dokter','id_dokter',$id_dokter)->row();
			$data['detail']['id_dokter']= $tampil->id_dokter;
            		$data['detail']['nik']= $tampil->nik;
            		$data['detail']['nama_dokter']= $tampil->nama_dokter;
            		$data['detail']['jabatan']= $tampil->jabatan;
            		$data['detail']['spesialis']= $tampil->spesialis;
			$data['content']='Dokter/VFormUpdateDokter';
		}
		else
		{	
			$data['DataDokter']=$this->MSudi->GetData('tbl_dokter');
			$data['content']='Dokter/VDokter';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddDokter()
	{
		$data['content']='Dokter/VFormAddDokter';
		$this->load->view('VBackend',$data);
	}
	public function AddDataDokter()
	{
		 $add['id_dokter']=$this->input->post('id_dokter');
         	 $add['nik']= $this->input->post('nik');
         	 $add['nama_dokter']= $this->input->post('nama_dokter');
         	 $add['jabatan']= $this->input->post('jabatan');  
        	 $add['spesialis']= $this->input->post('spesialis'); 
        	 $this->MSudi->AddData('tbl_dokter',$add);
        	 redirect(site_url('Dokter/DataDokter'));
	}



	public function UpdateDataDokter()
	{
		 $id_dokter=$this->input->post('id_dokter');
		 $update['nik']= $this->input->post('nik');
         	 $update['nama_dokter']= $this->input->post('nama_dokter');
         	 $update['jabatan']= $this->input->post('jabatan');
         	 $update['spesialis']= $this->input->post('spesialis');
          	 $this->MSudi->UpdateData('tbl_dokter','id_dokter',$id_dokter,$update);
		 redirect(site_url('Dokter/DataDokter'));
	}


	public function DeleteDataDokter()
	{
		 $id_dokter=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('tbl_dokter','id_dokter',$id_dokter);
        	 redirect(site_url('Dokter/DataDokter'));
	}


}