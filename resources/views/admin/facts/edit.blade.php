@extends('admin.admin_master')

@section('admin')

    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <h4 class="box-title">Edit</h4>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col">

                        <form method="post" action="{{ route('admin.facts.update',['fact'=>$fact->id]) }}"
                              enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <h5>Title <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="title" value="{{ $fact->title }}"
                                                   class="form-control @error('title') is-invalid @enderror">
                                        </div>
                                        @error('title')
                                        <div class="alert alert-default-danger">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <h5>Image <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="file" name="image"
                                                   class="form-control @error('image') is-invalid @enderror">
                                            <div class="help-block"></div>
                                        </div>
                                        @error('image')
                                        <div class="alert alert-default-danger">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <img src="{{asset(\Illuminate\Support\Facades\Storage::url($fact->icon))}}"
                                                 alt="" width="160" height="150">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-xs-right">
                                <button type="submit" class="btn btn-rounded btn-info">Update</button>
                            </div>
                        </form>

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.box-body -->
        </div>
    </section>


@endsection
