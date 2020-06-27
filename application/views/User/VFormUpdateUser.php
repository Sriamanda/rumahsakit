<!-- Main content -->
<form action="<?php echo site_url('User/UpdateDataUser'); ?>" method="post">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <section class="content-header">
          <h1>
            Update User      <small>Rumah Sakit</small>
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
                    <label>Nama User</label>
                    <br>
                    <input type="hidden" name="kd_login" value="<?php echo $detail['kd_login']; ?>">
                    <input type="text" name="username" value="<?php echo $detail['username']; ?>">
                  </div>

                  <div>
                    <label>Password</label>
                    <br>
                    <input type="text" name="password" value="<?php echo $detail['password']; ?>">
                  </div>
                  <br>
                  <div>
                    <label>Level</label>
                    <br>
                    <input type="text" name="level" value="<?php echo $detail['level']; ?>">
                  </div>
                  <br>


                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.box -->