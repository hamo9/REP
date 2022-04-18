<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Erp system</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item text-right {{ Request::is('/')? 'active' : ''; }}" >
        <a class="nav-link" href="{{ url('/') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>الرئيسيه</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item" dir="rtl">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo0"
            aria-expanded="true" aria-controls="collapseTwo">
            {{-- <i class="fas fa-fw fa-cog"></i> --}}
            <span class="pr-1">نقاط البيع</span>
        </a>
        <div id="collapseTwo0" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="#">لائحه الطلبات</a>
                <a class="collapse-item" href="">قنوات البيع</a>
                <a class="collapse-item" href="">خصم تجاري</a>
                <a class="collapse-item" href="">المزامنه اليوميه</a>
                <a class="collapse-item" href="">التقرير</a>
                <a class="collapse-item" href="">POS</a>
                <a class="collapse-item" href="">منفذ البيع</a>
                <a class="collapse-item" href="">الاعدادات</a>
            </div>
        </div>
    </li>

    <li class="nav-item" dir="rtl">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo1"
            aria-expanded="true" aria-controls="collapseTwo">
            {{-- <i class="fas fa-fw fa-cog"></i> --}}
            <span class="pr-1">الحسابات</span>
        </a>
        <div id="collapseTwo1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="#">تقارير بيانيه</a>
                <a class="collapse-item" href="#">العمليات</a>
                <a class="collapse-item" href="#">القيود اليوميه</a>
                <a class="collapse-item" href="#">التحويل بين الحسابات</a>
                <a class="collapse-item" href="#">شجره الحسابات</a>
                <a class="collapse-item" href="#">تسويات</a>
                <a class="collapse-item" href="#">التقارير</a>
                <a class="collapse-item" href="#">الاعدادات</a>
            </div>
        </div>
    </li>

    <li class="nav-item" dir="rtl">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo2"
            aria-expanded="true" aria-controls="collapseTwo">
            {{-- <i class="fas fa-fw fa-cog"></i> --}}
            <span class="pr-1">المبيعات</span>
        </a>
        <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="#">اقتراحات</a>
                <a class="collapse-item" href="#">عروض اسعار</a>
                <a class="collapse-item" href="#">الفواتير</a>
                <a class="collapse-item" href="#">مدفوعات</a>
                <a class="collapse-item" href="#">الاشعارات</a>
                <a class="collapse-item" href="#">الاصناف</a>
            </div>
        </div>
    </li>

    <li class="nav-item" dir="rtl">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo3"
            aria-expanded="true" aria-controls="collapseTwo">
            {{-- <i class="fas fa-fw fa-cog"></i> --}}
            <span class="pr-1">المشتريات</span>
        </a>
        <div id="collapseTwo3" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="#">الاصناف</a>
                <a class="collapse-item" href="#">الموردين</a>
                <a class="collapse-item" href="#">طلب شراء</a>
                <a class="collapse-item" href="#">اوامر الشراء</a>
                <a class="collapse-item" href="#">تقارير</a>
                <a class="collapse-item" href="#">الاعدادات</a>
            </div>
        </div>
    </li>

    <li class="nav-item" dir="rtl">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo4"
            aria-expanded="true" aria-controls="collapseTwo">
            {{-- <i class="fas fa-fw fa-cog"></i> --}}
            <span class="pr-1">عمولات البيع</span>
        </a>
        <div id="collapseTwo4" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="#">احصائيات</a>
                <a class="collapse-item" href="#">ايصال العموله</a>
                <a class="collapse-item" href="#">موظفي البيع</a>
                <a class="collapse-item" href="#">عملاء البيع</a>
                <a class="collapse-item" href="#">برنامج العموله</a>
                <a class="collapse-item" href="#">الاعدادت</a>
            </div>
        </div>
    </li>

    <li class="nav-item {{ Request::is('suppliers')? 'active' : ''; }}">
        <a class="nav-link" href="{{ url('/suppliers') }}">
            <i class="fa fa-user" aria-hidden="true"></i>
            <span class="pr-1">الموردين</span></a>
    </li>

    <li class="nav-item {{ Request::is('clients')? 'active' : ''; }}" >
        <a class="nav-link " href="{{ url('/clients') }}">
            <i class="far fa-user"></i>
            <span class="pr-1">العملاء</span></a>
    </li>

    <li class="nav-item" dir="rtl">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo5"
            aria-expanded="true" aria-controls="collapseTwo">
            {{-- <i class="fas fa-fw fa-cog"></i> --}}
            <span class="pr-1">المخازن</span>
        </a>
        <div id="collapseTwo5" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="#">الاصناف</a>
                <a class="collapse-item" href="#">قسيمه استلام المخزون</a>
                <a class="collapse-item" href="#">قسيمه تسليم المخازن</a>
                <a class="collapse-item" href="#">مذكرة التسليم الداخلي</a>
                <a class="collapse-item" href="#">المفقودات والتسويات</a>
                <a class="collapse-item" href="#">المخازن</a>
                <a class="collapse-item" href="#">الجرد</a>
                <a class="collapse-item" href="#">التقرير</a>
                <a class="collapse-item" href="#">الاعدادت</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-dollar-sign"></i>
            <span class="pr-1">مصروفات</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fad fa-sticky-note"></i>
            <span class="pr-1">العقود</span></a>
    </li>

    <li class="nav-item" dir="rtl">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo6"
            aria-expanded="true" aria-controls="collapseTwo">
            {{-- <i class="fas fa-fw fa-cog"></i> --}}
            <span class="pr-1">الموارد البشريه/ الرواتب</span>
        </a>
        <div id="collapseTwo6" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="#">الموظفين</a>
                <a class="collapse-item" href="#">الحضور</a>
                <a class="collapse-item" href="#">العمولات</a>
                <a class="collapse-item" href="#">الخصومات</a>
                <a class="collapse-item" href="#">مكافئات</a>
                <a class="collapse-item" href="#">التأمينات</a>
                <a class="collapse-item" href="#">كشوف الراتب</a>
                <a class="collapse-item" href="#">قوالب كشوف الراتب</a>
                <a class="collapse-item" href="#">ضرائب الدخل</a>
                <a class="collapse-item" href="#">التقارير</a>
                <a class="collapse-item" href="#">الاعدادت</a>
            </div>
        </div>
    </li>

    <li class="nav-item" dir="rtl">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo7"
            aria-expanded="true" aria-controls="collapseTwo">
            {{-- <i class="fas fa-fw fa-cog"></i> --}}
            <span class="pr-1">شئون العاملين</span>
        </a>
        <div id="collapseTwo7" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="#">لوحه التحكم</a>
                <a class="collapse-item" href="#">الوصف الوظيفي</a>
                <a class="collapse-item" href="#">علي قوائم الانتظار</a>
                <a class="collapse-item" href="#">شئون العاملين</a>
                <a class="collapse-item" href="#">لتدريب</a>
                <a class="collapse-item" href="#">العقود</a>
                <a class="collapse-item" href="#">الاقسام</a>
                <a class="collapse-item" href="#">مراجعه قائمه المفصولين</a>
                <a class="collapse-item" href="#">اسأله الدعم</a>
                <a class="collapse-item" href="#">التقارير</a>
                <a class="collapse-item" href="#">الاعدادت</a>
            </div>
        </div>
    </li>

    <li class="nav-item" dir="rtl">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo8"
            aria-expanded="true" aria-controls="collapseTwo">
            {{-- <i class="fas fa-fw fa-cog"></i> --}}
            <span class="pr-1">اداره الاصول الثابته</span>
        </a>
        <div id="collapseTwo8" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="#">الاصول الثابته</a>
                <a class="collapse-item" href="#">تقسيم الاصول</a>
                <a class="collapse-item" href="#">الاعدادت</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fad fa-sticky-note"></i>
            <span class="pr-1">مشروعات</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fad fa-sticky-note"></i>
            <span class="pr-1">مهام</span></a>
    </li>

    <li class="nav-item" dir="rtl">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo9"
            aria-expanded="true" aria-controls="collapseTwo">
            {{-- <i class="fas fa-fw fa-cog"></i> --}}
            <span class="pr-1">المنتجات</span>
        </a>
        <div id="collapseTwo9" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="#">فواتير المنتجات</a>
                <a class="collapse-item" href="#">اشتراك المنتجات</a>
                <a class="collapse-item" href="#">مجموعه  المنتجات</a>
                <a class="collapse-item" href="#">طلبات المنتجات</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="utilities-color.html">Colors</a>
                <a class="collapse-item" href="utilities-border.html">Borders</a>
                <a class="collapse-item" href="utilities-animation.html">Animations</a>
                <a class="collapse-item" href="utilities-other.html">Other</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">



    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="login.html">Login</a>
                <a class="collapse-item" href="register.html">Register</a>
                <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="404.html">404 Page</a>
                <a class="collapse-item" href="blank.html">Blank Page</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
