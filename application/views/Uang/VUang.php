<section class="content-header">
          <h1>
            Data Keuangan     <small>Rumah Sakit</small>
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
		
			
      <a href="<?php echo site_url('Uang/VFormAddUang'); ?>" class="btn btn-primary btn-sm fa fa-plus"> Tambah Data</a><br><br>
		
	
              <table class="table table-striped">
                <tr>
          
                  <th>ID</th>
                  <th>waktu</th>
                  <th>penghasilan</th>
                  <th>pengeluaran</th>
                  <th>Aksi</th>
                </tr>
                
                <?php
	if(!empty($DataUang))
	{
		foreach($DataUang as $ReadDS)
		{
	?>

	<tr>
		
		<td><?php echo $ReadDS->id_uang; ?></td>
    <td><?php echo $ReadDS->waktu; ?></td>
    <td><?php echo $ReadDS->penghasilan; ?></td>
    <td><?php echo $ReadDS->pengeluaran; ?></td>

		<td width="5%">
			<a href="<?php echo site_url('Uang/DataUang/'.$ReadDS->id_uang.'/view') ?>">Update</a>
      <td>
      <a href="<?php echo site_url('Uang/DeleteDataUang/'.$ReadDS->id_uang) ?>">Delete</a>
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




