<!-- Main content -->
<form action="<?php echo site_url('Uang/UpdateDataUang'); ?>" method="post">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
<section class="content-header">
          <h1>
            Update Keuangan     <small>Rumah Sakit</small>
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
                    <label>Waktu</label>
                    <br>
                    <input type="hidden" name="id_uang" value="<?php echo $detail['id_uang']; ?>" class="form-control">
                    <input type="text" name="waktu" value="<?php echo $detail['waktu']; ?>"  class="form-control">
                  </div>

                  <div>
                    <label>Penghasilan</label>
                    <br>
                    <input type="text" name="penghasilan" value="<?php echo $detail['penghasilan']; ?>" class="form-control">
                  </div>
                  <br>

                  <div>
                    <label>Pengeluaran</label>
                    <br>
                    <input type="text" name="pengeluaran" value="<?php echo $detail['pengeluaran']; ?>" class="form-control">
                  </div>


                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.box -->