<?php $__env->startSection('title' , 'Products'); ?>


<section class="admin-products-page">
    <div class="container p-6">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                <h1>All Products</h1>
                            </div>

                            <div class="col-md-6">
                                <a href="<?php echo e(route('admin.addproduct')); ?>" class="btn btn-success pull-right">Add New Product</a>
                            </div>
                        </div>
                    </div>

                    <div class="panel-body">
                        <?php if(Session::has('messageDeleteProduct')): ?>
                            <div class="alert alert-success" role="alert"><?php echo e(Session::get('messageDeleteProduct')); ?></div>
                        <?php endif; ?>
                        <table class="table table-active table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Stock</th>
                                    <th>Price</th>
                                    <th>Category</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php $__currentLoopData = $Products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <tr>
                                    <td><?php echo e($product->id); ?></td>
                                    <td><img src="<?php echo e(asset('assets/images/products')); ?>/<?php echo e($product->image); ?>" width="70" alt="<?php echo e($product->name); ?>"></td>
                                    <td><?php echo e($product->name); ?></td>
                                    <td><?php echo e($product->stock_status); ?></td>
                                    <td><?php echo e($product->regular_price); ?></td>
                                    <td><?php echo e($product->category->name); ?></td>
                                    <td><?php echo e($product->created_at); ?></td>
                                    <td class="text-center">
                                        <a
                                        href="<?php echo e(route('admin.editproduct' , ['product_slug' => $product->slug])); ?>"
                                        class="btn btn-success"><i class="fa fa-edit"></i></a>

                                        <a
                                        href="#" class="btn btn-danger mx-4"
                                        wire:click.prevent="deleteProduct(<?php echo e($product->id); ?>)"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>
                        </table>
                        <?php echo e($Products->links()); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\xampp\htdocs\eCommerce-laravel\resources\views/livewire/admin/admin-product-component.blade.php ENDPATH**/ ?>