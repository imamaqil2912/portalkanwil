<!--div class="container">
	<div class="row">
		<div class="span12">
			<div class="tagline">
				<div class="row">
					<div class="span6">
						<div class="tagline_text">
							<h2>Portal Kanwil <span class="text-success">Jakut</span> </h2>
							<div class="tag_list">
								<ul>
									<li><span><i class="icon-fire"></i> Hottest price on the net</span></li>
									<li><span><i class="icon-gift"></i> More than expected</span></li>
									<li><span><i class="icon-plane"></i> Flying out of the crowd</span></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="span6">
						<div class="btn-toolbar cta">
							<a class="btn btn-large btn-danger" href="#"><i class="m-icon-big-swapright m-icon-white"></i> Our pricing</a>
							<a class="btn btn-large btn-success" href="#"><i class="m-icon-big-swapdown m-icon-white"></i> Download now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end tagline -->
<section id="maincontent">
<div class="container">
	<div class="row">
		<div class="span3">
			<div class="well well-primary box">
				<img src="<?php echo base_url() ?>assets/front/img/icons/chart.png" alt="" />
				<h3><b>Dashboard Penerimaan</b></h3>
				<p>
					 Data Penerimaan Pajak Seluruh KPP di Wilayah Jakarta Utara.
				</p>
				<a href="#"><b>Klik Disini</b></a>
			</div>
		</div>
		<div class="span3">
			<div class="well well-success box">
				<img src="<?php echo base_url() ?>assets/front/img/icons/box-3-white.png" alt="" />
				<h3><b>Data <br>Potensi</br></b></h3>
				<p>
					 Data dan Potensi Penggalian Pajak di Lingkup Kanwil DJP Jakarta Utara
				</p>
				<a href="#"><b>Klik Disini</b></a>
			</div>
		</div>
		<div class="span3">
			<div class="well well-warning box">
				<img src="<?php echo base_url() ?>assets/front/img/icons/mail.png" alt="" />
				<h3><b>Sistem Surat Kanwil (SISUKA)</b></h3>
				<p>
					 Sistem adminstrasi Surat Masuk dan Surat Keluar Kanwil DJP Jakarta Utara
				</p>
				<a href="#"><b>Klik Disini</b></a>
			</div>
		</div>
		<div class="span3">
			<div class="well well-primary box">
				<img src="<?php echo base_url() ?>assets/front/img/icons/globe.png" alt="" />
				<h3><b>Geo<br>Spasial</br></b></h3>
				<p>
					 Pemetaan Potensi Pajak di Wilayah Jakarta Utara
				</p>
				<a href="#"><b>Klik Disini</b></a>
			</div>
		</div>
	</div>
	<!-- divider -->
	<div class="row">
		<div class="span12">
			<div class="divider">
			</div>
		</div>
	</div>
	<!-- end divider -->
	<div class="row">
		<div class="span6">
			<h3 class="heading-success"><span class="btn btn-large btn-success"><i class="m-icon-big-swapright m-icon-white"></i></span>&nbsp;&nbsp;Today's Motivation</h3>
			<div id="myCarousel" class="carousel slide testimonials">
				<div class="carousel-inner">
					<div class="item active">
						<div class="testimonial">
							<img src="<?php echo base_url() ?>assets/front/img/quotes/pele.jpg" alt="" />
							<blockquote>
								<p>
									 "Success is no accident. It is hard work, perseverance, learning, studying, sacrifice and most of all, love of what you are doing or learning to do."
								</p>
							</blockquote>
							<div class="info">
								<span class="author"><strong><a href="#">Pele</a>,</strong></span>
								<span class="company">Football Legend</span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimonial">
							<img src="<?php echo base_url() ?>assets/front/img/quotes/sherlock.jpg" alt="" />
							<blockquote>
								<p>
									 "…when you have eliminated all which is impossible, then whatever remains, however improbable, must be the truth"
								</p>
							</blockquote>
							<div class="info">
								<span class="author"><strong><a href="#">Sherlock Holmes</a>,</strong></span>
								<span class="company">at, <i>The Blanched Soldier</i></span>
							</div>
						</div>
					</div>
				</div>
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
			</div>
		</div>
		<div class="span6">
			<h3 class="heading-success"><span class="btn btn-large btn-success"><i class="m-icon-big-swapright m-icon-white"></i></span>&nbsp;&nbsp;Useful Links</h3>
			<div class="accordion" id="accordion2">
				<div class="accordion-group">
					<div class="accordion-heading">
						<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
						1. Berita dan Pengumuman </a>
					</div>
					<div id="collapseOne" class="accordion-body collapse in">
						<div class="accordion-inner">
							<img src="<?php echo base_url() ?>assets/front/img/icons/responsive-icon.png" class="alignright" alt="" />
							<h2>Pengumuman Baru</h2>
							<?php
							$i = 1;
							foreach($pengumuman->result_array() as $p)
							{
								
							?>
								 <?php echo $i;?>. <?php echo $p['judul_pengumuman'];?></br>
								<a class="btn btn-group" href="#info<?php echo $i;?>" data-toggle="modal"><i class="glyphicon glyphicon-eye-open"></i> Baca Selengkapnya</a>
								<!-- Modal -->
								<div class="modal fade" id="info<?php echo $i;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header modal-header-info">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
												<i class="glyphicon glyphicon-thumbs-up"></i> <?php echo $p['judul_pengumuman']; ?>
											</div>
											<div class="modal-body">
												<?php echo $p['isi_pengumuman'];?>
												<br>
												<a href="<?php echo $p['link_file'];?>">DISINI</a>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
											</div>
										</div><!-- /.modal-content -->
									</div><!-- /.modal-dialog -->
								</div></br>
								<?php
								$i++;
							}
							?>
								</div>
					</div>
				</div>
				<div class="accordion-group">
					<div class="accordion-heading">
						<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
						2. Link Aplikasi Direkorat Jenderal Pajak </a>
					</div>
					<div id="collapseTwo" class="accordion-body collapse">
						<div class="accordion-inner">
							
						<img src="<?php echo base_url() ?>assets/front/img/icons/check.png" class="alignright" alt="" />
								<?php
								foreach($link->result_array() as $l){
									
								?>
								<a class="according-toggle" data-toggle="collapse" data-parent"#accordion2" href="<?php echo $l['url']; ?>" >
								<?php echo $l['nama']; ?> </a> ||
								<?php
								}
								?>
							</div>
					</div>
				</div>
				<div class="accordion-group">
					<div class="accordion-heading">
						<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
						3. Download </a>
					</div>
					<div id="collapseThree" class="accordion-body collapse">
						<div class="accordion-inner">
							<img src="<?php echo base_url() ?>assets/front/img/icons/app.png" class="alignleft" alt="" />
							<h5>Aplikasi</h5>
							<p>
								 Aplikasi eSPT, eFaktur, dan aplikasi lainnya bisa didownload di pajak.go.id.
							</p>
							<a href="#">Learn more</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	<!-- divider -->
	<div class="row">
		<div class="span12">
			<div class="divider">
			</div>
		</div>
	</div>
	<!-- end divider -->
		<div class="span6">
			<h3 class="heading-success"><span class="btn btn-large btn-success"><i class="m-icon-big-swapright m-icon-white"></i></span>&nbsp;&nbsp;Disc KUSUT - Discussion Khusus Utara</h3>
			<div class="col-md-5">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-comment"></span> Chat
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-chevron-down"></span>
                        </button>
                        <ul class="dropdown-menu slidedown">
                            <li><a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-refresh">
                            </span>Refresh</a></li>
                            <li><a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-ok-sign">
                            </span>Available</a></li>
                            <li><a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-remove">
                            </span>Busy</a></li>
                            <li><a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-time"></span>
                                Away</a></li>
                            <li class="divider"></li>
                            <li><a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-off"></span>
                                Sign Out</a></li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body">
                    <ul class="chat">
                        <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Jack Sparrow</strong> <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span>12 mins ago</small>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                    dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                        <li class="right clearfix"><span class="chat-img pull-right">
                            <img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <small class=" text-muted"><span class="glyphicon glyphicon-time"></span>13 mins ago</small>
                                    <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                    dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                        <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Jack Sparrow</strong> <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span>14 mins ago</small>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                    dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                        <li class="right clearfix"><span class="chat-img pull-right">
                            <img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <small class=" text-muted"><span class="glyphicon glyphicon-time"></span>15 mins ago</small>
                                    <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                    dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="panel-footer">
                    <div class="input-group">
                        <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." />
                        <span class="input-group-btn">
                            <button class="btn btn-warning btn-sm" id="btn-chat">
                                Send</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
		</div>
	</div>
</div>
</section>
<section id="bottom">
<div class="container">
	<!-- divider -->
	<div class="row">
		<div class="span12">
			<div class="divider">
			</div>
		</div>
	</div>
	<!-- end divider -->
	<div class="row">
		<div class="span12">
			<h3><a class="btn btn-large btn-success" href="#"><i class="m-icon-big-swapdown m-icon-white"></i></a> Dashboard KPP di Lingkungan Kanwil DJP Jakarta Utara</h3>
			<div id="latest-work" class="carousel btleft">
				<div class="carousel-wrapper">
					<ul class="portfolio-home da-thumbs">
						<li>
						<div class="thumbnail">
							<div class="image-wrapp">
								<img src="<?php echo base_url() ?>assets/front/img/kpp/penjaringan.jpg" alt="Portfolio name" title="" />
								<article class="da-animate da-slideFromRight" style="display: block;">
								<a class="link_post" href="portfolio-detail.html"><img src="<?php echo base_url() ?>assets/front/img/icons/link_post_icon.png" alt="" /></a>
								<span><a class="zoom" data-pretty="prettyPhoto" href="<?php echo base_url() ?>assets/front/img/dummies/big1.jpg"><img src="<?php echo base_url() ?>assets/front/img/icons/zoom_icon.png" alt="Portfolio name" title="Portfolio name" /></a></span>
								</article>
							</div>
							<div class="caption">
								<h5>KPP Pratama Jakarta Penjaringan</h5>
							</div>
						</div>
						</li>
						<li>
						<div class="thumbnail">
							<div class="image-wrapp">
								<img src="<?php echo base_url() ?>assets/front/img/kpp/priok.jpg" alt="Portfolio name" title="" />
								<article class="da-animate da-slideFromRight" style="display: block;">
								<a class="link_post" href="portfolio-detail.html"><img src="<?php echo base_url() ?>assets/front/img/icons/link_post_icon.png" alt="" /></a>
								<span><a class="zoom" data-pretty="prettyPhoto" href="<?php echo base_url() ?>assets/front/img/dummies/big1.jpg"><img src="<?php echo base_url() ?>assets/front/img/icons/zoom_icon.png" alt="Portfolio name" title="Portfolio name" /></a></span>
								</article>
							</div>
							<div class="caption">
								<h5>KPP Pratama Jakarta Tanjung Priok</h5>
							</div>
						</div>
						</li>
						<li>
						<div class="thumbnail">
							<div class="image-wrapp">
								<img src="<?php echo base_url() ?>assets/front/img/kpp/gading.jpg" alt="Portfolio name" title="" />
								<article class="da-animate da-slideFromRight" style="display: block;">
								<a class="link_post" href="portfolio-detail.html"><img src="<?php echo base_url() ?>assets/front/img/icons/link_post_icon.png" alt="" /></a>
								<span><a class="zoom" data-pretty="prettyPhoto" href="<?php echo base_url() ?>assets/front/img/dummies/big1.jpg"><img src="<?php echo base_url() ?>assets/front/img/icons/zoom_icon.png" alt="Portfolio name" title="Portfolio name" /></a></span>
								</article>
							</div>
							<div class="caption">
								<h5>KPP Pratama Jakarta Kelapa Gading</h5>
							</div>
						</div>
						</li>
						<li>
						<div class="thumbnail">
							<div class="image-wrapp">
								<img src="<?php echo base_url() ?>assets/front/img/kpp/pademangan.jpg" alt="Portfolio name" title="" />
								<article class="da-animate da-slideFromRight" style="display: block;">
								<a class="link_post" href="portfolio-detail.html"><img src="<?php echo base_url() ?>assets/front/img/icons/link_post_icon.png" alt="" /></a>
								<span><a class="zoom" data-pretty="prettyPhoto" href="<?php echo base_url() ?>assets/front/img/dummies/big1.jpg"><img src="<?php echo base_url() ?>assets/front/img/icons/zoom_icon.png" alt="Portfolio name" title="Portfolio name" /></a></span>
								</article>
							</div>
							<div class="caption">
								<h5>KPP Pratama Jakarta Pademangan</h5>
							</div>
						</div>
						</li>
						<li>
						<div class="thumbnail">
							<div class="image-wrapp">
								<img src="<?php echo base_url() ?>assets/front/img/kpp/koja.jpg" alt="Portfolio name" title="" />
								<article class="da-animate da-slideFromRight" style="display: block;">
								<a class="link_post" href="portfolio-detail.html"><img src="<?php echo base_url() ?>assets/front/img/icons/link_post_icon.png" alt="" /></a>
								<span><a class="zoom" data-pretty="prettyPhoto" href="<?php echo base_url() ?>assets/front/img/dummies/big1.jpg"><img src="<?php echo base_url() ?>assets/front/img/icons/zoom_icon.png" alt="Portfolio name" title="Portfolio name" /></a></span>
								</article>
							</div>
							<div class="caption">
								<h5>KPP Pratama Jakarta Koja</h5>
							</div>
						</div>
						</li>
						<li>
						<div class="thumbnail">
							<div class="image-wrapp">
								<img src="<?php echo base_url() ?>assets/front/img/kpp/pluit.jpg" alt="Portfolio name" title="" />
								<article class="da-animate da-slideFromRight" style="display: block;">
								<a class="link_post" href="portfolio-detail.html"><img src="<?php echo base_url() ?>assets/front/img/icons/link_post_icon.png" alt="" /></a>
								<span><a class="zoom" data-pretty="prettyPhoto" href="<?php echo base_url() ?>assets/front/img/dummies/big1.jpg"><img src="<?php echo base_url() ?>assets/front/img/icons/zoom_icon.png" alt="Portfolio name" title="Portfolio name" /></a></span>
								</article>
							</div>
							<div class="caption">
								<h5>KPP Pratama Jakarta Pluit</h5>
							</div>
						</div>
						</li>
						<li>
						<div class="thumbnail">
							<div class="image-wrapp">
								<img src="<?php echo base_url() ?>assets/front/img/kpp/madya.jpg" alt="Portfolio name" title="" />
								<article class="da-animate da-slideFromRight" style="display: block;">
								<a class="link_post" href="portfolio-detail.html"><img src="<?php echo base_url() ?>assets/front/img/icons/link_post_icon.png" alt="" /></a>
								<span><a class="zoom" data-pretty="prettyPhoto" href="<?php echo base_url() ?>assets/front/img/dummies/big1.jpg"><img src="<?php echo base_url() ?>assets/front/img/icons/zoom_icon.png" alt="Portfolio name" title="Portfolio name" /></a></span>
								</article>
							</div>
							<div class="caption">
								<h5>KPP Madya Jakarta Utara</h5>
							</div>
						</div>
						</li>
						<li>
						<div class="thumbnail">
							<div class="image-wrapp">
								<img src="<?php echo base_url() ?>assets/front/img/kpp/sunter.jpg" alt="Portfolio name" title="" />
								<article class="da-animate da-slideFromRight" style="display: block;">
								<a class="link_post" href="portfolio-detail.html"><img src="<?php echo base_url() ?>assets/front/img/icons/link_post_icon.png" alt="" /></a>
								<span><a class="zoom" data-pretty="prettyPhoto" href="<?php echo base_url() ?>assets/front/img/dummies/big1.jpg"><img src="<?php echo base_url() ?>assets/front/img/icons/zoom_icon.png" alt="Portfolio name" title="Portfolio name" /></a></span>
								</article>
							</div>
							<div class="caption">
								<h5>KPP Pratama Jakarta Sunter</h5>
							</div>
						</div>
						</li>
					</ul>
				</div>
			</div>
			
		</div>
	</div>
</div>
</section>