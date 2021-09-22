<?php $__env->startSection('title' , 'Admin Categories'); ?>

<section class="admin-categories">
    <div class="container p-6">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                <h1>All Categories</h1>
                            </div>

                            <div class="col-md-6">
                                <a href="<?php echo e(route('admin.addcategory')); ?>" class="btn btn-success pull-right">Add New Category</a>
                            </div>
                        </div>
                    </div>

                    <div class="panel-body">

                        <?php if(Session::has('messageDeleteCategory')): ?>
                            <div class="alert alert-success" role="alert"><?php echo e(Session::get('messageDeleteCategory')); ?></div>
                        <?php endif; ?>

                        <table class="table table-active table-bordered table-hover table-striped">
                            <thead class="bg-danger">
                                <tr>
                                    <th>Id</th>
                                    <th>Category Name</th>
                                    <th>Slug</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($category->id); ?></td>
                                        <td><?php echo e($category->name); ?></td>
                                        <td><?php echo e($category->slug); ?></td>
                                        <td class="text-center">
                                            <a
                                            href="<?php echo e(route('admin.editcategory' , ['category_slug' => $category->slug])); ?>"
                                            class="btn btn-success"><i class="fa fa-edit"></i> Edit</a>

                                            <a
                                            href="#" class="btn btn-danger"
                                            wire:click.prevent="deleteCategory(<?php echo e($category->id); ?>)"><i class="fa fa-times"></i> Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>

                        <?php echo e($categories->links()); ?>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\xampp\htdocs\eCommerce-laravel\resources\views/livewire/admin/admin-category-component.blade.php ENDPATH**/ ?>