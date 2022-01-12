@extends('admin.admin_master')

@section('admin')

            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Blog tips</h4>
                                <a href="{{route('admin.blogTips.create')}}" type="button"
                                   class="float-right btn btn-info mb-5">Add</a>
                            </div>
                        <!-- /.box-header -->
                            <div class="box-body no-padding">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <tbody>
                                        <tr>
                                            <th>#Id</th>
                                            <th>Name</th>
                                            <th>Date</th>
                                            <th>Actions</th>
                                        </tr>
                                        @foreach($tips as $tip)
                                            <tr>
                                                <td>{{$tip->id}}</td>
                                                <td>{{$tip->name}}</td>
                                                <td>{{$tip->created_at->format('Y-m-d')}}</td>
                                                <td><a href="{{route('admin.blogTips.edit',['tip' => $tip->id])}}"
                                                       class="btn btn-success">Edit</a>
                                                    <a href="{{ route('admin.blogTips.delete', ['tip' => $tip->id]) }}"
                                                       class="btn btn-danger" id="delete">Delete</a>
                                                </td>
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
