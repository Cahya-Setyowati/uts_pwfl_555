  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>INFORMASI DATA MAHASISWA</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
            <div class="card-header">
              <!-- <h3 class="card-title">DataTable with minimal features & hover style</h3> -->
              <a class="btn btn-flat btn-primary btn-sm" href="<?php echo base_url('C_page/tambahmhs');?>">Tambah  </a> &nbsp; &nbsp;
			<a class="btn btn-flat btn-primary btn-sm" href="<?php echo base_url('C_page/riwayatmhs');?>">Log</a> &nbsp; &nbsp;
            </div>
            	<center>
		<h3>
			
		</h3>
	</center>
         <div class="card-body">
		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>No.</th>
					<th>NIM</th>
					<th>Nama Mhs</th>
					<th>Jenis Kelamin</th>
					<th>Alamat</th>
					<th>No. Hp</th>
					<th>Action</th>
				</tr>	
				<?php  $no = 1; foreach ($amhs as $itemmhs ) {?>
			</thead>
				<tr>
					<th><?php echo $no++; ?></th>
					<th><?php echo $itemmhs['nim']; ?></th>
					<th><?php echo $itemmhs['nama_mhs']; ?></th>
					<th><?php echo $itemmhs['jekel']; ?></th>
					<th><?php echo $itemmhs['alamat']; ?></th>
					<th><?php echo $itemmhs['no_hp']; ?></th>
					<td align="center">
                        <a class="btn btn-flat btn-danger btn-sm" href="<?php echo base_url('C_page/editmhs/').$itemmhs['id']; ?>">Edit</a>
                        <a class="btn btn-flat btn-warning btn-sm" href="<?php echo base_url('C_mhs/hapusmhs/').$itemmhs['id']; ?>" onclick="return confirm('Apakah Anda Yakin, Mau Menghapus data?')">Hapus</a>
                    </td>
				</tr>
			<?php  } ?>
		</table>
	</div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
