<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
    <?php echo $judul ?>
    </h1>
    <ol class="breadcrumb">
        <?php foreach($breadcrumb as $b){?>
            <li><a href="#"><?php echo $b ?></a></li>
        <?php } ?>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <!-- Main row -->
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
                <?php $this->load->view('back/layouts/alert') ?>
                <form class="form-horizontal" action="<?php echo site_url('users/save')?>" method="post">
                <div class="box-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Username</label>
                        <div class="col-sm-9">
                            <input type="text" name="username" class="form-control" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Password</label>
                        <div class="col-sm-9">
                            <input type="password" name="password" class="form-control"  placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Nama Awal</label>
                        <div class="col-sm-9">
                            <input type="text" name="first_name" class="form-control" placeholder="Nama Awal">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Nama Belakang</label>
                        <div class="col-sm-9">
                            <input type="text" name="last_name" class="form-control" placeholder="Nama Belakang">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Cabang</label>
                        <div class="col-sm-9">
                            <input type="text" name="company" class="form-control" placeholder="Nama Cabang">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">No Handphone</label>
                        <div class="col-sm-9">
                            <input type="text" name="phone" class="form-control" placeholder="Nomor Handphone">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Grup User</label>
                        <div class="col-sm-9">
                            <select name="group" class="form-control">
                                <?php foreach($groups as $gr){ ?>
                                    <option value="<?php echo $gr->id ?>"><?php echo $gr->name ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i> Simpan</button>
                    </div>
                </div>
                <!-- /.box-footer -->
                </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
    <!-- /.row (main row) -->
</section>