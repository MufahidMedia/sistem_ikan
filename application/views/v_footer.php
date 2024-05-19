<div class="footer-atas">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<div class="footer-content">
					<h2>DESA PABERASAN</h2>					
					<legend></legend>
					<p><h4>Sistem Informasi Desa Paberasan</h4></p>
					<div class="row">
						<div class="col-md-6 col-sm-12 col-xs-12">
							<ul class="list-icons">
							<li><i class="fa fa-map-marker"></i>Kantor Desa</li>
							<li><i class="fa fa"></i>JL. Dr.Soetomo No.1 </li>
							<li><i class="fa "></i>Sampang KAB. Cilacap 53273<br></li>	
							<li><i class="fa fa-map-marker"></i>Kantor Karang Taruna</li>
							<li><i class="fa fa"></i>JL. Dr.Soetomo No.1 Paberasan</li>
							<li><i class="fa "></i>Kec.Sampang Kab.Cilacap 53273<br></li>						
						</ul>
						</div>
						<div class="col-md-6 col-sm-12 col-xs-12">
						<ul class="list-icons">
						<li><i class="fa fa-phone pr-10"></i> 0236 8976 098</li>
						<li><i class="fa fa-envelope-o pr-10"></i> paberasanvilage@gmail.com</li>
						<li><i class="fa fa-mobile-phone pr-10"></i> +62895 2750 5338</li>
						</ul>
							<ul class="social-links circle">
							<li class="link"><a target="_blank" href="https://jatengprov.go.id/beritadaerah/bupati-canangkan-kampung-kb-di-desa-paberasan-sampang/" title="Website" rel="noopener noreferrer"><i class="fa fa-link"></i></a></li>
							<li class="facebook"><a target="_blank" href="https://www.facebook.com/pemdes.paberasan" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li class="twitter"><a target="_blank" href="https://twitter.com" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							<li class="instagram"><a target="_blank" href="https://www.instagram.com/pemdes__paberasan/" title="Instagram"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="logo-footer img-responsive">
								<a href="http://jatengprov.go.id/" target="_blank">
									<img src="<?php echo base_url(); ?>assetku/img/logo_jateng.png" alt="Logo Jateng">
								</a>
								<a href="http://www.kominfo.go.id/" target="_blank">
									<img src="<?php echo base_url(); ?>assetku/img/logo kominfo.png" alt="Logo Kominfo">
								</a>
								<a href="http://cilacapkab.go.id/v3/" target="_blank">
									<img src="<?php echo base_url(); ?>assetku/img/logo_desa_pab.png" alt="Logo Desa Pab">
								</a>
								<a href="http://digitaldesa.id/" target="_blank">
									<img src="<?php echo base_url(); ?>assetku/img/logo desa digital.png" alt="Logo Desa Digital">
								</a>
								<a href="http://www.karangtarunapaberasan.id/" target="_blank">
									<img src="<?php echo base_url(); ?>assetku/img/logo_kr_paberasan.png" alt="Logo Karang Taruna Paberasan">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="footer-content">
					<h2>Kontak / Saran / Keluhan</h2>
					<h4></h4>
					<legend></legend>					
					<?php 
					$attributes = array('id' => 'formKontak');
					echo form_open('c_kontak/simpan_kontak/', $attributes); ?>
						<div class="form-group has-feedback">
							<label class="sr-only" for="nama">Nama</label>
							<input type="text" class="form-control input-md" placeholder="Nama Lengkap" id="nama" name="nama" required >
						</div>
						<div class="form-group has-feedback">
							<label class="sr-only" for="email">Alamat Email</label>
							<input type="email" class="form-control input-md" placeholder="Alamat Email" id="email" name="email" required >
						</div>
						<div class="form-group has-feedback">
							<label class="sr-only" for="pesan">Pesan</label>
							<textarea class="form-control input-md" rows="2" placeholder="Isi Pesan" id="pesan" name="pesan" required></textarea>
						</div>

						<div class="form-group has-feedback">
						<input class="form-control input-md" type="text" id="aunt" name="aunt" placeholder="Masukan Kode Captcha Diatas" required>
						</div>
						<div class="form-group has-feedback">
							<button id="kirim" name="kirim" class="btn btn-default">Kirim</button>
						</div>
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="footer-bawah">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<marquee> <i>Website Desa Paberasan. Kecamatan Sampang. Kabupaten Cilacap. Tahun
				&copy; <span id="tahun"></span> All Rights Reserved. </i>
				</marquee>
				<script>
					document.getElementById("tahun").innerHTML = new Date().getFullYear();
				</script>
			</div>
		</div>
	</div>
</div>

</body>
</html>
<!-- Alertify CSS -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assetku/alertify/themes/alertify.core.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assetku/alertify/themes/alertify.default.css" id="toggleCSS" />	 

<!-- Alertify JavaScript -->
<script src="<?php echo base_url(); ?>assetku/alertify/lib/alertify.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assetku/js/jquery-1.11.0.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assetku/realperson/jquery.realperson.css" media="screen" />
<script type="text/javascript" src="<?php echo base_url(); ?>assetku/realperson/jquery.plugin.js"></script>	
<script type="text/javascript" src="<?php echo base_url(); ?>assetku/realperson/jquery.realperson.js"></script>	

<style>
label { display: none; width: 20%; }

.realperson-challenge 
{  
	display: inline-block;
	padding : 2px;	
	padding-top : 5px;
	margin-bottom : 13px;
	background-color: #fff;
	background-image: none;
	border: 1px solid #ccc;
	border-radius: 4px;
	-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
	box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
	-webkit-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
	transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
</style>

<!-- CAPTCHA -->
<!-- Kode tersebut merupakan kode JavaScript (dengan jQuery) yang memanfaatkan beberapa plugin dan fitur AJAX -->
<script>

$(function() {
	$('#aunt').realperson({chars: $.realperson.alphanumeric,regenerate: '',length: 5});
	
	$('.realperson-challenge').click(function() { 
		window.location.reload(1);
	});
	
	$('#formKontak').submit(function(event) { 
	console.log($('form').serialize());
	$.ajax({
		type: "POST",
		url: "<?=site_url("c_kontak/simpan_kontak/");?>",
		data: $('form').serialize(),
		success: function(data, status, xhr){
			if(data){
				alertify.success("Terima Kasih, pesan telah terkirim !");
				console.log(status);
				$('#kirim').prop('disabled', true);
					setTimeout(function(){
				   window.location.reload(1);
				}, 1000);
			}
			else {
				alertify.error("Kode tidak cocok !");
				console.log(status);
				$('#kirim').prop('disabled', true);
				setTimeout(function(){
				   window.location.reload(1);
				}, 1000);
			}
		}
	});			
	//return true;
	event.preventDefault();
	});
});

</script>
