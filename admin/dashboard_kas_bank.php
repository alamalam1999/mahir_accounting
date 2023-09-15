
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h3 class="m-0 text-dark">Kas & Bank</h3>
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
				<div class="small-box bg-blue">
					<div class="inner">
						<h3><?=JumlahData($mysqli,"tb_unit")?></h3>

						<p>Kas Keluar</p>
					</div>
					<div class="icon">
						<i class='fa fa-arrow-right'></i>
					</div>
					<a href="?hal=unit" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			
			<!-- ./col -->
			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-info">
					<div class="inner">
						<h3><?=JumlahData($mysqli,"tb_index")?></h3>

						<p>Kas Masuk</p>
					</div>
					<div class="icon">
					<i class='fa fa-arrow-left'></i>
					</div>
					<a href="?hal=ind" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>


			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-purple">
					<div class="inner">
						<h3><?=JumlahData($mysqli,"tb_index")?></h3>
						<p>Transfer Kas</p>
					</div>
					<div class="icon">
						<i class='fas fa-cash-register'></i>
					</div>
					<a href="?hal=user" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>

			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-orange">
					<div class="inner">
						<h3><?=JumlahData($mysqli,"tb_index")?></h3>
						<p>Rekonsiliasi Bank</p>
					</div>
					<div class="icon">
						<i class='fa fa-building'></i>
					</div>
					<a href="?hal=user" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>

			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-green">
					<div class="inner">
						<h3><?=JumlahData($mysqli,"tb_index")?></h3>
						<p>Giro Masuk</p>
					</div>
					<div class="icon">
						<i class='fa fa-arrow-down'></i>
					</div>
					<a href="?hal=user" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>

			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-red">
					<div class="inner">
						<h3><?=JumlahData($mysqli,"tb_index")?></h3>
						<p>Giro Keluar</p>
					</div>
					<div class="icon">
						<i class='fa fa-arrow-up'></i>
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