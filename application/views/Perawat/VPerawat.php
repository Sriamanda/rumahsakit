<section class="content-header">
          <h1>
            Data Perawat     <small>Rumah Sakit</small>
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
		
			
      <a href="<?php echo site_url('Perawat/VFormAddPerawat'); ?>" class="btn btn-primary btn-sm fa fa-plus"> Tambah Data</a><br><br>
		
	
              <table class="table table-striped">
                <tr>
          
                  <th>ID</th>
                  <th>NIK</th>
                  <th>Nama Perawat</th>
                  <th>Jabatan</th>
                  <th>Alamat</th>
                  <th>Aksi</th>
                </tr>
                
                <?php
	if(!empty($DataPerawat))
	{
		foreach($DataPerawat as $ReadDS)
		{
	?>

	<tr>
		
		<td><?php echo $ReadDS->id_perawat; ?></td>
    <td><?php echo $ReadDS->nik; ?></td>
    <td><?php echo $ReadDS->nama_perawat; ?></td>
    <td><?php echo $ReadDS->jabatan; ?></td>
    <td><?php echo $ReadDS->alamat; ?></td>

		<td width="5%">
			<a href="<?php echo site_url('Perawat/DataPerawat/'.$ReadDS->id_perawat.'/view') ?>">Update</a>
      <td>
      <a href="<?php echo site_url('Perawat/DeleteDataPerawat/'.$ReadDS->id_perawat) ?>">Delete</a>
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




