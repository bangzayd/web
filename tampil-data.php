

  <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h4>
          <i class="glyphicon glyphicon-user"></i> Anda Login sebagai : <?php echo $_SESSION['username']; ?> | <a href="logout">Log Out</a>
          
          
          <a class="btn btn-success pull-right" href="?page=tambah">
            <i class="glyphicon glyphicon-plus"></i> Tambah
          </a>
        </h4>
      </div>

  <?php  
  if (empty($_GET['alert'])) {
    echo "";
  } elseif ($_GET['alert'] == 1) {
    echo "<div class='alert alert-danger alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='glyphicon glyphicon-alert'></i> Gagal!</strong> Terjadi kesalahan.
          </div>";
  } elseif ($_GET['alert'] == 2) {
    echo "<div class='alert alert-success alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Data berhasil disimpan.
          </div>";
  } elseif ($_GET['alert'] == 3) {
    echo "<div class='alert alert-success alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Data berhasil diubah.
          </div>";
  } elseif ($_GET['alert'] == 4) {
    echo "<div class='alert alert-success alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Data berhasil dihapus.
          </div>";
  }
  ?>

      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Note List</h3>
        </div>
        <div class="panel-body">
          <table class="table table-striped table-hover" id="dataTables-example">
            <thead>
              <tr>
                <th>No.</th>
                <th>Title</th>
                <th>Desc</th>
                <th>Aksi</th>
              </tr>
            </thead>   

            <tbody>
            <?php
            // memanggil file siswa.php
            require_once 'model.php';
            
            // membuat objek siswa
            $siswa = new siswa();
            
            // mengambil seluruh data siswa
            $result = $siswa->view();

            $no = 1;

            if (!empty($result)) { 
              foreach($result as $data) {

               


                echo "  <tr>
                      <td>$no</td>
                      <td><a href='?page=lihat&id=$data[a0]'><b>$data[a2]</b></a></td>
                      <td>$data[a3]</td>
                      <td>
                        <div class=''>
                          <a data-toggle='tooltip' data-placement='top' title='Ubah' style='margin-right:5px' class='btn btn-success btn-sm' href='?page=ubah&id=$data[a0]'>
                            <i class='glyphicon glyphicon-edit'></i>
                          </a>
<a data-toggle='tooltip' data-placement='top' title='Lihat' style='margin-right:5px' class='btn btn-success btn-sm' href='?page=lihat&id=$data[a0]'>
                            <i class='glyphicon glyphicon-eye-open'></i>
                          </a>";
            ?>
                          <a data-toggle="tooltip" data-placement="top" title="Hapus" class="btn btn-danger btn-sm" href="proses-hapus?id=<?php echo $data['a0'];?>" onclick="return confirm('Anda yakin ingin menghapus data ini<?php echo $data['a1']; ?>?');">
                            <i class="glyphicon glyphicon-trash"></i>
                          </a>
            <?php
                echo "
                        </div>
                      </td>
                    </tr>";
                $no++;
              }
            }
            ?>
            </tbody>           
          </table>
        </div>
      </div> <!-- /.panel -->
    </div> <!-- /.col -->
  </div> <!-- /.row -->
