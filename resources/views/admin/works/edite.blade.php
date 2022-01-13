@extends('admin.admin_master')

@section('admin')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <h4 class="box-title">Add blog</h4>
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
                        <form method="post" action="{{route('admin.works.update', ['work' => $work->id])}}"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <h5>Tip <span class="text-danger">*</span></h5>
                                        <div class="controls">

                                            <select name="work_tip_id" class="form-control">
                                                @foreach($tips as $tip)
                                                    <option value="{{$tip->id}}"
                                                            @if($tip->id == $work->work_tip_id ) selected @endif >
                                                        {{$tip->name}}</option>
                                                @endforeach
                                            </select>

                                            <div class="help-block"></div>
                                        </div>
                                        @error('work_tip_id')
                                        <div class="form-control-feedback">
                                            {{$error}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <h5>Title <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="name" class="form-control"
                                                   value="{{$work->name}}">
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
                                        <h5>Image <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="file" name="image" class="form-control" id="image">
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
                                        <div class="controls">
                                            <img src="{{asset(\Illuminate\Support\Facades\Storage::url($work->image))}}"
                                                 alt="" width="150" height="150">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-xs-right">
                                <button type="submit" class="btn btn-rounded btn-info">Submit</button>
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

    <script type="text/javascript">
        $(document).ready(function () {
            $('#image').change(function (e) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>

@endsection