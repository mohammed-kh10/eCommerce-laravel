@section('title' , 'Home Slider')

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
                                <a href="{{ route('admin.addhomeslider') }}" class="btn btn-danger pull-right">Add Slider</a>
                            </div>
                        </div>{{-- row --}}
                    </div>{{-- panel-heading --}}

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

                                @foreach ($sliders as $slider)

                                <tr>
                                    <td>{{$slider->id}}</td>
                                    <td><img src="{{asset('assets/images/sliders')}}/{{$slider->image}}" width="170" alt=""></td>
                                    <td>{{$slider->title}}</td>
                                    <td>{{$slider->subtitle}}</td>
                                    <td>{{$slider->price}}</td>
                                    <td>{{$slider->link}}</td>
                                    <td>{{$slider->status == 1 ? 'Active' : 'Inactive'}}</td>
                                    <td>{{$slider->created_at}}</td>

                                    <td class="text-center">
                                        <a
                                        href="{{route('admin.edithomeslider' , ['slide_id' => $slider->id])}}"
                                        class="btn btn-success"><i class="fa fa-edit"></i></a>

                                        <a
                                        href="#" class="btn btn-danger mx-4"
                                        wire:click.prevent="deleteSlide({{$slider->id}})"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>

                                @endforeach

                            </tbody>
                        </table>
                        @if (Session::has('messageDeleteSlide'))
                            <div class="alert alert-success" role="alert">{{Session::get('messageDeleteSlide')}}</div>
                        @endif
                    </div>{{-- panel-body --}}
                </div>{{-- panel --}}
            </div>{{-- col-md-12 --}}
        </div>{{-- row --}}
    </div>{{-- container --}}
</section>
