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

                        @if( count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="post" action="{{ route('admin.service.update', ['service'=>$service->id])}}"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <h5>Title <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" value="{{$service->title}}" name="title"
                                                   class="form-control">
                                            <div class="help-block"></div>
                                        </div>
                                        @error('name')
                                        <div class="form-control-feedback">
                                            {{$error}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <h5>Logo <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="file" name="logo" class="form-control" id="image">
                                            <div class="help-block"></div>
                                        </div>
                                        @error('image')
                                        <div class="form-control-feedback">
                                            {{$error}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <h5>Description<span class="text-danger">*</span></h5>
                                        <div class="form-group">
                                            <textarea name="description" class="form-control" rows="3"
                                                      placeholder="">{{$service->description}}</textarea>
                                        </div>
                                        @error('about_user')
                                        <div class="form-control-feedback">
                                            {{$error}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <img
                                                src="{{asset(\Illuminate\Support\Facades\Storage::url($service->logo))}}"
                                                alt="" width="150" height="120">
                                        </div>
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
