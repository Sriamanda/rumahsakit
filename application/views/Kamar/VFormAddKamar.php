<form action="<?php echo site_url('Kamar/AddDataKamar'); ?>" method="post">
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
<section class="content-header">
          <h1>
            Tambah Ruang Rawat    <small>Rumah Sakit</small>
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
                    <label>ID</label>
                    <input type="text" class="form-control" placeholder="Tidak Perlu di Isi" name="id_Kamar">
                  </div>
                  
                  <div>
                    <label>ID Pasien</label>
                    <select name="id_pasien" class="form-control">
                      <?php
                        foreach($list_Kamar as $lb){
                          echo '<option value="'.$lb->id_pasien.'">'.$lb->nama_pasien.'</option>';

                        }
                      ?>
                      
                    </select>
                  </div>
                  <br>

                  <div>
                    <label>Nama Ruang</label>
                    <input type="text" class="form-control" placeholder="Masukan Nama Ruang" name="nama_kamar">
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