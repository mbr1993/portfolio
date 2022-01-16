@extends('admin.admin_master')

@section('admin')
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Price</h4>
                        <a href="{{route('admin.price.create')}}" type="button"
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
                                    <th>Price</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                                @foreach($prices as $price)
                                    <tr>
                                        <td>{{$price->id}}</td>
                                        <td>{{$price->name}}</td>
                                        <td>$ {{$price->price}}</td>
                                        <td>{{$price->created_at->format('Y-m-d')}}</td>
                                        <td><a href="{{route('admin.price.edit',['price' => $price->id])}}"
                                               class="btn btn-success">Edit</a>
                                            <a href="{{ route('admin.price.delete', ['price' => $price->id]) }}"
                                               class="btn btn-danger" id="delete">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $prices->links() }}
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
@endsection
