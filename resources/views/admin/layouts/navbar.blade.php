 <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                 
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">{{auth()->guard('admin')->user()->username}}</span>
                  <span class="text-secondary text-small">مدير المشروع</span>
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
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">المشرفين</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="/admin/admin">عرض</a></li>
                  <li class="nav-item"> <a class="nav-link" href="/admin/admin/create">أضافه</a></li>
                </ul>
              </div>
            </li>


             <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-vendor" aria-expanded="false" aria-controls="ui-vendor">
                <span class="menu-title">البائعين</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
              <div class="collapse" id="ui-vendor">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{url('admin/vendors')}}">عرض</a></li>
                
                </ul>
              </div>
            </li>



             <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-category" aria-expanded="false" aria-controls="ui-category">
                <span class="menu-title">الأقسام</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
              <div class="collapse" id="ui-category">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{url('admin/category')}}">عرض</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{url('admin/category/create')}}">أضافه</a></li>
                </ul>
              </div>
            </li>

                      <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-delivery" aria-expanded="false" aria-controls="ui-delivery">
                <span class="menu-title">المندوب</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
              <div class="collapse" id="ui-delivery">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{url('admin/delivery')}}">عرض</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{url('admin/delivery/create')}}">أضافه</a></li>
                </ul>
              </div>
            </li>


               <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-orders" aria-expanded="false" aria-controls="ui-orders">
                <span class="menu-title">الطلبات</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
              <div class="collapse" id="ui-orders">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{url('all/orders/type')}}">طلبات قيد التنفيذ</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{url('all/orders/on')}}">طلبات تم تنفيذه</a></li>
                 
                </ul>
              </div>
            </li>
           
           
          </ul>
        </nav>