 <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                 
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">{{auth()->guard('vendor')->user()->username}}</span>
                  <span class="text-secondary text-small">بائع</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>

              <li class="nav-item">
              <a class="nav-link" href="{{url('admin/setting')}}">
                <span class="menu-title">الاعدادات</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>



            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-product" aria-expanded="false" aria-controls="ui-product">
                <span class="menu-title">المنتجات</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
              <div class="collapse" id="ui-product">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{url('vendor/product')}}">عرض</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{url('vendor/product/create')}}">أضافه</a></li>
                </ul>
              </div>
            </li>


                  <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-size" aria-expanded="false" aria-controls="ui-size">
                <span class="menu-title">المقاسات</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
              <div class="collapse" id="ui-size">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{url('vendor/size')}}">عرض</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{url('vendor/size/create')}}">أضافه</a></li>
                </ul>
              </div>
            </li>


                  <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-colors" aria-expanded="false" aria-controls="ui-colors">
                <span class="menu-title">الألوان</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
              <div class="collapse" id="ui-colors">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{url('vendor/color')}}">عرض</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{url('vendor/color/create')}}">أضافه</a></li>
                </ul>
              </div>
            </li>







           
           
          </ul>
        </nav>