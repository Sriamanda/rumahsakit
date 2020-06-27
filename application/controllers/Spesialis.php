<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Spesialis extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MSpesialis');
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

	public function DataSpesialis()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$id_spesialis=$this->uri->segment(3);
			$tampil=$this->MSpesialis->GetDataWhere('id_spesialis',$id_spesialis)->row();
					$data['detail']['id_spesialis']= $tampil->id_spesialis;
            		$data['detail']['spesialis']= $tampil->spesialis;
            		$data['detail']['id_dokter']= $tampil->id_dokter;	
            		
			$data['content']='Spesialis/VFormUpdateSpesialis';
		}
		else
		{	
			$data['DataSpesialis']=$this->MSpesialis->GetData('tbl_spesialis');
			$data['content']='Spesialis/VSpesialis';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddSpesialis()
	{
		$data['content']='Spesialis/VFormAddSpesialis';
		$data['list_spesialis'] = $this->MSpesialis->list_spesialis();
		$this->load->view('VBackend',$data);
	}
	public function AddDataSpesialis()
	{
		 	 $add['id_spesialis']=$this->input->post('id_spesialis');
         	 $add['spesialis']= $this->input->post('spesialis');
         	 $add['id_dokter']= $this->input->post('id_dokter');
         	 $this->MSpesialis->AddData('tbl_spesialis',$add);
        	 redirect(site_url('Spesialis/DataSpesialis'));
	}



	public function UpdateDataSpesialis()
	{
		 $id_spesialis=$this->input->post('id_spesialis');
		 $update['spesialis']= $this->input->post('spesialis');
		 $update['id_dokter']= $this->input->post('id_dokter');
          	 $this->MSpesialis->UpdateData('tbl_spesialis','id_spesialis',$id_spesialis,$update);
		 redirect(site_url('Spesialis/DataSpesialis'));
	}


	public function DeleteDataSpesialis()
	{
		 $id_spesialis=$this->uri->segment('3');
        	 $this->MSpesialis->DeleteData('tbl_spesialis','id_spesialis',$id_spesialis);
        	 redirect(site_url('Spesialis/DataSpesialis'));
	}


}