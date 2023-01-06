<div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h4>
          <i class="glyphicon glyphicon-edit"></i> 
          Input
        </h4>
      </div> <!-- /.page-header -->

      <div class="panel panel-default">
        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="proses-simpan">

          <div class="form-group">
              <label class="col-sm-2 control-label">Title</label>
              <div class="col-sm-3">
                <input type="text" value="-" class="form-control" name="a2" autocomplete="off" required>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-sm-2 control-label">Desc</label>
              <div class="col-sm-3">
                <input type="text" value="-" class="form-control" name="a3" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
								<textarea class="ckeditor" id="ckeditor" name="a9"></textarea>
            </div>

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