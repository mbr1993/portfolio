@extends('admin.admin_master')

@section('admin')
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Prices Table</h4>
                        <a href="{{ route('admin.priceItem.create') }}" type="button"
                           class="float-right btn btn-behance">Add</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="thead-light">
                                <tr>
                                    <th>#</th>
                                    <th>Item</th>
                                    <th>Name</th>
                                    <th>Is included</th>
                                    <th>Created</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($items as $key => $item)
                                    <tr>
                                        <th scope="row">{{ $key+1 }}</th>
                                        <td>{{ $item->price->name }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->is_include}}</td>
                                        <td>{{ $item->created_at->format('Y-m-d')}}</td>
                                        <td>
                                            <a href="{{ route('admin.priceItem.edit',$item->id) }}"
                                               class="btn btn-info">Edit</a>
                                            <a href="{{ route('admin.priceItem.delete',['item'=>$item->id]) }}"
                                               id="delete" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $items->links() }}
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>

@endsection
