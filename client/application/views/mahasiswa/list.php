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
        <h5 class="card-header">List Mahasiswa <a href="<?php echo base_url('mahasiswa/create'); ?>" class="btn btn-sm btn-success float-right">Tambah Data</a></h5>
        <div class="card-body">
          <center><?php echo $this->session->flashdata('hasil'); ?></center>
          <div class="table-responsive">
            <table id="myTable" class="table table-hover">
              <tr>
                <th>NIM</th>
                <th>NAMA</th>
                <th>ID JURUSAN</th>
                <th>ALAMAT</th>
                <th>AKSI</th>
              </tr>
              <?php
              foreach ($mahasiswa as $m){
                echo "<tr>
                <td>$m->nim</td>
                <td>$m->nama</td>
                <td>$m->id_jurusan</td>
                <td>$m->alamat</td>
                <td>
                <a href='".base_url('mahasiswa/edit/').$m->nim."' class='btn btn-sm btn-warning'>Edit</a> 
                <a href='".base_url('mahasiswa/delete/').$m->nim."' class='btn btn-sm btn-danger'>Delete</a>
                </td>
                </tr>";
              }
              ?>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    $(document).ready( function () {
      $('#myTable').DataTable();
    } );
  </script>
</body>
</html>
