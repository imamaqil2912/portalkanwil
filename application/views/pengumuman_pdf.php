<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>Pengumuman List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Judul Pengumuman</th>
		<th>Isi Pengumuman</th>
		<th>Link File</th>
		
            </tr><?php
            foreach ($admin_pengumuman_data as $admin_pengumuman)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $admin_pengumuman->judul_pengumuman ?></td>
		      <td><?php echo $admin_pengumuman->isi_pengumuman ?></td>
		      <td><?php echo $admin_pengumuman->link_file ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>