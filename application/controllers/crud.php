<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crud extends CI_Controller {

	public function index(){
		$data=$this->mymodel->Getmhs();
		$this->load->view('tabel',array('data' => $data));
	}

	public function add_data(){
		$this->load->view('form_add');
	}

	public function do_insert(){
		$NIM = $_POST['NIM'];
		$Nama = $_POST['Nama'];
		$Alamat = $_POST['Alamat'];
		$data_insert = array(
			'NIM' => $NIM,
			'Nama' => $Nama,
			'Alamat' => $Alamat,
			);
		$res = $this->mymodel->InsertData('mhs',$data_insert);
		if ($res>=1) {
			redirect('crud/index');
		}else{
			echo "<h2> Insert Gagal</h2>";
		}
			
	}

	public function edit_data($NIM){
		$mhs1 = $this->mymodel->GetMhs("where NIM = '$NIM'");
		$data = array(
			"NIM" => $mhs1[0]['NIM'],
			"Nama" => $mhs1[0]['Nama'],
			"Alamat" => $mhs1[0]['Alamat'],
			);
		$this->load->view('form_edit',$data);
	}

	public function do_update(){
		$NIM = $_POST['NIM'];
		$Nama = $_POST['Nama'];
		$Alamat = $_POST['Alamat'];
		$data_update = array(
			'Nama' => $Nama,
			'Alamat' => $Alamat,
			);
		$where = array('NIM' => $NIM);
		$res = $this->mymodel->UpdateData('mhs',$data_update,$where);
		if ($res>=1) {
			redirect('crud/index');
		}
	} 	

	public function do_delete($NIM){
		$where = array('NIM' => $NIM);
		$res =$this->mymodel->DeleteData('mhs',$where);
		if($res>=1){
			redirect('crud/index');
		}
	}
}

