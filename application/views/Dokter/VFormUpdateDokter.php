<!-- Main content -->
<form action="<?php echo site_url('Dokter/UpdateDataDokter'); ?>" method="post">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
<section class="content-header">
          <h1>
            Update Dokter     <small>Rumah Sakit</small>
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
                    <input type="hidden" name="id_dokter" value="<?php echo $detail['id_dokter']; ?>" class="form-control">
                    <input type="text" name="nik" value="<?php echo $detail['nik']; ?>"  class="form-control">
                  </div>

                  <div>
                    <label>Nama</label>
                    <br>
                    <input type="text" name="nama_dokter" value="<?php echo $detail['nama_dokter']; ?>" class="form-control">
                  </div>
                  <br>

                  <div>
                    <label>Jabatan</label>
                    <br>
                    <input type="text" name="jabatan" value="<?php echo $detail['jabatan']; ?>" class="form-control">
                  </div>
                  <br>

                  <div>
                    <label>Spesialis</label>
                    <br>
                    <input type="text" name="spesialis" value="<?php echo $detail['spesialis']; ?>" class="form-control">
                  </div>


                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.box -->