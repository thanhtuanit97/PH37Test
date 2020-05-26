@extends('layout.master');

@section('title')
List Product
@endsection

@section('content')
{{-- <a href="\products"><button type="button" class="btn btn-primary" style="margin-bottom: 10px;">Back</button></a> --}}
 <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary" style="text-align: center;"> List Products</h6>
            </div>
            <div class="card-body">
                <a href="/products/create"><button type="button" class="btn btn-primary" style="margin-bottom: 10px;">Add Products</button></a>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>STT</th>
                      <th>Name</th>
                      <th>Quantity</th>
                      <th>Category</th>
                      <th></th>
                    </tr>
                  </thead>
    
                  <tbody>
          @foreach($list_product as  $value)
                    <tr>
                      <td>{{$value->id}}</td>
                      <td>{{$value->name}}</td>
                      <td>{{$value->qty}}</td>
                      <td>{{$value->category->name}}</td>
                      <td>
                        <a href="products/{{$value->id}}/edit"><button class="btn btn-primary editproduct" title ="{{"Sửa"." ".$value->name}}"  data-toggle="modal" data-target="#edit" type="button" data-id="{{ $value->id }}" ><i class="fas fa-edit"></i></button></a>
                        <a href="{{route('products.show', $value->id)}}"><button class="btn btn-success deleteproduct" title ="{{"Show"." ".$value->name}}" data-toggle="modal" data-target="#delete" type="button" data-id="{{ $value->id }}" ><i class="fas fa-atom"></i></button></a>

                        
                          <form action="{{route('products.destroy', $value->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                          </form>
                          
                        
                      </td>
                    </tr>
          @endforeach
                  </tbody>
                </table>
                {{-- <div class="pull-right">{{ $product->links() }}</div> --}}
              </div>
            </div>
          </div>

@endsection