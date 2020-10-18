@extends('vendor.layouts.index')
@section('content')

<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> المنتجات </h3>
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
                      
                      
                        <form method='post' action="{{route('product.store')}}" enctype="multipart/form-data">
        {{csrf_field()}}

        <div class="form-group">
            <label>الأسم بالعربي</label>
            <input type='text' name='name_ar' class="form-control{{ $errors->has('name_ar') ? ' is-invalid' : '' }}"   value="{{ old('name_ar')  }}"/>
            @if($errors->has('name_ar'))
                <span class="invalid-feedback" role="alert">
                 <strong>{{$errors->first('name_ar')}}</strong>
                </span>
            @endif
        </div>

          <div class="form-group">
            <label>الأسم بالأنجليزيه</label>
            <input type='text' name='name_en' class="form-control{{ $errors->has('name_en') ? ' is-invalid' : '' }}"   value="{{ old('name_en')  }}"/>
            @if($errors->has('name_en'))
                <span class="invalid-feedback" role="alert">
                 <strong>{{$errors->first('name_en')}}</strong>
                </span>
            @endif
        </div>

            <div class="form-group">
            <label>الوصف بالعربيه</label>
            <textarea name='body_ar' class="form-control{{ $errors->has('body_ar') ? ' is-invalid' : '' }}" />{{ old('body_en')  }}</textarea>
            @if($errors->has('body_ar'))
                <span class="invalid-feedback" role="alert">
                 <strong>{{$errors->first('body_ar')}}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label>الوصف بالأنجليزيه</label>
            <textarea name='body_en' class="form-control{{ $errors->has('body_en') ? ' is-invalid' : '' }}" />{{ old('body_ar')  }}</textarea>
            @if($errors->has('body_en'))
                <span class="invalid-feedback" role="alert">
                 <strong>{{$errors->first('body_en')}}</strong>
                </span>
            @endif
        </div>

         <div class="form-group">
            <label>الوصف بالأنجليزيه</label>
            <textarea name='body_en' class="form-control{{ $errors->has('body_en') ? ' is-invalid' : '' }}" />{{ old('body_ar')  }}</textarea>
            @if($errors->has('body_en'))
                <span class="invalid-feedback" role="alert">
                 <strong>{{$errors->first('body_en')}}</strong>
                </span>
            @endif
        </div>


         <div class="form-group">
            <label>السعر قبل التخفيض</label>
            <input type='text' name='price1' class="form-control{{ $errors->has('price1') ? ' is-invalid' : '' }}"   value="{{ old('price1')  }}"/>
            @if($errors->has('price1'))
                <span class="invalid-feedback" role="alert">
                 <strong>{{$errors->first('price1')}}</strong>
                </span>
            @endif
        </div>
         <div class="form-group">
            <label>السعر بعد التخفيض</label>
            <input type='text' name='price2' class="form-control{{ $errors->has('price2') ? ' is-invalid' : '' }}"   value="{{ old('price2')  }}"/>
            @if($errors->has('price2'))
                <span class="invalid-feedback" role="alert">
                 <strong>{{$errors->first('price2')}}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label>القسم</label>
            <select name='dep_id' class="form-control{{ $errors->has('dep_id') ? ' is-invalid' : '' }}"/>
               @foreach($categoreis as $category)
               <option value="{{$category->id}}">{{$category->name_ar}}</option>
               @endforeach
            </select>
            @if($errors->has('dep_id'))
                <span class="invalid-feedback" role="alert">
                 <strong>{{$errors->first('dep_id')}}</strong>
                </span>
            @endif
        </div>

         <div class="form-group">
            <label>المقاسات</label>
            <select name='size_id[]' multiple class="form-control{{ $errors->has('size_id') ? ' is-invalid' : '' }}"/>
               @foreach($sizes as $size)
               <option value="{{$size->id}}">{{$size->size}}</option>
               @endforeach
            </select>
            @if($errors->has('size_id'))
                <span class="invalid-feedback" role="alert">
                 <strong>{{$errors->first('size_id')}}</strong>
                </span>
            @endif
        </div>

         <div class="form-group">
            <label>المقاسات</label>
            <select name='color_id[]'  multiple class="form-control{{ $errors->has('color_id') ? ' is-invalid' : '' }}"/>
               @foreach($colors as $color)
               <option value="{{$color->id}}">{{$color->name_ar}}</option>
               @endforeach
            </select>
            @if($errors->has('color_id'))
                <span class="invalid-feedback" role="alert">
                 <strong>{{$errors->first('color_id')}}</strong>
                </span>
            @endif
        </div>

        
                       <div class="form-group">
                        <label>أضافه صور</label>
                        <input type="file" name="image[]" class="file-upload-default" multiple>
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info @error('image') is-invalid @enderror" disabled >
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-gradient-primary" type="button">أضافه</button>
                          </span>

                        </div>
                               @error('image')
                                    <span class="invalid-feedback" style='display:block' role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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