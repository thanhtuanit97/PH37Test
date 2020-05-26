@extends('layout.master')

@section('title')
List Category
@endsection

@section('content')
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary" style="text-align: center">List Category</h6>
            </div>
            <div class="card-body">
				<a href="/products/create"><button type="button" class="btn btn-primary" style="margin-bottom: 10px;">Add Category</button></a>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>STT</th>
                      <th>Name</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
					@foreach($list_category as $key => $value)
                    <tr>
                      <td>{{$key+1}}</td>
                     <td><a href="{{route('list-product-by-cate', $value->id)}}" style="color: black">{{$value->name}}</a>
                      <td>
                      	<button class="btn btn-primary editcategory" title ="{{"Sửa"." ".$value->name}}"  data-toggle="modal" data-target="#edit" type="button" data-id="{{ $value->id }}" ><i class="fas fa-edit"></i></button>


                      	<button class="btn btn-danger deletecategory" title ="{{"Xóa"." ".$value->name}}" data-toggle="modal" data-target="#delete" type="button" data-id="{{ $value->id }}" ><i class="fas fa-trash-alt"></i></button>

                      	<a href="{{route('categories.show', $value->id)}}"><button class="btn btn-danger deletecategory" title ="{{"Show"." ".$value->name}}" data-toggle="modal" data-target="#delete" type="button" data-id="{{ $value->id }}" ><i class="fas fa-atom"></i></button></a>
                      </td>
                    </tr>
					@endforeach
                  </tbody>
                </table>
                {{-- <div class="pull-right">{{ $list_category->links() }}</div> --}}
              </div>
            </div>
          </div>
@endsection