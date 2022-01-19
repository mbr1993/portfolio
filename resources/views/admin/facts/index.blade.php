@extends('admin.admin_master')

@section('admin')
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Fun Facts</h4>
                        <a href="{{route('admin.facts.create')}}" type="button"
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
                                    <th>Image</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                                @foreach($facts as $fact)
                                    <tr>
                                        <td>{{$fact->id}}</td>
                                        <td>{{$fact->title}}</td>
                                        <td>
                                            <img src="{{asset(\Illuminate\Support\Facades\Storage::url($fact->icon))}}"
                                                 alt="" width="100" height="70">
                                        </td>
                                        <td>{{$fact->created_at->format('Y-m-d')}}</td>
                                        <td><a href="{{route('admin.facts.edit',['fact' => $fact->id])}}"
                                               class="btn btn-success">Edit</a>
                                            <a href="{{ route('admin.facts.delete', ['fact' => $fact->id]) }}"
                                               class="btn btn-danger" id="delete">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $facts->links() }}
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
@endsection
