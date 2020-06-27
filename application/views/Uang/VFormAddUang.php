<form action="<?php echo site_url('Uang/AddDataUang'); ?>" method="post">
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
<section class="content-header">
          <h1>
            Tambah Keuangan    <small>Rumah Sakit</small>
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
                    <label>ID</label>
                    <input type="text" class="form-control" placeholder="Tidak Perlu di Isi" name="id_uang">
                  </div>
                  
                  <div>
                  <label>Waktu</label>
                    <input type="text" class="form-control" placeholder="Masukan Waktu" name="waktu">
                  </div>
                  <br>
                      
                  <div>
                  <label>Penghasilan</label>
                    <input type="text" class="form-control" placeholder="Masukan Penghasilan" name="penghasilan">
                  </div>
                  <br>

                  <div>
                  <label>Pengeluaran</label>
                    <input type="text" class="form-control" placeholder="Masukan Pengeluaran" name="pengeluaran">
                  </div>
                </div>
          
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.box -->