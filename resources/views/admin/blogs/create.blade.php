@extends('admin.admin_master')

@section('admin')

    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <h4 class="box-title">Add blog</h4>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col">

                        <form method="post" action="{{route('admin.blogs.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <h5>Tip <span class="text-danger">*</span></h5>
                                        <div class="controls">

                                            <select name="blog_tip_id"
                                                    class="form-control @error('blog_tip_id') is-invalid @enderror">
                                                @foreach($tips as $tip)
                                                    <option value="{{$tip->id}}">{{$tip->name}}</option>
                                                @endforeach
                                            </select>

                                            <div class="help-block"></div>
                                        </div>
                                        @error('blog_tip_id')
                                        <div class="alert alert-default-danger">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <h5>Date <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="date" name="date"
                                                   class="form-control @error('date') is-invalid @enderror">
                                            <div class="help-block"></div>
                                        </div>
                                        @error('date')
                                        <div class="alert alert-default-danger">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <h5>Title <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="title"
                                                   class="form-control @error('title') is-invalid @enderror">
                                        </div>
                                        @error('title')
                                        <div class="alert alert-default-danger">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <h5>Content <span class="text-danger">*</span></h5>
                                        <div class="form-group">
                                            <textarea name="content"
                                                      class="form-control @error('content') is-invalid @enderror"
                                                      rows="3"
                                                      placeholder=""></textarea>
                                        </div>
                                        @error('content')
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
                            </div>
                            <div class="text-xs-right">
                                <button type="submit" class="btn btn-rounded btn-info">Create</button>
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
