<?php $__env->startSection('title' , 'Home Slider'); ?>

<section class="admin-home-slider">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                <h1>All Sliders</h1>
                            </div>

                            <div class="col-md-6">
                                <a href="<?php echo e(route('admin.addhomeslider')); ?>" class="btn btn-danger pull-right">Add Slider</a>
                            </div>
                        </div>
                    </div>

                    <div class="panel-body">
                        <table class="table table-active table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>SubTitle</th>
                                    <th>Price</th>
                                    <th>Link</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <tr>
                                    <td><?php echo e($slider->id); ?></td>
                                    <td><img src="<?php echo e(asset('assets/images/sliders')); ?>/<?php echo e($slider->image); ?>" width="170" alt=""></td>
                                    <td><?php echo e($slider->title); ?></td>
                                    <td><?php echo e($slider->subtitle); ?></td>
                                    <td><?php echo e($slider->price); ?></td>
                                    <td><?php echo e($slider->link); ?></td>
                                    <td><?php echo e($slider->status == 1 ? 'Active' : 'Inactive'); ?></td>
                                    <td><?php echo e($slider->created_at); ?></td>

                                    <td class="text-center">
                                        <a
                                        href="<?php echo e(route('admin.edithomeslider' , ['slide_id' => $slider->id])); ?>"
                                        class="btn btn-success"><i class="fa fa-edit"></i></a>

                                        <a
                                        href="#" class="btn btn-danger mx-4"
                                        wire:click.prevent="deleteSlide(<?php echo e($slider->id); ?>)"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>
                        </table>
                        <?php if(Session::has('messageDeleteSlide')): ?>
                            <div class="alert alert-success" role="alert"><?php echo e(Session::get('messageDeleteSlide')); ?></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\xampp\htdocs\eCommerce-laravel\resources\views/livewire/admin/admin-home-slider-component.blade.php ENDPATH**/ ?>