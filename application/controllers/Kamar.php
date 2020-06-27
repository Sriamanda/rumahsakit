<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MKamar');
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

	public function DataKamar()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$id_kamar=$this->uri->segment(3);
			$tampil=$this->MKamar->GetDataWhere('id_kamar',$id_kamar)->row();
			$data['detail']['id_kamar']= $tampil->id_kamar;
            		$data['detail']['id_pasien']= $tampil->id_pasien;
            		$data['detail']['nama_kamar']= $tampil->nama_kamar;
            		
			$data['content']='Kamar/VFormUpdateKamar';
		}
		else
		{	
			$data['DataKamar']=$this->MKamar->GetData('tbl_Kamar');
			$data['content']='Kamar/VKamar';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddKamar()
	{
		$data['content']='Kamar/VFormAddKamar';
		$data['list_Kamar'] = $this->MKamar->list_Kamar();
		$this->load->view('VBackend',$data);
	}
	public function AddDataKamar()
	{
		 	 $add['id_kamar']=$this->input->post('id_kamar');
         	 $add['id_pasien']= $this->input->post('id_pasien');
         	 $add['nama_kamar']= $this->input->post('nama_kamar');
        	 $this->MKamar->AddData('tbl_Kamar',$add);
        	 redirect(site_url('Kamar/DataKamar'));
	}



	public function UpdateDataKamar()
	{
		 $id_kamar=$this->input->post('id_kamar');
		 $update['id_pasien']= $this->input->post('id_pasien');
		 $update['nama_kamar']= $this->input->post('nama_kamar');
          	 $this->MKamar->UpdateData('tbl_Kamar','id_kamar',$id_kamar,$update);
		 redirect(site_url('Kamar/DataKamar'));
	}


	public function DeleteDataKamar()
	{
		 $id_kamar=$this->uri->segment('3');
        	 $this->MKamar->DeleteData('tbl_Kamar','id_kamar',$id_kamar);
        	 redirect(site_url('Kamar/DataKamar'));
	}


}