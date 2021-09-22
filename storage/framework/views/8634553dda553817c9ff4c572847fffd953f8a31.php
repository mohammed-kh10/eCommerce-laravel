<?php $__env->startSection('title' , 'Add Category'); ?>

<section class="admin-add-category">
    <div class="container p-6">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Add New Category</h4>
                            </div>

                            <div class="col-md-6">
                                <a href="<?php echo e(route('admin.categories')); ?>" class="btn btn-success pull-right">All Categories</a>
                            </div>
                        </div>
                    </div>

                    <div class="panel-body">

                        <?php if(Session::has('messageAddCategory')): ?>
                            <div class="alert alert-success" role="alert"><?php echo e(Session::get('messageAddCategory')); ?></div>
                        <?php endif; ?>

                        <form action="" method="post" class="form-horizontal" wire:submit.prevent="storeCategory">
                            <div class="form-group">
                                <label for="categoryName" class="col-md-4 control-label">Category Name</label>
                                <div class="col-md-4">
                                    <input
                                        type="text"
                                        name="categoryName"
                                        id="categoryName"
                                        placeholder="Category Name"
                                        class="form-control input-lg"
                                        wire:keyup="generateSlug"
                                        wire:model="name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="categorySlug" class="col-md-4 control-label">Category Slug</label>
                                <div class="col-md-4">
                                    <input
                                        type="text"
                                        name="categorySlug"
                                        id="categorySlug"
                                        placeholder="Category Slug"
                                        class="form-control input-lg"
                                        wire:model="slug">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="categoryName" class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <input type="submit" value="Add" class="btn btn-primary">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\xampp\htdocs\eCommerce-laravel\resources\views/livewire/admin/admin-add-category-component.blade.php ENDPATH**/ ?>