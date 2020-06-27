<!-- Main content -->
<form action="<?php echo site_url('Kamar/UpdateDataKamar'); ?>" method="post">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
<section class="content-header">
          <h1>
            Update Ruang Rawat     <small>Rumah Sakit</small>
          </h1>
</section>

            <div class="box box-primary">
              <div class="box-header">
            </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
                  
                   <div class="form-group">
                    <label></label>
                    <br>
                    <input type="hidden" name="id_kamar" value="<?php echo $detail['id_kamar']; ?>">
                    <input type="hidden" name="id_pasien" class="form-control" value="<?php echo $detail['id_pasien']; ?>">
                  </div>
                   
                  <br>
                  <div>
                    <label>Nama Ruang</label>
                    <br>
                    <input type="text" name="nama_kamar" class="form-control" value="<?php echo $detail['nama_kamar']; ?>">
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