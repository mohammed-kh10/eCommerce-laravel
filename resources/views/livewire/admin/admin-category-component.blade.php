@section('title' , 'Admin Categories')

<section class="admin-categories">
    <div class="container p-6">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                <h1>All Categories</h1>
                            </div>{{-- inside grid --}}

                            <div class="col-md-6">
                                <a href="{{ route('admin.addcategory') }}" class="btn btn-success pull-right">Add New Category</a>
                            </div>{{-- inside grid --}}
                        </div>{{-- inside row --}}
                    </div>{{-- panel-heading --}}

                    <div class="panel-body">

                        @if (Session::has('messageDeleteCategory'))
                            <div class="alert alert-success" role="alert">{{Session::get('messageDeleteCategory')}}</div>
                        @endif

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
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{$category->id}}</td>
                                        <td>{{$category->name}}</td>
                                        <td>{{$category->slug}}</td>
                                        <td class="text-center">
                                            <a
                                            href="{{ route('admin.editcategory' , ['category_slug' => $category->slug]) }}"
                                            class="btn btn-success"><i class="fa fa-edit"></i> Edit</a>

                                            <a
                                            href="#" class="btn btn-danger"
                                            wire:click.prevent="deleteCategory({{$category->id}})"><i class="fa fa-times"></i> Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{$categories->links()}}

                    </div>{{-- panel-body --}}
                </div>{{-- panel --}}
            </div>{{-- col-12 --}}
        </div>{{-- row --}}
    </div>{{-- container --}}
</section>
