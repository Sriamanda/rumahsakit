<section class="content-header">
          <h1>
            Data Obat     <small>Rumah Sakit</small>
          </h1>
</section>

<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>

             
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
    
      
      <a href="<?php echo site_url('Obat/VFormAddObat'); ?>" class="btn btn-primary btn-sm fa fa-plus">  Tambah Data</a><br><br>
    
  
              <table class="table table-striped">
                <tr>
          
                  <th>ID</th>
                  <th>Nama Obat</th>
                  <th>Fungsi Obat</th>
                  <th>Aksi</th>
                </tr>
                
                <?php
  if(!empty($DataObat))
  {
    foreach($DataObat as $ReadDS)
    {
  ?>

  <tr>
    
    <td><?php echo $ReadDS->id_obat; ?></td>
    <td><?php echo $ReadDS->nama_obat; ?></td>
    <td><?php echo $ReadDS->fungsi_obat; ?></td>

    <td width="5%">
      <a href="<?php echo site_url('Obat/DataObat/'.$ReadDS->id_obat.'/view') ?>">Update</a>
      <td>
      <a href="<?php echo site_url('Obat/DeleteDataObat/'.$ReadDS->id_obat) ?>">Delete</a>
    </td>
  </tr>
            
         <?php
     }
 }
 ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>




