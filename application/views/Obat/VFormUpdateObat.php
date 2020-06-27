<!-- Main content -->
<form action="<?php echo site_url('Obat/UpdateDataObat'); ?>" method="post">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
<section class="content-header">
          <h1>
            Update Obat     <small>Rumah Sakit</small>
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
                    <label>Nama</label>
                    <br>
                    <input type="hidden" name="id_obat" value="<?php echo $detail['id_obat']; ?>" class="form-control">
                    <input type="text" name="nama_obat" value="<?php echo $detail['nama_obat']; ?>"  class="form-control">
                  </div>

                  <div>
                    <label>Fungsi</label>
                    <input type="text" name="fungsi_obat" value="<?php echo $detail['fungsi_obat']; ?>" class="form-control">
                  </div>



                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.box -->