@extends('admin.layouts.index')

@section('content')

  <div class="main-panel">
 @if(session()->has('alert'))
     <div class='alert alert-success' style="width:300px;">
          {{session('alert')}}
              </div>
              @endif

          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> الأقسام

 </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{url('admin/admin')}}">عرض</a></li>
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
                                <th>القسم بالعربي</th>
                                <th>القسم بالانجليزيه</th>
                                <th>الخيارات</th>
</tr>
</thead>

<tbody>
  @foreach($categories as $category)
<tr>
  <td>{{$category->id}}</td>
  <td>{{$category->name_ar}}</td>
  <td>{{$category->name_en}}</td>
  
  

<td>
      <a href="{{route('category.edit',$category->id)}}" class="btn btn-info"><i class="mdi mdi-table-edit"></i></a>

       <a href="" class="btn btn-danger" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal-{{$category->id}}"><i class="mdi mdi-delete-forever"></i></a>
     
      <div class="modal fade" id="exampleModal-{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-{{$category->id}}"  aria-hidden="true">
                      <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel-{{$category->id}}"> حذف </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p>هل تود تنفيذ هذا الاجراء</p>
                          </div>
                          <div class="modal-footer">
                            <form action="{{route('category.destroy' ,$category->id)}}" method='POST'>
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