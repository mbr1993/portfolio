@extends('admin.admin_master')

@section('admin')
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Works</h4>
                        <a href="{{route('admin.works.create')}}" type="button"
                           class="float-right btn btn-info mb-5">Add</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <tbody>
                                <tr>
                                    <th>#Id</th>
                                    <th>Tip</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                                @foreach($works as $work)
                                    <tr>
                                        <td>{{$work->id}}</td>
                                        <td>{{$work->workTip->name}}</td>
                                        <td>{{$work->name}}</td>
                                        <td>
                                            <img src="{{ asset(\Illuminate\Support\Facades\Storage::url($work->image))}}"
                                                 alt="" width="70" height="70">
                                        </td>
                                        <td>{{$work->created_at->format('Y-m-d')}}</td>
                                        <td><a href="{{ route('admin.works.edit',['work' => $work->id])}}"
                                               class="btn btn-success">Edit</a>
                                            <a href="{{ route('admin.works.delete', ['work' => $work->id]) }}"
                                               class="btn btn-danger" id="delete">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $works->links() }}
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
@endsection
