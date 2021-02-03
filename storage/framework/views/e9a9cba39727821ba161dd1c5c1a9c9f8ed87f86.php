<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#1E375B">
    <meta name="msapplication-navbutton-color" content="#1E375B">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#1E375B">

    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="icon" type="image/png" sizes="48x48" href="<?php echo e(asset('img/icon.ico')); ?>">

    <?php echo $__env->yieldPushContent('script_begin'); ?>
</head>

<body id="__UENO" class="hold-transition sidebar-mini">

<div class="wrapper">
    <?php echo $__env->yieldContent('sidebar'); ?>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->yieldContent('footer'); ?>
</div>

<?php echo $__env->yieldPushContent('script_end'); ?>

</body>
</html>
<?php /**PATH C:\Program Files\xampp\htdocs\bos_web\resources\views/layout/template.blade.php ENDPATH**/ ?>