@extends('admin.admin_master')

@section('admin')
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Blogs</h4>
                        <a href="{{route('admin.blogs.create')}}" type="button"
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
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                                @foreach($blogs as $blog)
                                    <tr>
                                        <td>{{$blog->id}}</td>
                                        <td>{{$blog->blogTip->name}}</td>
                                        <td>{{$blog->title}}</td>
                                        <td>
                                            <img src="{{asset(\Illuminate\Support\Facades\Storage::url($blog->photo))}}"
                                                 alt="" width="120" height="70">
                                        </td>
                                        <td>{{$blog->created_at->format('Y-m-d')}}</td>
                                        <td><a href="{{route('admin.blogs.edit',['blog' => $blog->id])}}"
                                               class="btn btn-success">Edit</a>
                                            <a href="{{ route('admin.blogs.delete', ['blog' => $blog->id]) }}"
                                               class="btn btn-danger" id="delete">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $blogs->links() }}
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
@endsection
