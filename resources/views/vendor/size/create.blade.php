@extends('vendor.layouts.index')
@section('content')

<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> المقاسات </h3>
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
                      
                      
                        <form method='post' action="{{route('size.store')}}" enctype="multipart/form-data">
        {{csrf_field()}}

        <div class="form-group">
            <label>المقاس</label>
            <input type='text' name='size' class="form-control{{ $errors->has('size') ? ' is-invalid' : '' }}"   value="{{ old('size')  }}"/>
            @if($errors->has('size'))
                <span class="invalid-feedback" role="alert">
                 <strong>{{$errors->first('size')}}</strong>
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