<!DOCTYPE html>
<html>
<head>
	<title>UTS PEMROGRAMAN WEB FRAMEWORK LANJUT</title>
	<center><h3>INPUT DATA MAHASISWA</h3></center>
	<div><center><?php echo $this->session->flashdata('berhasil');?></center></div>
  	<div><center><?php echo $this->session->flashdata('gagal');?></center></div>
</head>
<body>
	<center>
		<h3>
			<a href="<?php echo base_url('C_page/');?>">Kembali  </a> &nbsp; &nbsp;
		</h3>
	
	<table>
		<form action="<?php echo base_url('C_mhs/tambahmhs'); ?>" method="POST">
			<tr>
				<td>NIM</td>
				<td> : </td>
				<td><input type="text" name="nim" value="" required="" ></td>
			</tr>
			<tr>
				<td>Nama Mahasiswa</td>
				<td> : </td>
				<td><input type="text" name="nama" value="" required="" ></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td> : </td>
				<td>
					<select name="jekel">
						<option value="Laki-laki">Laki-laki</option>
						<option value="Perempuan">Perempuan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td> : </td>
				<td><input type="text" name="alamat" value="" required="" ></td>
			</tr>
			<tr>
				<td>No. Hp</td>
				<td> : </td>
				<td><input type="text" name="no_hp" value="" required="" ></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="Simpan" class="btn btn-primary"/><td>
			</tr>
		</form>
	</table>
	</center>
</body>
</html>
