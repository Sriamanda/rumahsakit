<form action="<?php echo site_url('User/AddDataUser'); ?>" method="post">
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
 <section class="content-header">
          <h1>
            Tambah User      <small>Rumah Sakit</small>
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
                    <label>Username</label>
                    <input type="text" class="form-control" placeholder="Masukan Username" name="username">
                  </div>
                  
                  <div>
                  <label>Password</label>
                    <input type="text" class="form-control" placeholder="Masukan Password" name="password">
                  </div>
                  <br>

                  <div>
                  <label>Level</label>
                    <input type="text" class="form-control" placeholder="Masukan level" name="level">
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