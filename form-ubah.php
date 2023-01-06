<div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h4>
          <i class="glyphicon glyphicon-edit"></i> 
          Change 
        </h4>
      </div> <!-- /.page-header -->
      <?php
      $x0 = $_GET['id'];

      if (isset($x0)) {
        // memanggil file siswa.php
        require_once 'model.php';
        
        // membuat objek siswa
        $siswa = new siswa();
        
        // mengambil data siswa
        $data = $siswa->get_siswa($x0);

        $x0 = $data['a0'];
        $x1 = $data['a1'];
        $x2 = $data['a2'];
        $x3 = $data['a3'];
        $x4 = implode(", ", ['a4']);
        $x4a = $data['a4'];
        $x5 = $data['a5'];
        $x6 = $data['a6'];
        $x7 = $data['a7'];
        $x8 = $data['a8'];
        $x9 = $data['a9'];  
      }
      ?>
      <div class="panel panel-default">
        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="proses-ubah">
            
            <div class="form-group">
              <label class="col-sm-2 control-label"></label>
              <div class="col-sm-2">
                <input type="hidden" class="form-control" name="a0" value="<?php echo $x0; ?>" readonly>
              </div>
            </div>



          

            <div class="form-group">
              <label class="col-sm-2 control-label">Name</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="a2" autocomplete="off" value="<?php echo $x2; ?>" required>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-sm-2 control-label">Description</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="a3" autocomplete="off" value="<?php echo $x3; ?>" required>
              </div>
            </div>


            <div class="form-group">
				<textarea class="ckeditor" id="ckeditor" name="a9" >
					<?php echo $x9; ?>
        </textarea>
            </div>
            
            <hr/>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-success btn-submit" name="simpan" value="Simpan">
                <a href="sadmin" class="btn btn-default btn-reset">Batal</a>
              </div>
            </div>
          </form>
        </div> <!-- /.panel-body -->
      </div> <!-- /.panel -->
    </div> <!-- /.col -->
  </div> <!-- /.row -->