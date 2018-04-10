<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Assemble of Books!</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1  class="display-3">Tambah Data Baru</h1>

	<div id="body">
		<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Input</li>
			<li class="breadcrumb-item" ><a href="#">Edit</a></li>
		</ol>
		</nav>
		
	
		
		<button type="button" class="btn btn-outline-danger"><a href="<?php echo site_url('welcome/index')?>">Kembali</a></button><br>
		<br>
		<form action="<?php echo site_url('welcome/insert')?>" method="POST">
			<div class="form-group">
				<label for="id">ID Buku</label>
				<input type="text" class="form-control" name="id">
			</div>
			<div class="form-group">
				<label for="id">Judul Buku</label>
				<input type="text" class="form-control" name="judul">
			</div>
			<div class="form-group">
				<label for="id">Kategori</label>
				<input type="text" class="form-control" name="kategori">
			</div>
			<div class="form-group">
				<label for="id">Penulis</label>
				<input type="text" class="form-control" name="penulis">
			</div>
			<div class="form-group">
				<label for="id">Penerbit</label>
				<input type="text" class="form-control" name="penerbit">
			</div>
			<div class="form-group">
				<label for="id">Tahun</label>
				<input type="text" class="form-control" name="tahun">
			</div>
			<div class="form-group">
				<label for="id">Jumlah</label>
				<input type="text" class="form-control" name="jumlah">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-success" name="simpan" >Simpan</button>
			</div>
		</form>
	

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>

