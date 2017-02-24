<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h2><b><center> Create Data Penggajian </center></b></h2></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/Penggajian')); ?>">
                        <?php echo e(csrf_field()); ?>


                            <div class="col-md-12">
                                <label for="tunjangan_pegawai_id">
                                    Nama Pegawai
                                </label>
                                <select class="col-md-6 form-control" name="tunjangan_pegawai_id" required>
                                    <option value="">Pilih Nama Pegawai</option>
                                    <?php $__currentLoopData = $tunjangans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $baru): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                        <option value="<?php echo e($baru->id); ?>">
                                            <?php echo e($baru->pegawai->User->name); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                </select>
                                <span class="help-block">
                                    <?php echo e($errors->first('tunjangan_pegawai_id')); ?>

                                </span>
                                <div>
                                    <?php if(isset($error)): ?>
                                        ReCheck, Gaji SUdah Di Hitung
                                    <?php endif; ?>
                                </div> 
                            </div>
                            <div class="col-md-12">
                                <label for="status_pengambilan">
                                    Status Pengambilan
                                </label>
                                <select class="col-md-6 form-control" name="status_pengambilan" required>
                                    <option value="">Pilih Status Gaji</option>
                                    <option value="1">
                                        Di Ambil
                                    </option>
                                    <option value="0">
                                        Belum Di Amil
                                    </option>
                                </select>
                                <span class="help-block">
                                    <?php echo e($errors->first('status_pengamilan')); ?>

                                </span>
                                <div>
                                    <?php if(isset($error)): ?>
                                            ReCheck, Gaji Sudah diHitung
                                        <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-md-12" ><br><br>
                                <button type="submit" class="btn btn-success btn-block">Hitung</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>