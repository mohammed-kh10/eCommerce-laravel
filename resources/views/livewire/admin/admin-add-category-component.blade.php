@section('title' , 'Add Category')

<section class="admin-add-category">

    <div class="container p-6">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Add New Category</h4>
                            </div>{{-- inside grid --}}

                            <div class="col-md-6">
                                <a href="{{ route('admin.categories') }}" class="btn btn-success pull-right">All Categories</a>
                            </div>{{-- inside grid --}}
                        </div>{{-- inside row --}}
                    </div>{{-- panel-heading --}}

                    <div class="panel-body">

                        @if (Session::has('messageAddCategory'))
                            <div class="alert alert-success" role="alert">{{Session::get('messageAddCategory')}}</div>
                        @endif

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
                            </div>{{-- form-group --}}

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
                            </div>{{-- form-group --}}

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <input type="submit" value="Add" class="btn btn-primary">
                                </div>
                            </div>{{-- form-group --}}
                        </form>
                    </div>{{-- panel-body --}}
                </div>{{-- panel --}}
            </div>{{-- col-md-12 --}}
        </div>{{-- row --}}
    </div>{{-- container --}}

</section>
