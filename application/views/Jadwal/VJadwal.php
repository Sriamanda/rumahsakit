<section class="content-header">
          <h1>
            Jadwal     <small>Rumah Sakit</small>
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
      <a href="<?php echo site_url('Jadwal/VFormAddJadwal'); ?>" class="btn btn-primary btn-sm fa fa-plus"> Tambah Jadwal</a><br><br>
		  
	
              <table class="table table-striped">
                <tr>
          
                  <th>ID</th>
                  <th>ID Dokter</th>
                  <th>Waktu</th>
                  <th>Hari</th>
                  <th>Aksi</th>
                </tr>
                
                <?php
	if(!empty($DataJadwal))
	{
		foreach($DataJadwal as $ReadDS)
		{
	?>

	<tr>
		
		<td><?php echo $ReadDS->id_jadwal; ?></td>
    <td><?php echo $ReadDS->id_dokter; ?></td>
    <td><?php echo $ReadDS->waktu; ?></td>
    <td><?php echo $ReadDS->hari; ?></td>

		<td width="5%">
			<a href="<?php echo site_url('Jadwal/DataJadwal/'.$ReadDS->id_jadwal.'/view') ?>">Update</a>
      <td>
      <a href="<?php echo site_url('Jadwal/DeleteDataJadwal/'.$ReadDS->id_jadwal) ?>">Delete</a>
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




