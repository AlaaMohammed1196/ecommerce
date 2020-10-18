@extends('vendor.layouts.index')
@section('content')

<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> الألوان </h3>
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
                    


    <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                      
                      
                        <form method='post' action="{{route('color.update',$color->id)}}" enctype="multipart/form-data">
        {{csrf_field()}}
            {{method_field('PUT')}}

        <div class="form-group">
            <label>اللون بالعربي</label>
            <input type='text' name='name_ar' class="form-control{{ $errors->has('name_ar') ? ' is-invalid' : '' }}"   value="{{ $color->name_ar  }}"/>
            @if($errors->has('name_ar'))
                <span class="invalid-feedback" role="alert">
                 <strong>{{$errors->first('name_ar')}}</strong>
                </span>
            @endif
        </div>

          <div class="form-group">
            <label>اللون بالأنجليزيه</label>
            <input type='text' name='name_en' class="form-control{{ $errors->has('name_en') ? ' is-invalid' : '' }}"   value="{{ $color->name_en  }}"/>
            @if($errors->has('name_en'))
                <span class="invalid-feedback" role="alert">
                 <strong>{{$errors->first('name_en')}}</strong>
                </span>
            @endif
        </div>
       

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