<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tamu PTSP | Tambah</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php $this->load->view("_partials/css.php") ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/plugin/datepicker/datepicker3.css') ?>">
	
</head>
<body class="hold-transition sidebar-mini">
	<div class="wrapper">
		<?php $this->load->view("_partials/navbar.php") ?>
		<?php $this->load->view("_partials/sidebar_container.php") ?>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
		  <!-- Content Header (Page header) -->
		  <section class="content-header">
		    <div class="container-fluid">
		      <div class="row mb-2">
		        <div class="col-sm-6">
		          <h1>Pengambilan Akta Cerai</h1>
		        </div>
		        <div class="col-sm-6">
		          <ol class="breadcrumb float-sm-right">
		            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
		            <li class="breadcrumb-item"><a href="<?php echo base_url('produk/ac') ?>">Pengambilan Akta Cerai</a></li>
		            <li class="breadcrumb-item active">Tambah</li>
		          </ol>
		        </div>
		      </div>
		      <div class="row mb-2">
		      	<div class="col-sm-12" id="respon">
	      			<?php 
		      			$respon = $this->session->flashdata('respon');
		      			if(isset($respon)){ ?>
		      				<div class='alert alert-warning' role='alert' id='responMsg'>
		      					Akta cerai sudah diambil
		      				</div>
		      				<!-- <script type="text/javascript">
		      					document.addEventListener("DOMContentLoaded", function(event) { 
		      					  $("#responMsg").hide().fadeIn(200).delay(2000).fadeOut(1000, function(){$(this).remove();});
		      					});
		      				</script> -->
		      			<?php } ?>	
		      		
		      	</div>
		      </div>
		    </div><!-- /.container-fluid -->
		  </section>

		  <!-- Main content -->
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
	                		<div class="col-md-6">
	                			<label for="no_perkara">Nomor Perkara</label>
	                			<input type="text" class="form-control <?php echo form_error('no_perkara') ? 'is-invalid' : '' ?>" name="no_perkara" value="<?php echo set_value('no_perkara'); ?>" placeholder="1262" required="" id="no_perkara">
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

		                <div class="form-group">
		                  <label for="pihak">Pihak</label>
		                  <select class="form-control <?php echo form_error('pihak') ? 'is-invalid' : '' ?>" name="pihak" disabled style="display: none;">
		                  	<option>Pilih Pihak</option>
		                  	<option value="p" <?php echo set_select('pihak', 'p'); ?>>Penggugat</option>
		                  	<option value="t" <?php echo set_select('pihak', 't'); ?>>Tergugat</option>
		                  </select>
		                  <div class="invalid-feedback">
		                  	<?php echo form_error('pihak'); ?>
		                  </div>
		                </div>
		                <div id="sembunyikan" style="display: none;">
			                <div class="form-group">
			                  <label for="nama">Nama</label>
			                  <input type="text" class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>" name="nama" value="<?php echo set_value('nama'); ?>" placeholder="Nama Lengkap" required readonly>
			                  <div class="invalid-feedback">
			                    <?php echo form_error('nama') ?>
			                  </div>
			                </div>
			                <!-- <div class="form-group">
			                  <label for="no_perkara">NO Perkara</label>
			                  <input type="text" class="form-control <?php echo form_error('no_perkara') ? 'is-invalid':'' ?>" name="no_perkara" value="<?php echo set_value('no_perkara'); ?>" placeholder="Nomor Perkara" required>
			                  <div class="invalid-feedback">
			                    <?php echo form_error('no_perkara') ?>
			                  </div>
			                </div> -->
			                <!-- <div class="form-row">
			                	<div class="col-md-4 mb-3">
			                		<label for="no_perkara">Nomor Perkara</label>
			                		<input type="text" class="form-control <?php echo form_error('no_perkara') ? 'is-invalid' : '' ?>" name="no_perkara" value="<?php echo set_value('no_perkara'); ?>" placeholder="1262" required="" id="no_perkara">
			                		<div class="invalid-feedback">
			                		  <?php echo form_error('no_perkara') ?>
			                		</div>
			                	</div>
			                	<div class="col-md-4 mb-3">
			                		<label for="no_perkara_tahun">Tahun</label>
			                		<input type="text" class="form-control <?php echo form_error('no_perkara_tahun') ? 'is-invalid' : '' ?>" name="no_perkara_tahun" value="<?php echo set_value('no_perkara_tahun'); ?>" placeholder="2019" required="">
			                		<div class="invalid-feedback">
			                		  <?php echo form_error('no_perkara_tahun') ?>
			                		</div>
			                	</div> -->
			                <!-- <div class="form-group">
			                  <label for="no_ac">NO Akta Cerai</label>
			                  <input type="text" class="form-control <?php echo form_error('no_ac') ? 'is-invalid':'' ?>" name="no_ac" value="<?php echo set_value('no_ac'); ?>" placeholder="Nomor Akta Cerai" required>
			                  <div class="invalid-feedback">
			                    <?php echo form_error('no_ac') ?>
			                  </div>
			                </div> -->

			                <div class="form-group">
			                	<label for="no_ac">Nomor Akta Cerai</label>
			                	<input type="text" class="form-control <?php echo form_error('no_ac') ? 'is-invalid':'' ?>" name="no_ac" value="<?php echo set_value('no_ac'); ?>" required readonly>
			                </div>
			                <!-- <div class="form-row">
			                	<div class="col-md-6 mb-3">
			                		<label for="no_ac">Nomor Akta Cerai</label>
			                		<input type="text" class="form-control <?php echo form_error('no_ac') ? 'is-invalid' : '' ?>" value="<?php echo set_value('no_ac'); ?>" name="no_ac" placeholder="107" required="">
			                		<div class="invalid-feedback">
			                		  <?php echo form_error('no_ac') ?>
			                		</div>
			                	</div>
			                	<div class="col-md-6 mb-3">
			                		<label for="no_ac_tahun">Tahun</label>
			                		<input type="text" class="form-control <?php echo form_error('no_ac_tahun') ? 'is-invalid' : '' ?>" value="<?php echo set_value('no_ac_tahun'); ?>" name="no_ac_tahun" placeholder="2020" required="">
			                		<div class="invalid-feedback">
			                		  <?php echo form_error('no_ac_tahun') ?>
			                		</div>
			                	</div>
			                </div> -->
			                
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
			                <!-- <div class="form-group">
			                	<label for="foto">Foto</label>
			                	<input type="file" class="form-control-file <?php echo form_error('foto') ? 'is-invalid':'' ?>" name="foto" >
			                	<div class="invalid-feedback">
			                		<?php echo form_error('foto'); ?>
			                	</div>
			                </div> -->
			                <!-- end work -->
			              	<!-- tes -->
			              	<div class="form-group">
			              		<label for="foto">Foto</label>
			              		<div class="camera col-md-12">
			              			<div class="row">
				              			<video id="video" class="col-md-12 h-auto">Video tidak tersedia</video>
			              			</div>
			              			<div class="row mt-2 mb-2">
			              				<div class="col-md-12">
					              			<button id="startbutton" class="btn btn-warning btn-block">Ambil foto</button>
			              				</div>
			              			</div>
			              			<canvas id="canvas" style="display: none;"></canvas>
			              			<div class="output col-md-12">
			              				<div class="row">
				              				<img id="photo" alt="Gambar kamera akan muncul di kotak ini">
			              				</div>
			              				<input type="hidden" class="form-control-file <?php echo form_error('foto') ? 'is-invalid':'' ?>" name="foto" id="foto" >
			              			</div>
			              		</div>
			              	</div>
			              	<!-- end tes -->
				              <div class="card-footer">
				                <button type="submit" class="btn btn-primary">Simpan</button>
				                <a href="<?php echo base_url("produk/ac"); ?>" class="btn btn-danger">Batal</a>
				              </div>
			              </div>
		              </div>
		            </form>
		          </div>
		        </div>
		      </div>
		      <!-- /.row -->
		    </div><!-- /.container-fluid -->
		  </section>
		  <!-- /.content -->
		</div>
		<!-- /.content-wrapper -->
		<?php $this->load->view("_partials/footer.php") ?>
		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
		  <!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url('asset/js/jquery/jquery.min.js') ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('asset/js/bootstrap/bootstrap.bundle.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('asset/dist/js/adminlte.min.js') ?>"></script>
<!-- datepicker -->
<script src="<?php echo base_url('asset/plugin/datepicker/bootstrap-datepicker.js') ?>"></script>


<script type="text/javascript">
  <?php $nama_pa_pendek = $this->session->userdata('nama_pa_pendek'); ?>
  $(document).ready(function(){
    $("#sidebar_ptsp").addClass("active");
    $("#sidebar_ptsp_ac").addClass("active");
    $('input[name="nama"]').focus();
    var nama_pihak = [];
     var nama_pa_pendek = "<?php echo $nama_pa_pendek; ?>";
    // cek no perkara
    $("#btn_cek_perkara").click(function(){
    	$("#sembunyikan").hide();
    	$("select[name='pihak']").prop("selectedIndex", 0);
    	var no = $("input[name='no_perkara']").val().trim();
    	var tahun = $("input[name='no_perkara_tahun']").val().trim();
    	// var nmr_perkara = no+"/Pdt.G/"+tahun+"/"+nama_pa_pendek;
    	$.ajax({
    		url: "<?php echo base_url('produk/cek_data_perkara_gugatan_ac'); ?>",
    		method: "POST",
    		data: {no: no, tahun: tahun},
    		dataType: "json",
    		success: function(data)
    		{
    			if(!data)
    			{
    				alert("Akta cerai belum terbit");
    			}
    			else
    			{
    				$("select[name='pihak']").show();
    				$("select[name='pihak']").prop('disabled', false);
    				nama_pihak = [data[0]["p"],data[0]["t"]];
    				$("input[name='no_ac']").val(data[0]["nomor_akta_cerai"]);
    			}
    		}
    	});
    });

    $("select[name='pihak']").on('change', function(){
    	if(this.value == "p")
    	{
    		$("input[name='nama']").val(nama_pihak[0]);
    		$("#sembunyikan").show();
    	}
    	else if(this.value == "t")
    	{
    		$("input[name='nama']").val(nama_pihak[1]);
    		$("#sembunyikan").show();
    	}
    	else
    	{
    		$("input[name='nama']").val("");
    		$("#sembunyikan").hide();
    	}
    });

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
	  // (function(){
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
	  // });
	  // end ambil gambar
		  $("input[name='no_perkara']").on("input",function(){
		  	$("#sembunyikan").hide();
		  	$("select[name='pihak']").hide();
		  	$("select[name='pihak']").prop("selectedIndex", 0);
		  });
		  $("input[name='no_perkara_tahun']").on("input",function(){
		  	$("#sembunyikan").hide();
		  	$("select[name='pihak']").hide();
		  	$("select[name='pihak']").prop("selectedIndex", 0);
		  });
	  });
</script>
</body>
</html>