<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tamu PTSP | Tambah</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php $this->load->view("_partials/css.php") ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/plugin/datepicker/datepicker3.css') ?>">
	<!-- lightbox -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/plugin/lightbox2/dist/css/lightbox.min.css'); ?>">
</head>
<body class="hold-transition sidebar-mini">
	<div class="wrapper">
		<?php $this->load->view("_partials/navbar.php") ?>
		<?php $this->load->view("_partials/sidebar_container.php") ?>
		<div class="content-wrapper">
			<section class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1>Pengambilan Salinan Penetapan</h1>
						</div>
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
							  <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
							  <li class="breadcrumb-item"><a href="<?php echo base_url('produk/penetapan') ?>">Pengambilan Salinan Penetapan</a></li>
							  <li class="breadcrumb-item active">Tambah</li>
							</ol>
						</div>
					</div>
					<div class="row mb-2">
						<div class="col-sm-12" id="respon">
							
						</div>
					</div>
				</div>
			</section>
			<section class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="card card-primary">
								<div class="card-header">
									<h3 class="card-title">Tambah</h3>
								</div>
								<form role="form" method="post" enctype="multipart/form-data">
									<div class="card-body">
										<div class="form-row">
											<div class="col-md-12">
												<a href="<?php echo base_url('produk/penetapan/manual'); ?>" class="btn btn-secondary float-sm-right" title="Gunakan tombol ini apabila perkara tidak masuk di database SIPP">Tambah Manual</a>
											</div>
										</div>
										<div class="form-row">
											<div class="col-md-6">
												<label for="no_perkara">Nomor Perkara</label>
												<input type="text" name="no_perkara" class="form-control <?php echo form_error('no_perkara') ? 'is-invalid' : '' ?>" value="<?php echo set_value('no_perkara'); ?>" placeholder="1262" required="" id="no_perkara">
												<div class="invalid-feedback">
													<?php echo form_error('no_perkara') ?>
												</div>
											</div>
											<div class="col-md-5">
												<label for="no_perkara_tahun">Tahun</label>
												<input type="text" class="form-control <?php echo form_error('no_perkara_tahun') ? 'is-invalid' : '' ?>" name="no_perkara_tahun" value="<?php echo set_value('no_perkara_tahun'); ?>" placeholder="2019" required="">
												<div class="invalid-feedback">
													<?php echo form_error('no_perkara_tahun') ?>
												</div>
											</div>
											<div class="col-auto mt-auto">
												<button type="button" class="btn btn-success" id="btn_cek_perkara">Check</button>
											</div>
										</div>

										<input type="hidden" name="pihak" class="form-control" value="p">

										<div id="sembunyikan" style="display: none;">
											<div class="form-group">
												<label for="nama">Nama</label>
												<input type="text" class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>" name="nama" value="<?php echo set_value('nama'); ?>" placeholder="Nama Lengkap" required readonly>
												<div class="invalid-feedback">
													<?php echo form_error('nama') ?>
												</div>
											</div>
											<div class="form-group">
												<label for="no_hp">Nomor HP</label>
												<input type="text" class="form-control <?php echo form_error('no_hp') ? 'is-invalid':'' ?>" name="no_hp" value="<?php echo set_value('no_hp'); ?>" placeholder="Nomor HP" required>
												<div class="invalid-feedback">
													<?php echo form_error('no_hp') ?>
												</div>
											</div>
											<div class="form-group">
												<label for="tanggal">Tanggal</label>
												<input type="text" class="form-control <?php echo form_error('tanggal') ? 'is-invalid':'' ?>" name="tanggal" value="<?php echo set_value('tanggal', date('Y-m-d')); ?>" required>
												<div class="invalid-feedback">
													<?php echo form_error('tanggal') ?>
												</div>
											</div>
											<!-- work -->
											
							              	<div class="form-group">
							              		<label for="foto">Foto</label>
							              		<div class="row">
							              			<div class="camera col-md-6">
							              				<video id="video" class="col-md-12 h-auto">Video tidak tersedia</video>
							              			</div>
							              		</div>
				  		              			<div class="row mt-2 mb-2">
				  		              				<div class="col-md-6">
				  				              			<button id="startbutton" class="btn btn-warning btn-block">Ambil foto</button>
				  		              				</div>
				  		              			</div>
				  		              			<canvas id="canvas" style="display: none;"></canvas>
				  		              			<div class="row mt-2">
					  		              			<div class="output col-md-6 mb-2">
					  		              				<label for="hasil">Hasil Foto</label>
					  		              				<div class="row">
					  		              					<img id="photo" alt="Gambar kamera akan muncul di kotak ini" class="img-fluid">
					  		              				</div>
					  		              				<input type="hidden" class="form-control-file <?php echo form_error('foto') ? 'is-invalid':'' ?>" name="foto" id="foto" >
					  		              			</div>
					  		              			<div class="col-md-6 mb-2">
				  		              					<label for="foto_pendaftaran">Foto pada saat pendaftaran</label>
					  		              				<div class="row">
					  		              					<a href="<?php echo base_url('upload/penetapan/default.png'); ?>" id="box_foto_pendaftaran">
						  		              					<img class="img-fluid" id="foto_pendaftaran" src="<?php echo base_url('upload/penetapan/default.png'); ?>">
					  		              					</a>
					  		              				</div>
					  		              			</div>
				  		              			</div>
							              	</div>
											<!-- end ambil gambar -->
											<div class="card-footer">
												<button type="submit" class="btn btn-primary">Simpan</button>
												<a href="<?php echo base_url("produk/penetapan"); ?>" class="btn btn-danger">Batal</a>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<?php $this->load->view("_partials/footer.php") ?>
		<?php $this->load->view("_partials/loader.php") ?>
		<aside class="control-sidebar control-sidebar-dark"></aside>
	</div>
	<!-- jQuery -->
	<script src="<?php echo base_url('asset/js/jquery/jquery.min.js') ?>"></script>
	<!-- Bootstrap 4 -->
	<script src="<?php echo base_url('asset/js/bootstrap/bootstrap.bundle.min.js') ?>"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url('asset/dist/js/adminlte.min.js') ?>"></script>
	<!-- datepicker -->
	<script src="<?php echo base_url('asset/plugin/datepicker/bootstrap-datepicker.js') ?>"></script>
	<!-- lightbox -->
	<script src="<?php echo base_url('asset/plugin/lightbox2/dist/js/lightbox.min.js') ?>"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$("#sidebar_ptsp").addClass("active");
			$("#sidebar_ptsp_penetapan").addClass("active");
			$('input[name="nama"]').focus();
			var nama_pihak = [];
			var no, tahun;
			$("#btn_cek_perkara").click(function(){
				no = $("input[name='no_perkara']").val().trim();
				tahun = $("input[name='no_perkara_tahun']").val().trim();
				// var nmr_perkara = no+"/Pdt.P/"+tahun+"/PA.Tgr";
				$.ajax({
					url: "<?php echo base_url('produk/cek_data_perkara_penetapan'); ?>",
					method: "POST",
					data: {no: no, tahun: tahun},
					dataType: "json",
					success: function(data)
					{
						if(!data)
						{
							alert("Perkara belum terdaftar");
						}
						else
						{
							// $("select[name='pihak']").show();
							// $("select[name='pihak']").prop('disabled', false);
							try {
								nama_pihak = [data[0]["p"],data[0]["t"]];
								$("input[name='nama']").val(nama_pihak[0]);
								getFoto();
								$("#sembunyikan").show();
							}
							catch(err)
							{
								console.log(err);
								alert("Perkara belum terdaftar");
							}
						}
					}
				});
			});
			

			function getFoto() {

				$.ajax({
					url: "<?php echo base_url("produk/getFoto"); ?>",
					method: "POST",
					data : {no: no, jenis: "Pdt.P", tahun: tahun},
					dataType: "json",
					beforeSend: function()
					{
						$(".loader2").show();
					},
					success: function(data)
					{
						
						$("#box_foto_pendaftaran").attr("href","<?php echo base_url("upload/pendaftaran/") ?>"+data);
						$("#box_foto_pendaftaran").attr("data-lightbox","img");
						$("#box_foto_pendaftaran").attr("data-title",nama_pihak[0]);
						$("#foto_pendaftaran").attr("src","<?php echo base_url('upload/pendaftaran/'); ?>"+data);
						$(".loader2").hide();
					},
					error: function(err)
					{
						$("#box_foto_pendaftaran").attr("href","<?php echo base_url("upload/pendaftaran/gugatan/default.png") ?>");
						$("#box_foto_pendaftaran").attr("data-lightbox","img");
						$("#box_foto_pendaftaran").attr("data-title",nama_pihak[0]);
						$("#foto_pendaftaran").attr("src","<?php echo base_url('upload/pendaftaran/gugatan/default.png'); ?>");
						$(".loader2").hide();
					}

				});
			}

		    // datepicker
		    var date_input=$('input[name="tanggal"]'); //our date input has the name "date"
		    var container=$('.content form').length>0 ? $('.content form').parent() : "body";
		    var options={
		      format: 'yyyy-mm-dd',
		      container: container,
		      todayHighlight: true,
		      autoclose: true,
		    };
		    date_input.datepicker(options);
		    // end datepicker

		    // ambil gambar
    	  	var width = 720;
    	  	var height = 0;
    	  	var streaming = false;
    	  	var video = null;
    	  	var canvas = null;
    	  	var photo = null;
    	  	var startbutton = null;
    	  	var foto = null;
    	  	startup();

    	  	function startup()
    	  	{
    	  		video = document.getElementById('video');
      		    canvas = document.getElementById('canvas');
      		    photo = document.getElementById('photo');
      		    startbutton = document.getElementById('startbutton');
      		    foto = document.getElementById('foto');

      		    navigator.mediaDevices.getUserMedia({ video: true, audio: false })
    	        .then(function(stream) {
    	            video.srcObject = stream;
    	            video.play();
    	        })
    	        .catch(function(err) {
    	            console.log("An error occurred: " + err);
    	        });

    	        video.addEventListener('canplay', function(ev){
    	          if (!streaming) {
    	            height = video.videoHeight / (video.videoWidth/width);

    	            video.setAttribute('width', width);
    	            video.setAttribute('height', height);
    	            canvas.setAttribute('width', width);
    	            canvas.setAttribute('height', height);
    	            streaming = true;
    	          }
    	        }, false);

    	        startbutton.addEventListener('click', function(ev){
                  takepicture();
                  ev.preventDefault();
                }, false);

                clearphoto();

                function clearphoto() {
    	           var context = canvas.getContext('2d');
    	           context.fillStyle = "#AAA";
    	           context.fillRect(0, 0, canvas.width, canvas.height);

    	           var data = canvas.toDataURL('image/png');
    	           photo.setAttribute('src', data);
    	           foto.setAttribute('value', 'kosong');
    	        }

    	        function takepicture() {
    	            var context = canvas.getContext('2d');
    	            if (width && height) {
    	              canvas.width = width;
    	              canvas.height = height;
    	              context.drawImage(video, 0, 0, width, height);

    	              var data = canvas.toDataURL('image/png');
    	              photo.setAttribute('src', data);
    	              foto.setAttribute('value', data);
    	            } else {
    	              clearphoto();
    	            }
    	        }
    	  	}
		    // end ambil gambar

		    $("input[name='no_perkara']").on("input",function(){
		    	$("#sembunyikan").hide();
		    });
		    $("input[name='no_perkara_tahun']").on("input",function(){
		    	$("#sembunyikan").hide();
		    });
		    <?php
		    	if($this->session->userdata('respon')) :
		    		$respon = $this->session->userdata('respon');
		    ?>
		    $("#respon").html("<div class='alert alert-success' role='alert' id='responMsg'><strong>Maaf</strong> <?php echo $respon; ?></div>")
		    $("#responMsg").hide().fadeIn(200).delay(2000).fadeOut(1000, function(){$(this).remove();});
		    <?php endif; ?>
		});
	</script>
</body>
</html>