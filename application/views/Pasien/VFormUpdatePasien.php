<!-- Main content -->
<form action="<?php echo site_url('Pasien/UpdateDataPasien'); ?>" method="post">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
<section class="content-header">
          <h1>
            Update Pasien     <small>Rumah Sakit</small>
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
                    <label>NIK</label>
                    <br>
                    <input type="hidden" name="id_pasien" value="<?php echo $detail['id_pasien']; ?>" class="form-control">
                    <input type="text" name="nik" value="<?php echo $detail['nik']; ?>"  class="form-control">
                  </div>
                  
                  <div>
                    <label>Nama</label>
                    <br>
                    <input type="text" name="nama_pasien" value="<?php echo $detail['nama_pasien']; ?>" class="form-control">
                  </div>
                  <br>
                
                  <div>
                    <label>Alamat</label>
                    <br>
                    <input type="text" name="alamat" value="<?php echo $detail['alamat']; ?>" class="form-control">
                  </div>
                  <br>
                
                  <div>
                    <label>Penyakit</label>
                    <br>
                    <input type="text" name="penyakit" value="<?php echo $detail['penyakit']; ?>" class="form-control">
                  </div>



                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.box -->