@extends('layout.master')

@section('title')
Show Category
@endsection

@section('content')
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary" style="text-align: center">Show Category</h6>
            </div>
            <div class="card-body">
				
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead style="text-align: center;">
                    <tr>
                      <th>STT</th>
                      <th>Name</th>
                      
                    </tr>
                  </thead>
                  <tbody style="text-align: center;">
					
                    <tr>
                      <td>{{$category->id}}</td>
                     <td><a href="{{route('categories.show',$category->id)}}" style="color: black">{{$category->name}}</a>
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