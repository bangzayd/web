<div class="row">
    <div class="col-md-12">

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
					<?php echo $x2; ?>
        
   <hr/>
					<?php echo $x3; ?>


  <hr/>
					<?php echo $x9; ?>
            
            
            <hr/>
            
              
                <a data-toggle='tooltip' data-placement='top' title='Ubah' style='margin-right:5px' class='btn btn-success btn-sm' href='?page=ubah&id=<?php echo $x0; ?>'>
                            <i class='glyphicon glyphicon-edit'></i> Edit</a>
                <a href="sadmin"> <i class='glyphicon glyphicon-eye-close'></i> Back</a>
              
        
          
        
    </div> <!-- /.col -->

  