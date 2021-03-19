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
        <h5 class="card-header">Edit Data Mahasiswa 
          <a href="<?php echo base_url('mahasiswa'); ?>" class="btn btn-sm btn-danger float-right">Kembali</a>
        </h5>
        <div class="card-body">
          <form class="form-signin" role="form" action="<?php echo base_url('mahasiswa/edit'); ?>" method="POST">
            <div class="form-group">
              <label>NIM</label>
              <input type="text" class="form-control" name="nim" value="<?php echo $mahasiswa[0]->nim; ?>" placeholder="NIM" readonly required autofocus>
            </div>
            <div class="form-group">
              <label>Nama Mahasiswa</label>
              <input type="text" class="form-control" name="nama" value="<?php echo $mahasiswa[0]->nama ?>" placeholder="Nama" required>
            </div>
            <div class="form-group">
              <label>Jurusan</label>
              <select class="form-control" name="jurusan">
                <?php foreach ($jurusan as $j){ ?>
                  <option value="<?php echo $j->id_jurusan; ?>" <?php if($mahasiswa[0]->id_jurusan==$j->id_jurusan) { echo 'selected'; } ?>><?php echo $j->nama_jurusan; ?></option>";
                <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <input type="text" class="form-control" name="alamat" value="<?php echo $mahasiswa[0]->alamat; ?>" placeholder="Alamat" required>
            </div>
            <button type="submit" name="submit" value="submit" class="btn btn-success">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
  


<!--   <?php echo form_open('mahasiswa/edit');?>
<?php echo form_hidden('nim',$mahasiswa[0]->nim);?>

<table>
    <tr><td>NIM</td><td><?php echo form_input('',$mahasiswa[0]->nim,"disabled");?></td></tr>
    <tr><td>NAMA</td><td><?php echo form_input('nama',$mahasiswa[0]->nama);?></td></tr>
    <tr><td>JURUSAN</td><td>
            <select name="jurusan">
            <?php
            foreach ($jurusan as $j){
                echo "<option value='$j->id_jurusan' ";
                echo $mahasiswa[0]->id_jurusan==$j->id_jurusan?'selected':'';
                echo ">$j->nama_jurusan</option>";
            }
            ?>
            </select>
        </td></tr>
    <tr><td>ALAMAT</td><td><?php echo form_input('alamat',$mahasiswa[0]->alamat);?></td></tr>
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('mahasiswa','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?> -->