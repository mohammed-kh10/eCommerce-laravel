@section('title' , 'Products')


<section class="admin-products-page">
    <div class="container p-6">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                <h1>All Products</h1>
                            </div>{{-- inside grid --}}

                            <div class="col-md-6">
                                <a href="{{ route('admin.addproduct') }}" class="btn btn-success pull-right">Add New Product</a>
                            </div>{{-- inside grid --}}
                        </div>{{-- inside row --}}
                    </div>{{-- panel-heading --}}

                    <div class="panel-body">
                        @if (Session::has('messageDeleteProduct'))
                            <div class="alert alert-success" role="alert">{{Session::get('messageDeleteProduct')}}</div>
                        @endif
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

                                @foreach ($Products as $product)

                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td><img src="{{ asset('assets/images/products') }}/{{$product->image}}" width="70" alt="{{$product->name}}"></td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->stock_status}}</td>
                                    <td>{{$product->regular_price}}</td>
                                    <td>{{$product->category->name}}</td>
                                    <td>{{$product->created_at}}</td>
                                    
                                    <td class="text-center">
                                        <a
                                        href="{{ route('admin.editproduct' , ['product_slug' => $product->slug]) }}"
                                        class="btn btn-success"><i class="fa fa-edit"></i></a>

                                        <a
                                        href="#" class="btn btn-danger mx-4"
                                        wire:click.prevent="deleteProduct({{$product->id}})"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>

                                @endforeach

                            </tbody>
                        </table>
                        {{$Products->links()}}
                    </div>{{-- panel-body --}}
                </div>{{-- panel --}}
            </div>{{-- col 12 --}}
        </div>{{-- row --}}
    </div>{{-- container --}}
</section>
