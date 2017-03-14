<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title'>PENGUMUMAN</h3>
                      <div class='box box-primary'>
        <form action="<?php echo $action; ?>" method="post"><table class='table table-bordered'>
	    <tr><td>Judul Pengumuman <?php echo form_error('judul_pengumuman') ?></td>
            <td><input type="text" class="form-control" name="judul_pengumuman" id="judul_pengumuman" placeholder="Judul Pengumuman" value="<?php echo $judul_pengumuman; ?>" />
        </td>
	    <tr><td>Isi Pengumuman <?php echo form_error('isi_pengumuman') ?></td>
            <td><textarea class="form-control" rows="3" name="isi_pengumuman" id="isi_pengumuman" placeholder="Isi Pengumuman"><?php echo $isi_pengumuman; ?></textarea>
        </td></tr>
	    <tr><td>Link File <?php echo form_error('link_file') ?></td>
            <td><input type="text" class="form-control" name="link_file" id="link_file" placeholder="Link File" value="<?php echo $link_file; ?>" />
        </td>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('admin_pengumuman') ?>" class="btn btn-default">Cancel</a></td></tr>
	
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->