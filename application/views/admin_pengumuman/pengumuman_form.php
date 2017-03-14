<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Pengumuman <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Judul Pengumuman <?php echo form_error('judul_pengumuman') ?></label>
            <input type="text" class="form-control" name="judul_pengumuman" id="judul_pengumuman" placeholder="Judul Pengumuman" value="<?php echo $judul_pengumuman; ?>" />
        </div>
	    <div class="form-group">
            <label for="isi_pengumuman">Isi Pengumuman <?php echo form_error('isi_pengumuman') ?></label>
            <textarea class="form-control" rows="3" name="isi_pengumuman" id="isi_pengumuman" placeholder="Isi Pengumuman"><?php echo $isi_pengumuman; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="varchar">Link File <?php echo form_error('link_file') ?></label>
            <input type="text" class="form-control" name="link_file" id="link_file" placeholder="Link File" value="<?php echo $link_file; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('admin_pengumuman') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>