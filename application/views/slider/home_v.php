
	
  
  
 <section>	
<div class="container"> 
<h2> hai <?php //echo $pengguna->nama;?></h2> 

	<div class="row">
			
			<div class="col-md-12">	
					<div class="well">
								<ul class="nav nav-pills">
									<li class="active"><a href="#">Home</a></li>
									<li><a href="#">Profile</a></li>
									<li><a href="#">Messages</a></li>
								</ul>

				
					</div>					
			</div>
	<div class="col-md-8">	
	<div class="well">	

	<table class="table table-striped">
	
						<tr>
							<th>username</th>
							<th >password</th> 
							<th>nama</th>
						</tr>


						<?php //foreach ($daftar as $user){?>
		
							<tr>
	
								<td> <?php //echo $user->username;?></td>
								<td> <?php //echo $user->password;?></td>
								<td> <?php //echo $user->nama;?></td>
						

					
							</tr><?php// } ?>
			
	<!--button new admin=berhubungan dengan modal insert form
		<h4><a href="" data-toggle="modal" data-target="#modal-insert-form">Ganti password</a></h4>	-->
		
			</div>	
		</div>
	
	</table>
	</div>
					<h2 class="pull-right"><?php echo anchor('login/logout', 'Keluar &raquo;');?></h2>
</div>

 </section>
<!---------------------------------------------------------------------------stop--------------------------------------------------->		
		<!-- MODAL insert FORM -->

<!------------------------------------------------------------------------stop------------------------------------------------------------->	
		



	


 
