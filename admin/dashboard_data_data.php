
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h3 class="m-0 text-dark">Data-data</h3>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<?php if($_SESSION['admin_status']=='Admin Transaksi'){ ?>
	<section class="content">
		<div class="row">
			
			<div class="col-lg-3 col-6">
			<!-- small box -->
				<div class="small-box bg-primary">
					<div class="inner">
						<h3><?=JumlahData($mysqli,"tb_index")?></h3>

						<p>Data Nama Alamat</p>
					</div>
					<div class="icon">
						<i class="fa fa-user"></i>
					</div>
					<a href="?hal=data_nama_alamat" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			
			<!-- ./col -->
			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-orange">
					<div class="inner">
						<h3><?=JumlahData($mysqli,"tb_index")?></h3>

						<p>Data Rekening</p>
					</div>
					<div class="icon">
					<i class="fa fa-id-card"></i>
					</div>
					<a href="?hal=ind" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>

			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-info">
					<div class="inner">
						<h3><?=JumlahData($mysqli,"tb_akun")?></h3>

						<p>Data Mata Uang</p>
					</div>
					<div class="icon">
					<i class="fa fa-database"></i>
					</div>
					<a href="?hal=akun" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>

			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-green">
					<div class="inner">
						<h3><?=JumlahData($mysqli,"tb_index")?></h3>
						<p>Data Proyek</p>
					</div>
					<div class="icon">
						<i class="fa fa-cogs"></i>
					</div>
					<a href="?hal=user" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>

			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-dark">
					<div class="inner">
						<h3><?=JumlahData($mysqli,"tb_index")?></h3>
						<p>Data Produk</p>
					</div>
					<div class="icon">
						<i class="fa fa-sharp fa-solid fa-lock"></i>
					</div>
					<a href="?hal=user" class="small-box-footer"><i class="fas fa-sharp fa-solid fa-lock"></i></a>
				</div>
			</div>

			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-dark">
					<div class="inner">
						<h3><?=JumlahData($mysqli,"tb_index")?></h3>
						<p>Satuan Pengukuran</p>
					</div>
					<div class="icon">
						<i class="fa fa-sharp fa-solid fa-lock"></i>
					</div>
					<a href="?hal=user" class="small-box-footer"><i class="fas fa-sharp fa-solid fa-lock"></i></a>
				</div>
			</div>

			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-purple">
					<div class="inner">
						<h3><?=JumlahData($mysqli,"tb_index")?></h3>
						<p>Data Pajak</p>
					</div>
					<div class="icon">
						<i class="fa fa-percent"></i>
					</div>
					<a href="?hal=user" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>

			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-fuchsia">
					<div class="inner">
						<h3><?=JumlahData($mysqli,"tb_index")?></h3>
						<p>Data Departemen</p>
					</div>
					<div class="icon">
						<i class="fa fa-sitemap"></i>
					</div>
					<a href="?hal=user" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>

			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-dark">
					<div class="inner">
						<h3><?=JumlahData($mysqli,"tb_index")?></h3>
						<p>Data Gudang</p>
					</div>
					<div class="icon">
						<i class="fa fa-sharp fa-solid fa-lock"></i>
					</div>
					<a href="?hal=user" class="small-box-footer"><i class="fas fa-sharp fa-solid fa-lock"></i></a>
				</div>
			</div>

			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-maroon">
					<div class="inner">
						<h3><?=JumlahData($mysqli,"tb_index")?></h3>
						<p>Data Harta Tetap</p>
					</div>
					<div class="icon">
						<i class="fa fa-gavel"></i>
					</div>
					<a href="?hal=user" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>







			<!-- ./col -->
		</div>
		<!-- /.row -->
	</section>

<?php }else{ ?>

	<section class="content">
		<div class="row">
			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-info">
					<div class="inner">
						<h3><?=JumlahData($mysqli,"tb_unit")?></h3>

						<p>Unit Usaha</p>
					</div>
					<div class="icon">
						<i class="fa fa-user"></i>
					</div>
					<a href="#" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-warning">
					<div class="inner">
						<h3><?=JumlahData($mysqli,"tb_index")?></h3>

						<p>Data Index</p>
					</div>
					<div class="icon">
						<i class="fa fa-book"></i>
					</div>
					<a href="#" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>

			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-primary">
					<div class="inner">
						<h3><?=JumlahData($mysqli,"tb_akun")?></h3>

						<p>Data Akun</p>
					</div>
					<div class="icon">
						<i class="fa fa-book"></i>
					</div>
					<a href="#" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>

			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-success">
					<div class="inner">
						<h3><?=JumlahData($mysqli,"tb_index")?></h3>
						<p>Data User</p>
					</div>
					<div class="icon">
						<i class="fa fa-book"></i>
					</div>
					<a href="#" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
		</div>
		<!-- /.row -->
	</section>
	<?php } ?>