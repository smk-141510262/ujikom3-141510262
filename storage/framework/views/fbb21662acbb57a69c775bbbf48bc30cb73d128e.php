<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h2><b><center> Tambah Data Penggajian </center></b></h2></div>
                <div class="panel-body">
                    <?php echo Form::open(['url'=>'/Pegawai', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data', 'files'=>true]); ?>

                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>