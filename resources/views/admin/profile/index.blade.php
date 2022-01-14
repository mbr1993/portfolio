@extends('admin.admin_master')

@section('admin')
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <tbody>
                                <tr>
                                    <th>#Id</th>
                                    <th>Avatar</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>
                                @foreach( $profiles as $profile)
                                    <tr>
                                        <td>{{$profile->id}}</td>
                                        <td>
                                            <img
                                                src="{{asset(\Illuminate\Support\Facades\Storage::url($profile->avatar))}}"
                                                alt="" width="70" height="70">
                                        </td>
                                        <td>{{$profile->user->name}}</td>
                                        <td>{{$profile->phone}}</td>
                                        <td>{{$profile->email}}</td>

                                        <td><a href="{{route('admin.profile.edit',['profile' => $profile->id])}}"
                                               class="btn btn-success">Edit</a>
                                        {{--                                            <a href="{{ route('admin.workTips.delete', ['tip' => $tip->id]) }}"--}}
                                        {{--                                               class="btn btn-danger" id="delete">Delete</a>--}}
                                        {{--                                        </td>--}}
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>

@endsection
