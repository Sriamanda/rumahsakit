<section class="content-header">
          <h1>
            Data Dokter     <small>Rumah Sakit</small>
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
		
			
      <a href="<?php echo site_url('Dokter/VFormAddDokter'); ?>" class="btn btn-primary btn-sm fa fa-plus"> Tambah Data</a><br><br>
		
	
              <table class="table table-striped">
                <tr>
          
                  <th>ID</th>
                  <th>NIK</th>
                  <th>Nama Dokter</th>
                  <th>Jabatan</th>
                  <th>spesialis</th>
                  <th>Aksi</th>
                </tr>
                
                <?php
	if(!empty($DataDokter))
	{
		foreach($DataDokter as $ReadDS)
		{
	?>

	<tr>
		
		<td><?php echo $ReadDS->id_dokter; ?></td>
    <td><?php echo $ReadDS->nik; ?></td>
    <td><?php echo $ReadDS->nama_dokter; ?></td>
    <td><?php echo $ReadDS->jabatan; ?></td>
    <td><?php echo $ReadDS->spesialis; ?></td>

		<td width="5%">
			<a href="<?php echo site_url('Dokter/DataDokter/'.$ReadDS->id_dokter.'/view') ?>">Update</a>
      <td>
      <a href="<?php echo site_url('Dokter/DeleteDataDokter/'.$ReadDS->id_dokter) ?>">Delete</a>
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




