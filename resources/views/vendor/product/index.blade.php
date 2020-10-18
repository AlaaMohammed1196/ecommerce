@extends('vendor.layouts.index')

@section('content')

  <div class="main-panel">
 @if(session()->has('alert'))
     <div class='alert alert-success' style="width:300px;">
          {{session('alert')}}
              </div>
              @endif

          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> المنتجات

 </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{url('admin/vendor')}}">عرض</a></li>
                  <li class="breadcrumb-item active" aria-current="page">لوحه التحكم</li>
                </ol>
              </nav>
            </div>
            <div class="card">
             <div class="card-body">
               
                <div class="row">
                  <div class="col-12">
                    
<table id="order-listing" class="table dataTable no-footer" role="grid" aria-describedby="order-listing_info">
<thead>
<tr>

  <th>#</th>
                                <th>المنتج بالعربي</th>
                                 <th>المنتج بالانجليزيه</th>
                                 <th>السعر قبل تخفيض</th>
                                    <th>السعر بعد تخفيض</th>
                                
                                 <th>القسم</th>
                               
                                <th>الخيارات</th>
</tr>
</thead>

<tbody>
  @foreach($products as $product)
<tr>
  <td>{{$product->id}}</td>
  <td>{{$product->name_ar}}</td>
  <td>{{$product->name_en}}</td>
   <td>{{$product->price1}}</td>
    <td>{{$product->price2}}</td>
      <td>{{$product['categories']->name_ar}}</td>

  
  

<td>
      <a href="{{route('product.edit',$product->id)}}" class="btn btn-info btn-sm"><i class="mdi mdi-table-edit"></i></a>

       <a href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal-{{$product->id}}"><i class="mdi mdi-delete-forever"></i></a>
     
      <div class="modal fade" id="exampleModal-{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-{{$product->id}}"  aria-hidden="true">
                      <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel-{{$product->id}}"> حذف </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p>هل تود تنفيذ هذا الاجراء</p>
                          </div>
                          <div class="modal-footer">
                            <form action="{{route('product.destroy' ,$product->id)}}" method='POST'>
                            @csrf
                            {{method_field('Delete')}}

                            <input type='submit' name='send' value='نعم' class="btn btn-success">
                    
                          </form>
                            <button type="button" class="btn btn-light" data-dismiss="modal">لا</button>
                          </div>
                        </div>
                      </div>
                    </div>

   </td>
</tr>
@endforeach
</tbody>


</table>
                  </div>
                </div>
                  </div>
                </div>
              </div>
            </div>
            
@endsection