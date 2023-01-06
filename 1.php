<?php include"koneksi.php";?>
<?PHP
if (isset($_SESSION['username'])&&(isset($_SESSION['level']))){
?>

<?php include"up.php";?>
  






    <div class="container-fluid">
      <?php
      if (empty($_GET["page"])) {
        include "tampil-data.php";
      } elseif ($_GET['page'] == 'tambah') {
        include "form-tambah.php";
      } elseif ($_GET['page'] == 'ubah') {
        include "form-ubah.php";
      }
elseif ($_GET['page'] == 'lihat') {
        include "lihat.php";
      } 
      ?>
    </div> <!-- /.container-fluid -->
    


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/bootstrap-hijri-datetimepickermin.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-datepicker.min.js"></script>
    <!-- DataTables -->
    <script src="assets/js/dataTables/js/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/js/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/js/dataTables.bootstrap.js"></script>

    <script type="text/javascript">
      $(function () {

        //datepicker plugin
        $('.date-picker').datepicker({
          autoclose: true,
          todayHighlight: true
        });

        // toolip
        $('[data-toggle="tooltip"]').tooltip();

        $('#dataTables-example').dataTable( {
            "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
            "pageLength": 10
        } );
      })
    </script>

<script type="text/javascript">

<script>
  var editor=CKEDITOR.replace( 'editor1',{
    extraPlugins : 'filebrowser',
    filebrowserBrowseUrl:'browser.php?type=Images',
    filebrowserUploadMethod:"form",
    filebrowserUploadUrl:"upload.php"
  });
</script>










<?php include"down.php";?>

<?php } ?>