<!DOCTYPE html>
<html>
<head>
    <title>Mahasiswa Baru</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<style>
  * {
			font-family: sans-serif;
		}

		body {
			padding: 0;
			margin: 0;
			line-height: 1;
		}

		th {
			border-bottom: 4px solid black;
			border-right: 1px solid black;
			padding: 14px 20px;
			background: #198754;
			color: white;
		}

		table tr:nth-child(2n+0) {
			background: #20c997;
			color: white;
		}

		/* laptop */
		@media (max-width : 1336px) {
			html {
				font-size: 75%;
			}

			.tabel-container {
				overflow-x: auto;
				overflow-y: auto;
				margin: 20px;
				padding: 10px;
			}

			.dtabel {
				font-family: sans-serif;
				color: black;
				border-collapse: collapse;
				table-layout: fixed;
				padding: 0;
				margin: 0;
			}

		}
</style>

<body>
<nav class="navbar navbar-dark bg-success">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>

<h2> <p class="text-center">Daftar Mahasiswa Baru 2023</p> </h2>
<div class="mx-auto p-4" style="width: 5;">
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Tambah</button>
</div>

<div class="mx-auto p-4" style="width: 5;">
<table class="table" border>
  <thead class="table-dark">
    
    <tr>
        <th>No</th>
        <th>Nim</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Fakultas</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>

</thead>
<?php
    $mahasiswa=$this->db->query("select * from mahasiswa_baru")->result_array();
    $no=1;
    foreach($mahasiswa as $row){
?>
<tr>
    <td><?=$no?></td>
    <td><?=$row['nim']?></td>
    <td><?=$row['nama']?></td>
    <td><?=$row['prodi']?></td>
    <td><?=$row['fakultas']?></td>
    <td><?=$row['alamat']?></td>
    
   <td >
    <?= anchor('Admin/hapus/'.$row['nim'],'<h1 class="btn btn-danger" onclick="jann()">hapus</h1>');?>
   </td>
   
<i class="fa fa-trash"></i></button>
</td>
</tr>
<?php
    $no++;
    }
?>
</table>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('Admin/tambah')?>" method="post"  enctype="multipart/form-data" role="form">
        <div class="form-group">
            <label for="nim" class="col-form-label">Nim</label>
            <input type="text" class="form-control" id="nim" name="nim">
          </div>

          <div class="form-group">
            <label for="nama" class="col-form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>
          <div class="form-group">
            <label for="prodi" class="col-form-label">Prodi</label>
            <input type="text" class="form-control" id="prodi" name="prodi">
          </div>
          <div class="form-group">
            <label for="fakultas" class="col-form-label">Fakultas</label>
            <input type="text" class="form-control" id="fakultas" name="fakultas">
          </div>
          <div class="form-group">
            <label for="alamat" class="col-form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat">

            <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan&nbsp;</button>
      </div>
          </div>
       
        </form>
      </div>
    
    </div>
  </div>
</div>
<script>
  function jann() {
 alert("hapus")

  }
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>