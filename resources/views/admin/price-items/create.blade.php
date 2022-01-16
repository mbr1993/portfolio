@extends('admin.admin_master')

@section('admin')

    <section class="content">
        <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col">


                        <form method="post" action="{{route('admin.priceItem.store')}}">
                            @csrf
                            <div class="row">
                                <div class="col-3">
                                    <div class="form-group">
                                        <h5>Tip <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="price_id" class="form-control">
                                                @foreach($prices as $price)
                                                    <option value="{{$price->id}}">{{$price->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('price_id')
                                        <div class="form-control-feedback">
                                            {{$error}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <h5>Is included <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="is_include" class="form-control">
                                                    <option value="1">Included</option>
                                                    <option value="0">Not included</option>
{{--                                                @foreach($list as $item)--}}
{{--                                                    <option value="{{$item['value']}}">{{$item['name']}}</option>--}}
{{--                                                @endforeach--}}
                                            </select>
                                        </div>
                                        @error('is_include')
                                        <div class="form-control-feedback">
                                            {{$error}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <h5>Name <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="name" class="form-control">
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


@endsection
