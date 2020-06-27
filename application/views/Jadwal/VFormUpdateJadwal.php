<!-- Main content -->
<form action="<?php echo site_url('Jadwal/UpdateDataJadwal'); ?>" method="post">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
<section class="content-header">
          <h1>
            Update Jadwal    <small>Rumah Sakit</small>
          </h1>
</section>

            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title"></h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
                  
                   <div class="form-group">
                    <label></label>
                    <br>
                    <input type="hidden" name="id_jadwal" value="<?php echo $detail['id_jadwal']; ?>">
                    <input type="hidden" name="id_dokter" class="form-control" value="<?php echo $detail['id_dokter']; ?>">
                  </div>
                   
                  <br>
                  <div>
                    <label>Waktu</label>
                    <br>
                    <input type="text" name="waktu" class="form-control" value="<?php echo $detail['waktu']; ?>">
                  </div>
                  <br>
                  <div>
                    <label>Hari</label>
                    <br>
                    <input type="text" name="hari" class="form-control" value="<?php echo $detail['hari']; ?>">
                  </div>
                  <br>
                  


                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.box -->