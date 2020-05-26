@extends('layout.master')

@section('title')
Show Product
@endsection

@section('content')
<a href="\products"><button type="button" class="btn btn-primary" style="margin-bottom: 10px;">Back</button></a>
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary" style="text-align: center">Show Product</h6>
            </div>
            <div class="card-body">
				
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead style="text-align: center;">
                    <tr>
                      <th>STT</th>
                      <th>Name</th>
                      <th>Category</th>
                    </tr>
                  </thead>
                  <tbody style="text-align: center;">
					
                    <tr>
                      <td>{{$product->id}}</td>
                     <td><a href="{{route('products.show',$product->id)}}" style="color: black">{{$product->name}}</a>
                     </td>
                     <td>{{$product->category->name}}</td>
                      {{-- <td> --}}
                      	{{-- <button class="btn btn-primary editcategory" title ="{{"Sửa"." ".$value->name}}"  data-toggle="modal" data-target="#edit" type="button" data-id="{{ $value->id }}" ><i class="fas fa-edit"></i></button>


                      	<button class="btn btn-danger deletecategory" title ="{{"Xóa"." ".$value->name}}" data-toggle="modal" data-target="#delete" type="button" data-id="{{ $value->id }}" ><i class="fas fa-trash-alt"></i></button>

                      	<a href="{{route('categories.show', $value->id)}}"><button class="btn btn-danger deletecategory" title ="{{"Show"." ".$value->name}}" data-toggle="modal" data-target="#delete" type="button" data-id="{{ $value->id }}" ><i class="fas fa-atom"></i></button></a> --}}
                    {{--   </td> --}}
                    </tr>
					
                  </tbody>
                </table>
                {{-- <div class="pull-right">{{ $list_category->links() }}</div> --}}
              </div>
            </div>
          </div>
@endsection