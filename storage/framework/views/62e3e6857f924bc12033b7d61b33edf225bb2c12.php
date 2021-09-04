<?php $__env->startSection('title' , 'Category'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        Category Page <?php echo e($userId); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eCommerce-laravel\resources\views/category.blade.php ENDPATH**/ ?>