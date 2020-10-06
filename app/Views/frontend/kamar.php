<!DOCTYPE html>
<html>
<head>
	<title><?php echo $judul;?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/styles.css">
	<script src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm text-center headerdpn">
			<img src="<?php echo base_url();?>/assets/img/rsudpraya.png" width="100px"> 
			<h3> <b>ANJUNGAN MANDIRI RSUD PRAYA </b> </h3>
            <H4><i>BERI KEPASTIAN RAIH KEPERCAYAAN </i></H4>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<table class="table">
					<tr>
						<th>Nama Kamar</th>
						<th>Jumlah Bed</th>
						<th>Bed Terisi</th>
						<th>Bed Kosong</th>
					</tr>
					<?php foreach ($kamar as $row){ ?>
					<tr>
						<td><?php echo $row['nm_bangsal'];?></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<?php } ?>
				</table>
		    </div>
<a href="<?php echo base_url();?>/frontend/" style="text-decoration: none;">
                    <div class="info-box-2 bg-kamar zoom">
                    	<div class="icon">
                            <svg class="bi text-white" width="45" height="45">
                              <use xlink:href="<?php echo base_url();?>/assets/vendor/icons/bootstrap-icons.svg#door-open-fill"/>
                            </svg>
                        </div>
                        <div class="content">
                        	<div class="text">KEMBALI</div>
                        	<div class="number">MENU UTAMA</div>
                        </div>
                    </div>
                </a>
		</div>
	</div>

		      	
<h4 class="footer text-center">TERIMAKASIH ATAS KUNJUNGAN ANDA, 
SEMOGA ANDA DAN KELUARGA LEKAS SEMBUH</h4>

</body>
</html>