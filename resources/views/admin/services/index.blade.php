@extends('admin.admin_master')

@section('admin')
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Serices</h4>
                        <a href="{{ route('admin.service.create' )}}" type="button"
                           class="float-right btn btn-info mb-5">Add</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <tbody>
                                <tr>
                                    <th>#Id</th>
                                    <th>Title</th>
                                    <th>Logo</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                                @foreach( $services as $service)
                                    <tr>
                                        <td>{{$service->id}}</td>
                                        <td>{{$service->title}}</td>
                                        <td>
                                            <img
                                                src="{{asset(\Illuminate\Support\Facades\Storage::url($service->logo))}}"
                                                alt="" width="90" height="70">
                                        </td>
                                        <td>{{$service->description}}</td>
                                        <td><a href="{{route('admin.service.edit',['service' => $service->id])}}"
                                               class="btn btn-success">Edit</a>
                                            <a href="{{ route('admin.service.delete', ['service' => $service->id]) }}"
                                               class="btn btn-danger" id="delete">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $services->links() }}
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>

@endsection
