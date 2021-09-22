@section('title' , 'Edit Slider')

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
                                <a href="{{ route('admin.homeslider') }}" class="btn btn-danger pull-right">All Sliders</a>
                            </div>
                        </div>{{-- row --}}
                    </div>{{-- panel-heading --}}

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
                            </div>{{-- form-group --}}

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
                            </div>{{-- form-group --}}

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
                            </div>{{-- form-group --}}

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
                            </div>{{-- form-group --}}

                            <div class="form-group">
                                <label for="image" class="col-md-4 control-label">Image</label>
                                <div class="col-md-4">
                                    <input
                                        type="file"
                                        name="image"
                                        id="image"
                                        class="form-control input-md input-file"
                                        wire:model="newImage">

                                    @if ($newImage)
                                        <img src="{{ $newImage->temporaryUrl() }}" width="120" alt="">
                                    @else
                                        <img src="{{ asset('assets/images/sliders')}}/{{$image}}" width="120" alt="">
                                    @endif

                                </div>
                            </div>{{-- form-group --}}

                            <div class="form-group">
                                <label for="status" class="col-md-4 control-label">Status</label>
                                <div class="col-md-4">
                                    <select name="status" id="status" class="form-control" wire:model="status">
                                        <option value="0">Inactive</option>
                                        <option value="1">Active</option>
                                    </select>
                                </div>
                            </div>{{-- form-group --}}

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <input
                                        type="submit"
                                        value="Update"
                                        class="btn btn-danger">
                                </div>
                            </div>{{-- form-group --}}
                        </form>

                        @if (Session::has('messageEditSlide'))
                            <div class="alert alert-success" role="alert">{{Session::get('messageEditSlide')}}</div>
                        @endif

                    </div>{{-- panel-body --}}
                </div>{{-- panel --}}
            </div>{{-- col-md-12 --}}
        </div>{{-- row --}}
    </div>{{-- container --}}
</section>
