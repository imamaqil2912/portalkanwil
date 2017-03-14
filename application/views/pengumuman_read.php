
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                <h3 class='box-title'>Pengumuman Read</h3>
        <table class="table table-bordered">
	    <tr><td>Judul Pengumuman</td><td><?php echo $judul_pengumuman; ?></td></tr>
	    <tr><td>Isi Pengumuman</td><td><?php echo $isi_pengumuman; ?></td></tr>
	    <tr><td>Link File</td><td><?php echo $link_file; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('admin_pengumuman') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->