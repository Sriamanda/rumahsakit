<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uang extends CI_Controller {
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

	public function DataUang()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$id_uang=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_uang','id_uang',$id_uang)->row();
			$data['detail']['id_uang']= $tampil->id_uang;
            		$data['detail']['penghasilan']= $tampil->penghasilan;
            		$data['detail']['pengeluaran']= $tampil->pengeluaran;
            		$data['detail']['waktu']= $tampil->waktu;
			$data['content']='Uang/VFormUpdateUang';
		}
		else
		{	
			$data['DataUang']=$this->MSudi->GetData('tbl_uang');
			$data['content']='Uang/VUang';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddUang()
	{
		$data['content']='Uang/VFormAddUang';
		$this->load->view('VBackend',$data);
	}
	public function AddDataUang()
	{
		 $add['id_uang']=$this->input->post('id_uang');
         	 $add['penghasilan']= $this->input->post('penghasilan');
         	 $add['pengeluaran']= $this->input->post('pengeluaran');
         	 $add['waktu']= $this->input->post('waktu');   
        	 $this->MSudi->AddData('tbl_uang',$add);
        	 redirect(site_url('Uang/DataUang'));
	}



	public function UpdateDataUang()
	{
		 $id_uang=$this->input->post('id_uang');
		 $update['penghasilan']= $this->input->post('penghasilan');
         	 $update['pengeluaran']= $this->input->post('pengeluaran');
         	 $update['waktu']= $this->input->post('waktu');
          	 $this->MSudi->UpdateData('tbl_uang','id_uang',$id_uang,$update);
		 redirect(site_url('Uang/DataUang'));
	}


	public function DeleteDataUang()
	{
		 $id_uang=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('tbl_uang','id_uang',$id_uang);
        	 redirect(site_url('Uang/DataUang'));
	}


}