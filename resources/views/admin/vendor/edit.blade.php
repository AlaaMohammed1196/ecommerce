@extends('admin.layouts.index')
@section('content')

<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> البائعين </h3>
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
                    
 

    <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                      
                      
                        <form method='post' action="{{route('vendorupdate' ,$vendor->id)}}" enctype="multipart/form-data">
        {{csrf_field()}}
     

        <div class="form-group">
            <label>أسم البائع</label>
            <input type='text' name='username' class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}"   value="{{ $vendor->username  }}" readonly/>
            @if($errors->has('username'))
                <span class="invalid-feedback" role="alert">
                 <strong>{{$errors->first('username')}}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <label>البريد الالكتروني</label>
            <input type='email' name='email' class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"   value="{{ $vendor->email  }}" readonly/>
            @if($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                 <strong>{{$errors->first('email')}}</strong>
                </span>
            @endif
        </div>

        
         <div class="form-group">
            <label>الهاتف</label>
            <input type='text' name='phone' class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}"   value="{{ $vendor->phone  }}" readonly/>
            @if($errors->has('phone'))
                <span class="invalid-feedback" role="alert">
                 <strong>{{$errors->first('phone')}}</strong>
                </span>
            @endif
        </div>


            <div class="form-group">
            <label>السجل التجاري</label>
            <input type='text' name='numer_merhant' class="form-control{{ $errors->has('numer_merhant') ? ' is-invalid' : '' }}"   value="{{ $vendor->numer_merhant  }}" readonly/>
            @if($errors->has('numer_merhant'))
                <span class="invalid-feedback" role="alert">
                 <strong>{{$errors->first('numer_merhant')}}</strong>
                </span>
            @endif
        </div>

            <div class="form-group">
            
            <label>الحاله</label>
            <select name='status' class="form-control{{ $errors->has('status') ? ' is-invalid' : '' }}" >
                   <option value="1" {{ ($vendor->status == 1) ? 'selected' : ''}}>مفعل</option>
                  <option value="0"  {{ ($vendor->status == 0) ? 'selected'  : ''}}>غير مفعل</option>

            </selecst>
             
            @if($errors->has('status'))
                <span class="invalid-feedback" role="alert">
                 <strong>{{$errors->first('status')}}</strong>
                </span>
            @endif
        </div>


<br>س
       

        <div class="form-group">
            <input type='submit' name='send' value="تعديل" class="btn btn-info" />
        </div>
    </form>
                      
                      
                      
                       </div>
                </div>
              </div>

                  </div>
                </div>
                  </div>
                </div>
              </div>
            </div>


            @endsection