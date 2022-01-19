@extends('admin.admin_master')

@section('admin')

    <section class="content">
        <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col">

                        <form method="post" action="{{route('admin.priceItem.update',['item'=>$item->id] )}}">
                            @method('put')
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <h5>Tip <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="price_id"
                                                    class="form-control @error('price_id') is-invalid @enderror">
                                                @foreach($prices as $price)
                                                    <option value="{{$price->id}}"
                                                            @if($price->id == $item->price_id) selected @endif>{{$price->name}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('price_id')
                                        <div class="alert alert-default-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <h5>Is included <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="is_include"
                                                    class="form-control @error('is_include') is-invalid @enderror">
                                                <option value="1" @if($item->is_include == 1 ) selected @endif>
                                                    Included
                                                </option>
                                                <option value="0" @if($item->is_include == 0 ) selected @endif>
                                                    Not included
                                                </option>
                                            </select>
                                        </div>
                                        @error('is_include')
                                        <div class="alert alert-default-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <h5>Name <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="name" value="{{ $item->name }}"
                                                   class="form-control @error('name') is-invalid @enderror">
                                        </div>
                                        @error('name')
                                        <div class="alert alert-default-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                            <div class="text-xs-right">
                                <button type="submit" class="btn btn-rounded btn-success">Update</button>
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


@endsection
