<?php $__env->startSection('content'); ?>
<div class="col-md-10">
	<div class="panel panel-default">
		<div class="panel-heading"><center><b><h2>Data Penggajian</h2></b></center></div>

		<div class="">
			<div class="col-md-10">
				<a href="<?php echo e(url('Penggajian/create')); ?>" class="btn btn-primary form-control">Create Data</a>
			</div>
			<table class="table table-striped table-hover table-bordered">
				<div class="col-md-10">
					<p>
						<img width="120px" height="100px" src="<?php echo url('asset/img/') ?>/ <?php echo $baru->tunjangan_pegawai->pegawai->photo; ?>" class="img-circle" alt="Cinque Terre">
					</p>
					<h3>
						<?php echo e($baru->tunjangan_pegawai->pegawai->User->name); ?>

					</h3>
					<h4>
						<?php echo e($baru->tunjangan_pegawai->pegawai->nip); ?>

					</h4>
					<b>
						<?php if($baru->tanggal_pengambilan == ""&&$baru->status_pengambilan == "0"): ?>
							Gaji Belum Diambil
						<?php elseif($baru->tanggal_pengambilan == ""||$baru->status_pengambilan == "0"): ?>
							Gaji Belum Diambil
						<?php else: ?>
							Gaji Sudah Diambil Pada Tanggal
							<?php echo e($baru->tanggal_pengambilan); ?>

						<?php endif; ?>
					</b>
					<h5>
						Gaji Lembur Sebesar Rp.<?php echo e($baru->jumlah_uang_lembur); ?> ,
						Gaji Pokok Sebesar Rp.<?php echo e($baru->gaji_pokok); ?> ,
						Mendapat Tunjangan Sebesar Rp.<?php echo e($baru->tunjangan_pegawai->tunjangan->besaran_uang); ?> ,
						Jadi Total Gaji Rp.<?php echo e($baru->gaji_total); ?>

					</h5>
				</div>
			</table>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>