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
        <h2 style="margin-top:0px">Pengumuman Read</h2>
        <table class="table">
	    <tr><td>Judul Pengumuman</td><td><?php echo $judul_pengumuman; ?></td></tr>
	    <tr><td>Isi Pengumuman</td><td><?php echo $isi_pengumuman; ?></td></tr>
	    <tr><td>Link File</td><td><?php echo $link_file; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('admin_pengumuman') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>