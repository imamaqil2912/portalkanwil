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
        <h2>Link List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Nama</th>
		<th>Url</th>
		<th>Tab Baru</th>
		<th>Url Gambar</th>
		<th>Urutan</th>
		<th>Hits</th>
		<th>Ip</th>
		<th>Waktu</th>
		
            </tr><?php
            foreach ($admin_link_data as $admin_link)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $admin_link->nama ?></td>
		      <td><?php echo $admin_link->url ?></td>
		      <td><?php echo $admin_link->tab_baru ?></td>
		      <td><?php echo $admin_link->url_gambar ?></td>
		      <td><?php echo $admin_link->urutan ?></td>
		      <td><?php echo $admin_link->hits ?></td>
		      <td><?php echo $admin_link->ip ?></td>
		      <td><?php echo $admin_link->waktu ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>