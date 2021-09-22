@section('title' , 'Admin Add Product')

<section class="admin-add-product">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                <h1>Add Product</h1>
                            </div>

                            <div class="col-md-6">
                                <a href="{{ route('admin.products') }}" class="btn btn-success pull-right">All Product</a>
                            </div>
                        </div>{{-- row --}}
                    </div>{{-- panel-heading --}}


                    <div class="panel-body">
                        <form action="" class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="addProduct">
                            <div class="form-group">
                                <label for="productName" class="col-md-4">Product Name</label>
                                <div class="col-md-4">
                                    <input
                                        type="text"
                                        name="productName"
                                        id="productName"
                                        class="form-control input-md"
                                        placeholder="Product Name"
                                        required
                                        wire:model="name"
                                        wire:keyup="generateSlug">
                                </div>
                            </div>{{-- form-group --}}

                            <div class="form-group">
                                <label for="productSlug" class="col-md-4">Product Slug</label>
                                <div class="col-md-4">
                                    <input
                                        type="text"
                                        name="productSlug"
                                        id="productSlug"
                                        class="form-control input-md"
                                        placeholder="Product Slug"
                                        required
                                        wire:model="slug">
                                </div>
                            </div>{{-- form-group --}}

                            <div class="form-group">
                                <label for="shortDescription" class="col-md-4">Short Description</label>
                                <div class="col-md-4">
                                    <textarea
                                        name="shortDescription"
                                        id="shortDescription"
                                        class="form-control input-md"
                                        placeholder="Short Description"
                                        cols="30" rows="10" required
                                        wire:model="short_description"></textarea>
                                </div>
                            </div>{{-- form-group --}}

                            <div class="form-group">
                                <label for="Description" class="col-md-4">Description</label>
                                <div class="col-md-4">
                                    <textarea
                                        name="Description"
                                        id="Description"
                                        class="form-control input-md"
                                        placeholder="Description"
                                        cols="30" rows="10" required
                                        wire:model="description"></textarea>
                                </div>
                            </div>{{-- form-group --}}

                            <div class="form-group">
                                <label for="regularPrice" class="col-md-4">Regular Price</label>
                                <div class="col-md-4">
                                    <input
                                        type="text"
                                        name="regularPrice"
                                        id="regularPrice"
                                        class="form-control input-md"
                                        placeholder="Regular Price"
                                        required
                                        wire:model="regular_price">
                                </div>
                            </div>{{-- form-group --}}

                            <div class="form-group">
                                <label for="salePrice" class="col-md-4">Sale Price</label>
                                <div class="col-md-4">
                                    <input
                                        type="text"
                                        name="salePrice"
                                        id="salePrice"
                                        class="form-control input-md"
                                        placeholder="Sale Price"
                                        required
                                        wire:model="sale_price">
                                </div>
                            </div>{{-- form-group --}}

                            <div class="form-group">
                                <label for="SKU" class="col-md-4">SKU</label>
                                <div class="col-md-4">
                                    <input
                                        type="text"
                                        name="SKU"
                                        id="SKU"
                                        class="form-control input-md"
                                        placeholder="SKU"
                                        required
                                        wire:model="SKU">
                                </div>
                            </div>{{-- form-group --}}

                            <div class="form-group">
                                <label for="stock" class="col-md-4">Stock</label>
                                <div class="col-md-4">
                                    <select name="stock" id="stock" class="form-control" wire:model="stock_status">
                                        <option value="instock">Instock</option>
                                        <option value="outofstock">Out of stock</option>
                                    </select>
                                </div>
                            </div>{{-- form-group --}}

                            <div class="form-group">
                                <label for="featured" class="col-md-4">Featured</label>
                                <div class="col-md-4">
                                    <select name="featured" id="featured" class="form-control" wire:model="featured">
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>
                            </div>{{-- form-group --}}

                            <div class="form-group">
                                <label for="quantity" class="col-md-4">Quantity</label>
                                <div class="col-md-4">
                                    <input
                                        type="text"
                                        name="quantity"
                                        id="quantity"
                                        class="form-control input-md"
                                        placeholder="Quantity"
                                        required
                                        wire:model="quantity">
                                </div>
                            </div>{{-- form-group --}}

                            <div class="form-group">
                                <label for="productImage" class="col-md-4">Product Image</label>
                                <div class="col-md-4">
                                    <input
                                        type="file"
                                        name="productImage"
                                        id="productImage"
                                        class="input-file"
                                        required
                                        wire:model="image">

                                        @if($image)
                                            <img src="{{$image->temporaryUrl()}}" width="70" alt="">
                                        @endif

                                </div>
                            </div>{{-- form-group --}}

                            <div class="form-group">
                                <label for="category" class="col-md-4">Category</label>
                                <div class="col-md-4">
                                    <select name="category" id="category" class="form-control" wire:model="category_id">
                                        <option value="">Select Category</option>

                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>{{-- form-group --}}

                            <div class="form-group">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-4">
                                    <input
                                        type="submit"
                                        value="Add"
                                        name="submit"
                                        id="submit"
                                        class="btn btn-primary">
                                </div>
                            </div>{{-- form-group --}}
                        </form>

                        @if (Session::has('messageAddProduct'))
                            <div class="alert alert-success" role="alert">{{Session::get('messageAddProduct')}}</div>
                        @endif

                    </div>{{-- panel-body --}}
                </div>{{-- panel --}}
            </div>{{-- col 12 --}}
        </div>{{-- row --}}
    </div>{{-- container --}}
</section>{{-- admin-add-product --}}

