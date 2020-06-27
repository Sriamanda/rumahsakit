<section class="content-header">
          <h1>
            Data Ruang Rawat   <small>Rumah Sakit</small>
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
		
			<br>
      <a href="<?php echo site_url('Kamar/VFormAddKamar'); ?>" class="btn btn-primary btn-sm fa fa-plus">  Tambah Data</a><br><br>
		  
	
              <table class="table table-striped">
                <tr>
          
                  <th>ID</th>
                  <th>ID Pasien</th>
                  <th>Nama Ruangan</th>
                  <th>Aksi</th>
                </tr>
                
                <?php
	if(!empty($DataKamar))
	{
		foreach($DataKamar as $ReadDS)
		{
	?>

	<tr>
		
		<td><?php echo $ReadDS->id_kamar; ?></td>
    <td><?php echo $ReadDS->id_pasien; ?></td>
    <td><?php echo $ReadDS->nama_kamar; ?></td>

		<td width="5%">
			<a href="<?php echo site_url('Kamar/DataKamar/'.$ReadDS->id_kamar.'/view') ?>">Update</a>
      <td>
      <a href="<?php echo site_url('Kamar/DeleteDataKamar/'.$ReadDS->id_kamar) ?>">Delete</a>
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




