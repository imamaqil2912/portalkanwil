<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title'>LINK</h3>
                      <div class='box box-primary'>
        <form action="<?php echo $action; ?>" method="post"><table class='table table-bordered'>
	    <tr><td>Nama <?php echo form_error('nama') ?></td>
            <td><input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" />
        </td>
	    <tr><td>Url <?php echo form_error('url') ?></td>
            <td><input type="text" class="form-control" name="url" id="url" placeholder="Url" value="<?php echo $url; ?>" />
        </td>
	    <tr><td>Tab Baru <?php echo form_error('tab_baru') ?></td>
            <td><input type="text" class="form-control" name="tab_baru" id="tab_baru" placeholder="Tab Baru" value="<?php echo $tab_baru; ?>" />
        </td>
	    <tr><td>Url Gambar <?php echo form_error('url_gambar') ?></td>
            <td><input type="text" class="form-control" name="url_gambar" id="url_gambar" placeholder="Url Gambar" value="<?php echo $url_gambar; ?>" />
        </td>
	    <tr><td>Urutan <?php echo form_error('urutan') ?></td>
            <td><input type="text" class="form-control" name="urutan" id="urutan" placeholder="Urutan" value="<?php echo $urutan; ?>" />
        </td>
	    <tr><td>Hits <?php echo form_error('hits') ?></td>
            <td><input type="text" class="form-control" name="hits" id="hits" placeholder="Hits" value="<?php echo $hits; ?>" />
        </td>
	    <tr><td>Ip <?php echo form_error('ip') ?></td>
            <td><input type="text" class="form-control" name="ip" id="ip" placeholder="Ip" value="<?php echo $ip; ?>" />
        </td>
	    <tr><td>Waktu <?php echo form_error('waktu') ?></td>
            <td><input type="text" class="form-control" name="waktu" id="waktu" placeholder="Waktu" value="<?php echo $waktu; ?>" />
        </td>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('link') ?>" class="btn btn-default">Cancel</a></td></tr>
	
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->