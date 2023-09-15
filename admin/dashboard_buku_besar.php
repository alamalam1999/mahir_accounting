
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h3 class="m-0 text-dark">Buku Besar</h3>
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
				<div class="small-box bg-orange">
					<div class="inner">
						<h3><?=JumlahData($mysqli,"tb_unit")?></h3>

						<p>Data Rekening Perkiraan</p>
					</div>
					<div class="icon">
						<i class="fa fa-user"></i>
					</div>
					<a href="?hal=unit" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			
			<!-- ./col -->
			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-primary">
					<div class="inner">
						<h3><?=JumlahData($mysqli,"tb_index")?></h3>

						<p>Buku Besar</p>
					</div>
					<div class="icon">
					<i class="fa fa-book"></i>
					</div>
					<a href="?hal=ind" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>


			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-lime">
					<div class="inner">
						<h3><?=JumlahData($mysqli,"tb_index")?></h3>
						<p>Transaksi Jurnal Umum</p>
					</div>
					<div class="icon">
						<i class="fa fa-table"></i>
					</div>
					<a href="?hal=user" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>

			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-dark">
					<div class="inner">
						<h3><?=JumlahData($mysqli,"tb_index")?></h3>
						<p>-</p>
					</div>
					<div class="icon">
						<i class="fa fa-sharp fa-solid fa-lock"></i>
					</div>
					<a href="?hal=user" class="small-box-footer"><i class="fa fa-sharp fa-solid fa-lock"></i></a>
				</div>
			</div>

			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-dark">
					<div class="inner">
						<h3><?=JumlahData($mysqli,"tb_index")?></h3>
						<p>-</p>
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
						<p>-</p>
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
						<p>-</p>
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
						<p>-</p>
					</div>
					<div class="icon">
						<i class="fa fa-sharp fa-solid fa-lock"></i>
					</div>
					<a href="?hal=user" class="small-box-footer"><i class="fas fa-sharp fa-solid fa-lock"></i></a>
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