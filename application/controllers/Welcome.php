<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->data['hasil']=$this->model_crud->getUser('perpus');
		$this->load->view('welcome_message', $this->data);
	}
	
	public function form_input(){
		$this->load->view('form-input');
	}
	
	public function insert(){
		$id=$_POST['id'];
		$judul=$_POST['judul'];
		$kategori=$_POST['kategori'];
		$penulis=$_POST['penulis'];
		$penerbit=$_POST['penerbit'];
		$tahun=$_POST['tahun'];
		$jumlah=$_POST['jumlah'];
		$data=array('id'=>$id,'judul'=>$judul,'kategori'=>$kategori,
		'penulis'=>$penulis,'penerbit'=>$penerbit,'tahun'=>$tahun,
		'jumlah'=>$jumlah); 
		$tambah=$this->model_crud->tambahData('perpus',$data);
		
		if($tambah>0) {
			redirect('welcome/index'); }
			else {
				echo 'Data gagal disimpan'; }
	}
	
	public function delete($id){
		$hapus=$this->model_crud->hapusData('perpus',$id);
		if($hapus>0) {
			redirect('welcome/index'); }
			else {
				echo 'Data gagal disimpan'; }
	}
	
	public function form_edit($id){
		$this->data['dataEdit']=$this->model_crud->dataEdit('perpus',$id);
		$this->load->view('form-edit',$this->data);
	}
	
	public function update($id){
		$id=$_POST['id'];
		$judul=$_POST['judul'];
		$kategori=$_POST['kategori'];
		$penulis=$_POST['penulis'];
		$penerbit=$_POST['penerbit'];
		$tahun=$_POST['tahun'];
		$jumlah=$_POST['jumlah'];
		$data=array('id'=>$id,'judul'=>$judul,'kategori'=>$kategori,
		'penulis'=>$penulis,'penerbit'=>$penerbit,'tahun'=>$tahun,
		'jumlah'=>$jumlah); 
		$edit=$this->model_crud->editData('perpus',$data,$id);
		
		if($edit>0) {
			redirect('welcome/index'); }
			else {
				echo 'Data gagal disimpan'; }
	}
}
