<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h2><b><center> Data Penggajian </center></b></h2></div>

                <div class="panel-body">
                    <a href="<?php echo e(url('/Penggajian/create')); ?>" class="btn btn-primary btn-block">Create Data Penggajian</a><br>
                    <center><?php echo e($penggajians->links()); ?></center>
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <td><center><b>No</b></center></td>
            <td><center><b>Photo</b></center></td>
            <td><center><b>NIP</b></center></td>
            <td><center><b>Nama Pegawai</b></center></td>
            <td class="2"><center><b>Status</b></center></td>
            <td colspan="3"><center><b>Action</b></center></td>
        </tr>
    </thead>
    <tbody>
        <?php 
            $i=1;
         ?>
         <?php 
            ;
         ?>
        <?php $__currentLoopData = $penggajians; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $baru): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <tr>
                <td>
                    <?php echo e($i++); ?>

                </td>
                <td>
                    <img src="<?php echo e(asset('img/'.$baru->tunjangan_pegawai->pegawai->photo.'')); ?>" width="75" height="75" class="img-rounded img-responsive" alt="Responsive image">
                </td>
                <td>
                    <?php echo e($baru->tunjangan_pegawai->pegawai->nip); ?>

                </td>
                <td>
                    <?php echo e($baru->tunjangan_pegawai->pegawai->User->name); ?>

                </td>
                <td>
                    <?php if($baru->tanggal_pengambilan == ""&&$baru->status_pengambilan == "0"): ?>
                        Belum Diambil
                    <?php elseif($baru->tanggal_pengambilan == ""||$baru->status_penggambilan == "0"): ?>
                        Belum Diambil
                </td>
                <td>
                    <a class="btn btn-success" href="<?php echo e(route('Penggajian.edit', $baru->id)); ?>">Ambil</a>
                    <?php else: ?>
                        Sudah Diambiln / <?php echo e($baru->tanggal_pengambilan); ?>

                    <?php endif; ?>
                </td>
                <td>
                    <a class="btn btn-info" href="<?php echo e(route('Penggajian.show', $baru->id)); ?>">Detail</a>
                </td>
                <td>
                    <?php echo Form::open(['method'=>'DELETE','route'=>['Penggajian.destroy',$baru->id]]); ?>

                    <?php echo Form::submit('Delete',['class'=>'btn btn-danger']); ?>

                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>