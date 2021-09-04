<?php $__env->startSection('title' , $pageName ); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1><?php echo e($pageName); ?></h1>
        <p><?php echo e($pageDescription); ?></p>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('sidebar'); ?>
    ##parent-placeholder-19bd1503d9bad449304cc6b4e977b74bac6cc771##
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('components.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eCommerce-laravel\resources\views/frontend/contact.blade.php ENDPATH**/ ?>