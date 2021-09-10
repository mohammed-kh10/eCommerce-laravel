<?php $__env->startSection('title' , $pageName ); ?>

<?php $__env->startSection('sidebar'); ?>
    ##parent-placeholder-19bd1503d9bad449304cc6b4e977b74bac6cc771##
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="contact margin">
        <h1><?php echo e($pageDescription); ?></h1>
        <div class="row">
            <div class="cform col-7">
                <h2>Contact Form</h2>
                <form action="">
                    <div class="name">
                        <div style="margin-right: 140px;">
                            <label for="">First Name</label>
                            <input width="140%" type="text" placeholder="Enter First Name">
                        </div><!-- class first name -->
                        <div>
                            <label for="">Last Name</label>
                            <input width="140%" type="text" placeholder="Enter Last Name">
                        </div><!-- class last name -->
                    </div><!-- class names -->
                    <label for="">Email</label>
                    <input type="email" placeholder="Enter Email">
                    <label for="">Subject</label>
                    <input type="text" placeholder="Enter Subject">
                    <label for="">Message</label>
                    <textarea name="" id="" cols="30" rows="10" placeholder="Write Your Message"></textarea>
                    <input type="submit" value="Send Message">
                </form>
            </div><!-- col-7 -->
        </div><!-- row -->
    </section><!-- end of section contact -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eCommerce-laravel\resources\views/frontend/contact.blade.php ENDPATH**/ ?>