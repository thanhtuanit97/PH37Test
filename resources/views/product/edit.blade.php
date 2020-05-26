@extends('layout.master')
@section('title')
Edit Product
@endsection

@section('content')
<a href="\products"><button type="button" class="btn btn-primary" style="margin-bottom: 10px;">Back</button></a>
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary" style="text-align: center;">Sửa Loại sản phẩm</h6>
            </div>

	   <div class="row" style="margin: 5px">
                    <div class="col-lg-4" >
                        <form role="form" action="{{ route('products.update', $product->id)}}" method="post">
							@csrf
							@method('PUT')
                            <fieldset class="form-group">
                                <label>Name : </label>
                                <input class="form-control" name="name" value="{{$product->name}}">
                                {{-- @error('name')
                                <div class="alert alert-danger">{{ $message}}</div>
                                @enderror --}}
                            </fieldset>

                            <fieldset class="form-group">
                                <label>Quantity : </label>
                                <input class="form-control" name="qty" value="{{$product->qty}}">
                                {{-- @error('qty')
                                <div class="alert alert-danger">{{ $message}}</div>
                                @enderror --}}
                            </fieldset>


                            <div class="form-group">
                                <label>Category_id : </label>
                                <select class="form-control" name="category_id">
                                    @foreach($category as $cate)
                                    <option value="{{$cate->id}}" {{ $product->category_id == $cate->id ? 'selected' : ''}}>{{$cate->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success">Update</button>
                            <button type="reset" class="btn btn-primary">Làm Lại</button>

                        </form>

                    </div>
        </div>
</div>
@endsection