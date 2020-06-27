<form action="<?php echo site_url('Jadwal/AddDataJadwal'); ?>" method="post">
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
<section class="content-header">
          <h1>
            Tambah Jadwal     <small>Rumah Sakit</small>
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
                    <input type="text" class="form-control" placeholder="Tidak Perlu di Isi" name="id_jadwal">
                  </div>
                  
                  <div>
                    <label>ID Dokter</label>
                    <select name="id_dokter" class="form-control">
                      <?php
                        foreach($list_jadwal as $lb){
                          echo '<option value="'.$lb->id_dokter.'">'.$lb->nama_dokter.'</option>';

                        }
                      ?>
                      
                    </select>
                  </div>
                  <br>

                  <div>
                    <label>Waktu</label>
                    <input type="text" class="form-control" placeholder="Masukan Waktu" name="waktu">
                  </div>
                  <br>

                  <div>
                    <label>Hari</label>
                    <input type="text" class="form-control" placeholder="Masukan Hari" name="hari">
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