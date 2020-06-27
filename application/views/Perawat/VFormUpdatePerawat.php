<!-- Main content -->
<form action="<?php echo site_url('Perawat/UpdateDataPerawat'); ?>" method="post">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
<section class="content-header">
          <h1>
            Update Perawat      <small>Rumah Sakit</small>
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
                    <input type="hidden" name="id_perawat" value="<?php echo $detail['id_perawat']; ?>" class="form-control">
                    <input type="text" name="nik" value="<?php echo $detail['nik']; ?>"  class="form-control">
                  </div>

                  <div>
                    <label>Nama</label>
                    <input type="text" name="nama_perawat" value="<?php echo $detail['nama_perawat']; ?>" class="form-control">
                  </div>
                  <br>

                  <div>
                    <label>Jabatan</label>
                    <br>
                    <input type="text" name="jabatan" value="<?php echo $detail['jabatan']; ?>" class="form-control">
                  </div>
                  <br>
                  
                  <div>
                    <label>Alamat</label>
                    <br>
                    <input type="text" name="alamat" value="<?php echo $detail['alamat']; ?>" class="form-control">
                  </div>



                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.box -->