<section class="content-header">
          <h1>
            Data Spesialis     <small>Rumah Sakit</small>
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
      <a href="<?php echo site_url('Spesialis/VFormAddSpesialis'); ?>" class="btn btn-primary btn-sm fa fa-plus"> Tambah Data</a><br><br>
		  
	
              <table class="table table-striped">
                <tr>
          
                  <th>ID</th>
                  <th>ID Dokter</th>
                  <th>Spesialis</th>
                  <th>Aksi</th>
                </tr>
                
                <?php
	if(!empty($DataSpesialis))
	{
		foreach($DataSpesialis as $ReadDS)
		{
	?>

	<tr>
		
		<td><?php echo $ReadDS->id_spesialis; ?></td>
    <td><?php echo $ReadDS->id_dokter; ?></td>
    <td><?php echo $ReadDS->spesialis; ?></td>
    

		<td width="5%">
			<a href="<?php echo site_url('Spesialis/DataSpesialis/'.$ReadDS->id_spesialis.'/view') ?>">Update</a>
      <td>
      <a href="<?php echo site_url('Spesialis/DeleteDataSpesialis/'.$ReadDS->id_spesialis) ?>">Delete</a>
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




