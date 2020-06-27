<form action="<?php echo site_url('Perawat/AddDataPerawat'); ?>" method="post">
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
<section class="content-header">
          <h1>
            Tambah Perawat      <small>Rumah Sakit</small>
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
                    <input type="text" class="form-control" placeholder="Tidak Perlu di Isi" name="id_perawat">
                  </div>
                  
                  <div>
                    <label>NIK</label>
                    <input type="text" class="form-control" placeholder="Masukan NIK" name="nik">
                  </div>
                  <br>

                  <div>
                    <label>Nama</label>
                    <input type="text" class="form-control" placeholder="Masukan Nama" name="nama_perawat">
                  </div>
                  <br>
                      
                  <div>
                    <label>Jabatan</label>
                    <input type="text" class="form-control" placeholder="Masukan Jabatan" name="jabatan">
                  </div>
                  <br>

                  <div>
                    <label>Alamat</label>
                    <input type="text" class="form-control" placeholder="Masukan Alamat" name="alamat">
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