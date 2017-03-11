<div class="jumbotron masthead">
	<div class="container">
		<div class="row">
			<div class="span12">
				<div id="slider" class="nivoSlider">
					<?php
					foreach($banner->result_array() as $bn)
					{
					?>
					<img src="<?php echo base_url() ?>assets/slider/<?php echo $bn['gambar']; ?>" data-thumb="<?php echo base_url() ?>assets/slider/<?php echo $bn['gambar']; ?>" alt="" title="<h3><?php echo strip_tags(substr($bn['judul'],0,50)); ?></h3>
						<?php echo strip_tags(substr($bn['deskripsi'],0,70)); ?>" />
					<?php
				}
				?>
				</div>
				<div id="htmlcaption1" class="nivo-html-caption">
					<h2>Selamat Datang di Portal Kanwil Jakut</h2>
					<p>
						 Selamat datang di Portal Kanwil DJP Jakarta Utara. Dengan tampilan baru, kini portal lebih dinamis mengikuti perkembangan teknologi. Penguatan integrasi database membuat data yang ada pada Portal menjadi semakin baik.
					</p>
				</div>
				<div id="htmlcaption2" class="nivo-html-caption">
					<h2>Rapat Kordinasi Gabungan</h2>
					<p>
						 Sinergi dan Komunikasi, Kunci Pengamanan Penerimaan Pajak
					</p>
				</div>
				<div id="htmlcaption3" class="nivo-html-caption">
					<h2>Periode Terakhir Amnesti Pajak</h2>
					<p>
						 Program Amnesti Pajak Memasuki tahap akhir periode. Tetap Semangat Satu Jiwa!
					</p>
				</div>
			</div>
		</div>
	</div>
</div>