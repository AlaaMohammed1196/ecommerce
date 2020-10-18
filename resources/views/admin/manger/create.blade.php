@extends('admin.layouts.index')
@section('content')

<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> المشرفين </h3>
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
                      
                      
                        <form method='post' action="{{route('save_admin')}}" enctype="multipart/form-data">
        {{csrf_field()}}

        <div class="form-group">
            <label>أسم المشرف</label>
            <input type='text' name='username' class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}"   value="{{ old('username')  }}"/>
            @if($errors->has('username'))
                <span class="invalid-feedback" role="alert">
                 <strong>{{$errors->first('username')}}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <label>البريد الالكتروني</label>
            <input type='email' name='email' class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"   value="{{ old('email')  }}"/>
            @if($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                 <strong>{{$errors->first('email')}}</strong>
                </span>
            @endif
        </div>

        
         <div class="form-group">
            <label>كمه المرور</label>
            <input type='text' name='password' class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"   value="{{ old('password')  }}"/>
            @if($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                 <strong>{{$errors->first('password')}}</strong>
                </span>
            @endif
        </div>
       

        <div class="form-group">
            <input type='submit' name='send' value="حفظ" class="btn btn-info" />
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