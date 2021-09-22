<?php $__env->startSection('title' , 'Edit Slider'); ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                <h1>Edit Slider</h1>
                            </div>

                            <div class="col-md-6">
                                <a href="<?php echo e(route('admin.homeslider')); ?>" class="btn btn-danger pull-right">All Sliders</a>
                            </div>
                        </div>
                    </div>

                    <div class="panel-body">
                        <form action="" class="form-horizontal" wire:submit.prevent="updateSlide">
                            <div class="form-group">
                                <label for="title" class="col-md-4 control-label">Title</label>
                                <div class="col-md-4">
                                    <input
                                        type="text"
                                        name="title"
                                        id="title"
                                        placeholder="title"
                                        class="form-control input-md"
                                        wire:model="title">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="subtitle" class="col-md-4 control-label">Sub Title</label>
                                <div class="col-md-4">
                                    <input
                                        type="text"
                                        name="subtitle"
                                        id="subtitle"
                                        placeholder="SubTitle"
                                        class="form-control input-md"
                                        wire:model="subtitle">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="price" class="col-md-4 control-label">Price</label>
                                <div class="col-md-4">
                                    <input
                                        type="text"
                                        name="price"
                                        id="price"
                                        placeholder="price"
                                        class="form-control input-md"
                                        wire:model="price">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="link" class="col-md-4 control-label">Link</label>
                                <div class="col-md-4">
                                    <input
                                        type="text"
                                        name="link"
                                        id="link"
                                        placeholder="link"
                                        class="form-control input-md"
                                        wire:model="link">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="image" class="col-md-4 control-label">Image</label>
                                <div class="col-md-4">
                                    <input
                                        type="file"
                                        name="image"
                                        id="image"
                                        class="form-control input-md input-file"
                                        wire:model="newImage">

                                    <?php if($newImage): ?>
                                        <img src="<?php echo e($newImage->temporaryUrl()); ?>" width="120" alt="">
                                    <?php else: ?>
                                        <img src="<?php echo e(asset('assets/images/sliders')); ?>/<?php echo e($image); ?>" width="120" alt="">
                                    <?php endif; ?>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="status" class="col-md-4 control-label">Status</label>
                                <div class="col-md-4">
                                    <select name="status" id="status" class="form-control" wire:model="status">
                                        <option value="0">Inactive</option>
                                        <option value="1">Active</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <input
                                        type="submit"
                                        value="Update"
                                        class="btn btn-danger">
                                </div>
                            </div>
                        </form>

                        <?php if(Session::has('messageEditSlide')): ?>
                            <div class="alert alert-success" role="alert"><?php echo e(Session::get('messageEditSlide')); ?></div>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\xampp\htdocs\eCommerce-laravel\resources\views/livewire/admin/admin-edit-home-slider-component.blade.php ENDPATH**/ ?>