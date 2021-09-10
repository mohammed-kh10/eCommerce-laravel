<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php echo $__env->yieldContent('title' , 'unkown page'); ?></title>

        <link rel="styleSheet" href="<?php echo e(asset('css/vendor/bootstrap.min.css')); ?>">
        <link rel="styleSheet" href="<?php echo e(asset('css/all.min.css')); ?>">
        <link rel="styleSheet" href="<?php echo e(asset('css/app.css')); ?>">

    </head>
    <body>
        
        <?php echo $__env->make('components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        

        <?php echo $__env->make('components.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->yieldContent('content'); ?>

        <?php echo $__env->make('components.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <script src="<?php echo e(asset('js/vendor/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/vendor/jquery-3.5.1.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/frontend/app.js')); ?>"></script>
        <script src="<?php echo e(asset('js/backend/app.js')); ?>"></script>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\eCommerce-laravel\resources\views/components/master.blade.php ENDPATH**/ ?>