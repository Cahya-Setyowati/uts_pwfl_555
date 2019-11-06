<!DOCTYPE html>
<html>
<head>
	<title>UTS PEMROGRAMAN WEB FRAMEWORK LANJUT</title>
	<center><h3>EDIT DATA MAHASISWA</h3></center>
	<div><center><?php echo $this->session->flashdata('berhasil');?></center></div>
  	<div><center><?php echo $this->session->flashdata('gagal');?></center></div>
</head>
<body>
	<center>
		<h3>
			<a href="<?php echo base_url('C_page/');?>">Kembali  </a> &nbsp; &nbsp;
		</h3>
	
<?php foreach ($aamhs as $itemmhs ) {?>
	<table>

		<form action="<?php echo base_url('C_mhs/editmhs'); ?>" method="POST">
			<tr>
				<input type="hidden" value="<?php echo $itemmhs['id']; ?>" name="id"></input>
			</tr>
			<tr>
				<td>NIM</td>
				<td> : </td>
				<td><input type="text" name="nim" value="<?php echo $itemmhs['nim']; ?>" required="" ></td>
			</tr>
			<tr>
				<td>Nama Mahasiswa</td>
				<td> : </td>
				<td><input type="text" name="nama" value="<?php echo $itemmhs['nama_mhs']; ?>" required="" ></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td> : </td>
				<td>
					<select name="jekel">
						<option value="Laki-laki" <?php echo $itemmhs['jekel'] == 'Laki-laki'?'selected':''?> >Laki-laki</option>
						<option value="Perempuan" <?php echo $itemmhs['jekel'] == 'Perempuan'?'selected':''?> >Perempuan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td> : </td>
				<td><input type="text" name="alamat" value="<?php echo $itemmhs['alamat']; ?>" required="" ></td>
			</tr>
			<tr>
				<td>No. Hp</td>
				<td> : </td>
				<td><input type="text" name="no_hp" value="<?php echo $itemmhs['no_hp']; ?>" required="" ></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="Update" class="btn btn-primary"/><td>
			</tr>
		</form>
		<?php  } ?>
	</table>
	</center>
</body>
</html>
