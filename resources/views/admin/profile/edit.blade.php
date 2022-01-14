@extends('admin.admin_master')

@section('admin')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <h4 class="box-title">Edit Profile</h4>
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
                        <form method="post" action="{{route('admin.profile.update', ['profile' => $profile->id])}}"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <h5>Name <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="name" class="form-control"
                                                   value="{{$profile->user->name}}">
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
                                        <h5>Job <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="job" class="form-control"
                                                   value="{{ $profile->job}}">
                                            <div class="help-block"></div>
                                        </div>
                                        @error('job')
                                        <div class="form-control-feedback">
                                            {{$error->first()}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <h5>Age <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="age" class="form-control"
                                                   value="{{ $profile->age}}">
                                            <div class="help-block"></div>
                                        </div>
                                        @error('age')
                                        <div class="form-control-feedback">
                                            {{$error}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <h5>Address <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="address" class="form-control"
                                                   value="{{ $profile->address}}">
                                            <div class="help-block"></div>
                                        </div>
                                        @error('address')
                                        <div class="form-control-feedback">
                                            {{$error}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <h5>Phone <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="phone" class="form-control"
                                                   value="{{ $profile->phone}}">
                                            <div class="help-block"></div>
                                        </div>
                                        @error('phone')
                                        <div class="form-control-feedback">
                                            {{$error}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <h5>Email<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="email" name="email" class="form-control"
                                                   value="{{ $profile->email}}">
                                            <div class="help-block"></div>
                                        </div>
                                        @error('email')
                                        <div class="form-control-feedback">
                                            {{$error}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <h5>Residence <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="residence" class="form-control"
                                                   value="{{ $profile->residence}}">
                                            <div class="help-block"></div>
                                        </div>
                                        @error('residence')
                                        <div class="form-control-feedback">
                                            {{$error}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-6">
                                    <div class="form-group">
                                        <h5>About User <span class="text-danger">*</span></h5>
                                        <div class="form-group">
                                            <textarea name="about_user" class="form-control" rows="3"
                                                      placeholder="">{{$profile->about_user}}</textarea>
                                        </div>
                                        @error('about_user')
                                        <div class="form-control-feedback">
                                            {{$error}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <h5>Available <span class="text-danger">*</span></h5>
                                            <input type="checkbox" name="is_available"
                                                   @if( $profile->is_available == 1) checked @endif
                                                   value="{{$profile->is_available == 1 ? 0 : 1}}" id="Checkbox_1">
                                            <label for="Checkbox_1"></label>
                                        </div>
                                        @error('is_available')
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
                                            <img
                                                src="{{asset(\Illuminate\Support\Facades\Storage::url($profile->avatar))}}"
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
