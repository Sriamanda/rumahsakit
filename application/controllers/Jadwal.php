<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MJadwal');
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

	public function DataJadwal()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$id_jadwal=$this->uri->segment(3);
			$tampil=$this->MJadwal->GetDataWhere('id_jadwal',$id_jadwal)->row();
			$data['detail']['id_jadwal']= $tampil->id_jadwal;
            		$data['detail']['id_dokter']= $tampil->id_dokter;
            		$data['detail']['waktu']= $tampil->waktu;
            		$data['detail']['hari']= $tampil->hari;
            		
			$data['content']='Jadwal/VFormUpdateJadwal';
		}
		else
		{	
			$data['DataJadwal']=$this->MJadwal->GetData('tbl_jadwal');
			$data['content']='Jadwal/VJadwal';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddJadwal()
	{
		$data['content']='Jadwal/VFormAddJadwal';
		$data['list_jadwal'] = $this->MJadwal->list_jadwal();
		$this->load->view('VBackend',$data);
	}
	public function AddDataJadwal()
	{
		 	 $add['id_jadwal']=$this->input->post('id_jadwal');
         	 $add['id_dokter']= $this->input->post('id_dokter');
         	 $add['waktu']= $this->input->post('waktu');
         	 $add['hari']= $this->input->post('hari');  
        	 $this->MJadwal->AddData('tbl_jadwal',$add);
        	 redirect(site_url('Jadwal/DataJadwal'));
	}



	public function UpdateDataJadwal()
	{
		 $id_jadwal=$this->input->post('id_jadwal');
		 $update['id_dokter']= $this->input->post('id_dokter');
		 $update['waktu']= $this->input->post('waktu');
         	 $update['hari']= $this->input->post('hari');
          	 $this->MJadwal->UpdateData('tbl_jadwal','id_jadwal',$id_jadwal,$update);
		 redirect(site_url('Jadwal/DataJadwal'));
	}


	public function DeleteDataJadwal()
	{
		 $id_jadwal=$this->uri->segment('3');
        	 $this->MJadwal->DeleteData('tbl_jadwal','id_jadwal',$id_jadwal);
        	 redirect(site_url('Jadwal/DataJadwal'));
	}


}