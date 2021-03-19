<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8"/>
  <title>Mokhammad Iqbal - 19.01.63.0004 - Web Service</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Tim IT RSUP Dr Kariadi"/>
  <meta name="keywords" content="Tim IT RSUP Dr Kariadi"/>
  <meta name="description" content="RSUP Dr. Kariadi"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>

</head>
<body>
  <br>
  <div clas="row">
    <div class="col-md-12">
      <div class="card">
        <h5 class="card-header">Tambah Data Mahasiswa 
          <a href="<?php echo base_url('mahasiswa'); ?>" class="btn btn-sm btn-danger float-right">Kembali</a>
        </h5>
        <div class="card-body">
          <form class="form-signin" role="form" action="<?php echo base_url('mahasiswa/create'); ?>" method="POST">
            <div class="form-group">
              <label>NIM</label>
              <input type="text" class="form-control" name="nim" value="<?php echo set_value('nim') ?>" placeholder="NIM" required autofocus>
            </div>
            <div class="form-group">
              <label>Nama Mahasiswa</label>
              <input type="text" class="form-control" name="nama" value="<?php echo set_value('nama') ?>" placeholder="Nama" required>
            </div>
            <div class="form-group">
              <label>Jurusan</label>
              <select class="form-control" name="jurusan">
                <?php
                foreach ($jurusan as $j){
                  echo "<option value='$j->id_jurusan'>$j->nama_jurusan</option>";
                }
                ?>
              </select>
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <input type="text" class="form-control" name="alamat" value="<?php echo set_value('alamat') ?>" placeholder="Alamat" required>
            </div>
            <button type="submit" name="submit" value="submit" class="btn btn-success">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
