<!DOCTYPE html>
<html lang="ID">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Laporan Pengaduan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php $this->load->view("_partials/css.php") ?>
	<style type="text/css">
		@media print{@page {size:landscape;}}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12 align-items-center">
				<div class="text-center">
					<?php 
						// $this->config->load('ptsp_config',TRUE);
						// $nama_pa = $this->config->item('nama_pa','ptsp_config');
						$nama_pa = $this->session->userdata('nama_pa');
					 ?>
					<h3 class="text-uppercase">LAPORAN PENGADUAN DAN INFORMASI<br>PADA PENGADILAN AGAMA <span class="text-uppercase"><?php echo $nama_pa; ?></span><br>BULAN <?php echo $bulan; ?> TAHUN <?php echo $tahun; ?></h3>
				</div>
				<div class="panel-body">
					<table class="table table-bordered">
						<thead>
							<tr class="text-center">
								<th scope="col">NO</th>
								<th scope="col">Tanggal</th>
								<th scope="col">Nama</th>
								<th scope="col">Alamat</th>
								<th scope="col">Telepon</th>
								<th scope="col">Pekerjaan</th>
								<th scope="col">Informasi Yang Diminta</th>
								<th scope="col">Keterangan</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$no = 1;
								function tgl_indo($tanggal){
									$bulan = array (
										1 =>   'Januari',
										'Februari',
										'Maret',
										'April',
										'Mei',
										'Juni',
										'Juli',
										'Agustus',
										'September',
										'Oktober',
										'November',
										'Desember'
									);
									$pecahkan = explode('-', $tanggal);
									
									// variabel pecahkan 0 = tanggal
									// variabel pecahkan 1 = bulan
									// variabel pecahkan 2 = tahun
								 
									return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
								}
								foreach($laporan as $key=>$val):
							 ?>
							<tr>
								<th scope="row" class="text-center"><?php echo $no; ?></th>
								<td style="white-space: nowrap; width: 1%;"><?php echo tgl_indo($val->tanggal); ?></td>
								<td><?php echo $val->nama; ?></td>
								<td><?php echo $val->alamat; ?></td>
								<td><?php echo $val->telepon; ?></td>
								<td><?php echo $val->pekerjaan; ?></td>
								<td><?php echo $val->informasi; ?></td>
								<td><?php echo $val->keterangan; ?></td>
						 	<tr>
						 	<?php $no++; endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="row">
			<table class="table table-borderless">
				<tbody>
					<tr>
						<td style="width: 20%;"></td>
						<td style="width: 30%;">Mengetahui,<br>Ketua,<br><br><br><br><?php echo $ttd->ketua; ?><br>NIP. <?php echo $ttd->ketua_nip; ?></td>
						<td style="width: 20%;"></td>
						<td style="width: 30%;"><span class="text-capitalize"><?php echo $nama_pa; ?></span>, <?php echo $now; ?><br>Panitera,<br><br><br><br><?php echo $ttd->panitera; ?><br>NIP. <?php echo $ttd->panitera_nip; ?></td>
					</tr>
				</tbody>
			</table>
		</div>

	</div>
	<!-- jQuery -->
	<script src="<?php echo base_url('asset/js/jquery/jquery.min.js') ?>"></script>
	<!-- Bootstrap 4 -->
	<script src="<?php echo base_url('asset/js/bootstrap/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>