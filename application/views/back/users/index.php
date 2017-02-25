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
            <div class="box-header">
              <h3 class="box-title pull-right">
                  <a href="<?php echo base_url('users/create')?>" type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
              </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <?php $this->load->view('back/layouts/alert') ?>
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Terakhir Login</th>
                    <th>Dibuat Tanggal</th>
                    <th>Active</th>
                    <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1; 
                        foreach($users as $u){ ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $u->username ?></td>
                                <td><?php echo date('d:m:Y h:m', $u->last_login)?></td>
                                <td><?php echo date('d:m:Y h:m', $u->created_on)?></td>
                                <td><?php echo $u->active ?></td>
                                <td>
                                    <a href="<?php echo site_url('users/edit/')?><?php echo $u->id ?>" class="label label-warning"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                                    <a onclick="return confirm('Anda Yakin akan menghapus?')" class="label label-danger" href="<?php echo site_url('users/delete/')?><?php echo $u->id ?>
                                    "><i class="glyphicon glyphicon-trash"></i> Hapus</a>
                                    <a href="<?php echo site_url('users/change_password')?>/<?php echo $u->id ?>" class="label label-info"><i class="glyphicon glyphicon-lock"></i> Ganti Password</a>
                                </td>
                            </tr>
                        <?php
                        } 
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
    <!-- /.row (main row) -->
</section>

<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
    var table = $('#example2').DataTable();
} );
</script>