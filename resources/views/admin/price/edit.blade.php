@extends('admin.admin_master')

@section('admin')

    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <h4 class="box-title">Add Service</h4>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col">

                        <form method="post" action="{{ route('admin.price.update',['price'=>$price->id])}}"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <h5>Name <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" value="{{ $price->name }}" name="name"
                                                   class="form-control @error('name') is-invalid @enderror">
                                            <div class="help-block"></div>
                                        </div>
                                        @error('name')
                                        <div class="alert alert-default-danger">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <h5>Price <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" value="{{ $price->price }}" name="price"
                                                   class="form-control @error('price') is-invalid @enderror">
                                            <div class="help-block"></div>
                                        </div>
                                        @error('price')
                                        <div class="alert alert-default-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>


                            </div>
                            <div class="text-xs-right">
                                <button type="submit" class="btn btn-rounded btn-info">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
