

<?php $__env->startSection('title', 'Dashboard '); ?>

<?php $__env->startPush('script_begin'); ?>
    
    <link rel="stylesheet" href="<?php echo e(asset('vendor/adminlte/plugin/fontawesome-free/css/all.min.css')); ?>">
    
    <link rel="stylesheet" href="<?php echo e(asset('vendor/adminlte/plugin/ionicons/css/ionicons.min.css')); ?>">
    
    <link rel="stylesheet" href="<?php echo e(asset('vendor/adminlte/css/adminlte.css')); ?>">
    
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('sidebar'); ?>
    <?php echo $__env->make('layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('index.content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script_end'); ?>
    

    <script src="<?php echo e(asset('vendor/jquery/1.9.0/jquery.min.js')); ?>"></script>
    
    <script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    
    <script src="<?php echo e(asset('vendor/adminlte/js/adminlte.js')); ?>"></script>
    
    <script src="<?php echo e(asset('vendor/adminlte/plugin/jquery-knob/jquery.knob.min.js')); ?>"></script>
    
    <script src="<?php echo e(asset('vendor/adminlte/plugin/sparklines/sparkline.js')); ?>"></script>

    




    <script>
        $(function() {
            $(".knob").knob({
                'min':0,
                'max':100,
                'readOnly': true,
                'width': 150,
                'height': 150,
                'dynamicDraw': true,
                'tickColorizeValues': true,
                // 'skin':'tron',
                // 'displayInput': false,
                'rotation': 'anticlockwise',
                'format' : function (value) {
                    return value + '%';
                }
            });
        });
    </script>

    
    <script type="text/javascript" src="<?php echo e(asset ('js/app.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('footer'); ?>
    <?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\xampp\htdocs\bos_web\resources\views/index/index.blade.php ENDPATH**/ ?>