

  <head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/email.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons 2.0.0 -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="{{ asset('dist/fonts/fonts-fa.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap-rtl.min.css') }}">
    <link href="{{asset('plugins/fullcalendar/fullcalendar.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('plugins/fullcalendar/fullcalendar.print.css')}}" rel="stylesheet" type="text/css" media='print' />
    <!-- jquery ui -->
    <link rel="stylesheet" href="{{ asset('dist/css/jquery-ui.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('plugins/iCheck/flat/blue.css') }}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{ asset('plugins/morris/morris.css') }}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
    <!-- Date Picker -->
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker-bs3.css') }}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
    <!-- DataTables -->

    <link rel="stylesheet" href="{{ asset('plugins/datatables/dataTables.bootstrap.css') }}">

        <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/customer.css') }}">
<link rel ='stylesheet' href="{{asset('css/toastr.min.css')}}"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') }}"</script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}"</script>
    <![endif]-->
@yield('style')
  </head>

  <body class="skin-blue sidebar-mini"  >

    <div class="wrapper" >

      <header class="main-header">
        <!-- Logo -->
        <a href="/admin" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini">اﻟﻤﺨﺘﺒﺮ</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">ﻣﺨﺘﺒﺮاﺕ اﻟﻤﻮاﺩ ﻭاﻟﺘﺮﺑﺔ</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">ﺗﺒﺪﻳﻞ اﻟﻘﻮاﺋﻢ</span>
          </a>
          <div class="navbar-custom-menu" id="app-2"  >
            <ul class="nav navbar-nav" >
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">5</span>
                </a>
                <ul class="dropdown-menu" >
                  <li class="header">ﺭﺳﺎﺋﻞ 5 ﻟﺪﻳﻚ</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">

                      <li><!-- start message -->
                        <a href="">
                          <div class="pull-right">
                          <img src="{{ asset('dist/img/rrasheed.jpg')}}" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            م. الفني
                            <small><i class="fa fa-clock-o"></i> 5 دقائق</small>
                          </h4>
                          <p>نرجوا اعتماد تقري شركة الباطون..</p>
                          </a>
                          </li><!-- end message -->
                          <li>
                          <a href="#">
                          <div class="pull-right">
                          <img src="{{ asset('dist/img/rrasheed.jpg')}}" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            السكرتير
                            <small><i class="fa fa-clock-o"></i> 2 ساعة</small>
                          </h4>
                          <p>لا تنسى موعد اليوم بعد الظهر</p>
                          </a>
                          </li>
                          <li>
                          <a href="#">
                          <div class="pull-right">
                          </div>
                          <img src="{{ asset('dist/img/rrasheed.jpg')}}" class="img-circle" alt="User Image">
                          <h4>
                            شركة الباطون
                            <small><i class="fa fa-clock-o"></i> اليوم</small>
                          </h4>
                          <p>هل التقرير جاهز</p>
                          </a>
                          </li>
                          <li>
                          <a href="#">
                          <div class="pull-right">
                            <img src="{{ asset('dist/img/rrasheed.jpg')}}" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            المحاسب
                            <small><i class="fa fa-clock-o"></i> أمس</small>
                          </h4>
                          <p>تمت عملية تحويل الرصيد</p>
                          </a>
                          </li>
                          <li>
                          <a href="#">
                          <div class="pull-right">
                          </div>
                          <img src="{{ asset('dist/img/rrasheed.jpg')}}" class="img-circle" alt="User Image">
                          <h4>
                            السكرتير
                            <small><i class="fa fa-clock-o"></i> 2 يوم</small>
                          </h4>
                          <p>اجتماع مجلس الشركة..</p>
                          </a>
                          </li>
                          </ul>
                          </li>
                          <li class="footer"><a href="#">مشاهدة الكل</a></li>
                          </ul>
              </li>
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">10</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">لديك 10 تنبيهات</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> تقرير شركة البلاط بحاجة لاعتماد
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-warning text-yellow"></i> تم اعتماد التقرير المالي
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-red"></i> تقرير شركة البلاط بحاجة لاعتماد
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-shopping-cart text-green"></i> تقرير شركة البلاط بحاجة لاعتماد
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> تقرير شركة البلاط بحاجة لاعتماد
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">مشاهدة الكل</a></li>
                </ul>
              </li>

            <!-- Tasks: style can be found in dropdown.less -->
            <li class="dropdown tasks-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-flag-o"></i>
                <span class="label label-danger">9</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">لديك 9 مهام</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <li><!-- Task item -->
                      <a href="#">
                        <h3>
                          تجهيز التقرير الإداري
                          <small class="pull-left">20%</small>
                        </h3>
                        <div class="progress xs">
                          <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">20% اكتمل</span>
                          </div>
                        </div>
                      </a>
                    </li><!-- end task item -->
                    <li><!-- Task item -->
                      <a href="#">
                        <h3>
                          زيارات الشركات
                          <small class="pull-left">40%</small>
                        </h3>
                        <div class="progress xs">
                          <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">40% اكتمل</span>
                          </div>
                        </div>
                      </a>
                    </li><!-- end task item -->
                    <li><!-- Task item -->
                      <a href="#">
                        <h3>
                          متابعة تحديث جهاز القياس
                          <small class="pull-left">30%</small>
                        </h3>
                        <div class="progress xs">
                          <div class="progress-bar progress-bar-red" style="width: 30%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">30% اكتمل</span>
                          </div>
                        </div>
                      </a>
                    </li><!-- end task item -->
                    <li><!-- Task item -->
                      <a href="#">
                        <h3>
                          مراجعة التقرير المالي
                          <small class="pull-left">80%</small>
                        </h3>
                        <div class="progress xs">
                          <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">80% اكتمل</span>
                          </div>
                        </div>
                      </a>
                    </li><!-- end task item -->
                  </ul>
                </li>
                <li class="footer">
                  <a href="#">مشاهدة الكل</a>
                </li>
              </ul>
            </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="{{ asset('dist/img/rrasheed.jpg')}}" class="user-image" alt="User Image">
                  <span class="hidden-xs">رائد رشيد</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="{{ asset('dist/img/rrasheed.jpg')}}" class="img-circle" alt="User Image">
                    <p>
                     رائد رشيد
                      <small>عضو منذ 2017</small>
                    </p>
                  </li>
                  <!-- Menu Body -->

                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">الإعدادات</a>
                    </div>
                    <div class="pull-left">
                      <a href="../login/login.php" class="btn btn-default btn-flat">تسجيل خروج</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>


      <!-- Left side column. contains the logo and sidebar -->
 <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-right image">
              <img src="{{ asset('dist/img/rrasheed.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>رائد رشيد</p>
              <a href="#"><i class="fa fa-circle text-success"></i>نشط</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="بحث عن ...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu"data-widget="tree">
            <li class="header">لوحة التحكم</li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>ثوابت النظام</span> <i class="fa fa-angle-left pull-left"></i>
              </a>
              <ul class="treeview-menu ">
                <li><a href="../01_system/01_days.php"><i class="fa fa-circle-o"></i>ايام الاسبوع</a></li>
                <li><a href="../01_system/02_companies.php"><i class="fa fa-circle-o"></i>المؤسسات</a></li>
                <li><a href="../01_system/03_sampleTypes.php" id="aa"><i class="fa fa-circle-o"></i>انواع العينات</a></li>
                <li><a href="../01_system/04_projects.php"><i class="fa fa-circle-o"></i>المشاريع</a></li>
                <li><a href="../01_system/05_companyTypes.php"><i class="fa fa-circle-o"></i> انواع المؤسسات</a></li>
                <li><a href="../01_system/06_tests.php"><i class="fa fa-circle-o"></i>الاختبارات</a></li>
                <li><a href="../01_system/07_checks.php"><i class="fa fa-circle-o"></i>الفحوصات</a></li>
				        <li><a href="../01_system/08_countries.php"><i class="fa fa-circle-o"></i> البلاد</a></li>
                <li><a href="../01_system/09_governorates.php"><i class="fa fa-circle-o"></i> المحافظة</a></li>
                <li><a href="../01_system/10_cities.php"><i class="fa fa-circle-o"></i> المدن</a></li>
                <li><a href="../01_system/11_branches.php"><i class="fa fa-circle-o"></i> الفروع</a></li>
              </ul>
            </li>
              <li class="treeview">
              <a href="#">
                <i class="fa fa-users"></i> <span> طلبات فحص العينات</span> <i class="fa fa-angle-left pull-left"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../02_samples/managerSamplesList.php"><i class="fa fa-circle-o"></i>قائمة طلبات فحص عينة</a></li>
                <li><a href="../02_samples/sampleRequest.php"><i class="fa fa-circle-o"></i>طلب فحص عينة جديد</a></li>
				<li><a href="../02_samples/sampleRequestShow.php"><i class="fa fa-circle-o"></i>عرض طلب فحص عينة</a></li>
              </ul>
            </li>
               <li class="treeview">
              <a href="#">
                <i class="fa fa-users"></i> <span>الفحوصات</span> <i class="fa fa-angle-left pull-left"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../03_checks/checkerChecksList.php"><i class="fa fa-circle-o"></i>قائمة الفحوصات</a></li>
                <li><a href="../03_checks/concreteCompressionCheckAddEdit.php"><i class="fa fa-circle-o"></i> طلب فحص جديد</a></li>
				<li><a href="../03_checks/concreteCompressionCheckReport.php"><i class="fa fa-circle-o"></i> عرض فحص</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-users"></i> <span>المستخدمون</span> <i class="fa fa-angle-left pull-left"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../04_users/usersList.php"><i class="fa fa-circle-o"></i> قائمة المستخدمين</a></li>
                <li><a href="../04_users/userAddEdit.php"><i class="fa fa-circle-o"></i> مستخدم جديد</a></li>
                <li><a href="../04_users/usersPermissions.php"><i class="fa fa-circle-o"></i> صلاحيات المستخدمين</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-users"></i> <span>التقارير</span> <i class="fa fa-angle-left pull-left"></i>
              </a>
              <ul class="treeview-menu">
				<li><a href="#"><i class="fa fa-circle-o"></i>عرض تقارير<i class="fa fa-angle-left pull-left"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="../03_checks/concreteCompressionCheckReport.php"><i class="fa fa-circle-o"></i>ضغط باطون</a></li>
                   <li><a href="../03_checks/fieldDensityCheckReport.php"><i class="fa fa-circle-o"></i> كثافة حقلية</a></li>
                    <li><a href="../03_checks/inspectionPavingBricksCheck(Interlock).php"><i class="fa fa-circle-o"></i> برى طوب الرصف ( انترلوك )</a></li>
                    <li><a href="../03_checks/porcelainTilesCheckResults.php"><i class="fa fa-circle-o"></i>  بلاط بورسلان ( ارضيات )</a></li>
                    <li><a href="../03_checks/ceramicTilesCheckResultsFlooring.php"><i class="fa fa-circle-o"></i>  بلاط كراميكا ( ارضيات )</a></li>
                    <li><a href="../03_checks/ceramicTilesCheckResultsWall.php"><i class="fa fa-circle-o"></i>  بلاط كراميكا ( حوائط )</a></li>
                     <li><a href="../03_checks/concreteTilesCheckResults.php"><i class="fa fa-circle-o"></i> بلاط اسمنتي</a></li>
                    <li><a href="../03_checks/landTilesCheckResults.php"><i class="fa fa-circle-o"></i> بلاط ارضي ( تيرازو )</a></li>
                    <li><a href="../03_checks/checkThicknessThicknessPaintAluminum.php"><i class="fa fa-circle-o"></i> سماكة الطلاء للألمونیوم</a></li>
                     <li><a href="../03_checks/check'Keystone'RoadsAndParkingOfCars.php"><i class="fa fa-circle-o"></i>نتائج فحص حجر الشك"الكیربستون"للطرق ومواقف السیارات</a></li>
                    <li><a href="../03_checks/BitumenCheckResults.php"><i class="fa fa-circle-o"></i> Bitumen Test Results</a></li>
                    <li><a href="../03_checks/asphaltCoreCheckResults.php"><i class="fa fa-circle-o"></i> Asphalt Core Testing</a></li>
                    <li><a href="../03_checks/marshallCheckResults.php"><i class="fa fa-circle-o"></i>  Mrshall Test</a></li>
                    <li><a href="../03_checks/pavedTllesCompresslonCheck.php"><i class="fa fa-circle-o"></i>  Paved Tiles Compression</a></li>
                    <li><a href="../03_checks/californiaBearingRatio.php"><i class="fa fa-circle-o"></i> CaliforniaBearingRatio</a></li>
                    <li><a href="../03_checks/ModifiedCompactionTest.php"><i class="fa fa-circle-o"></i>ModifiedCompactionTest</a></li>
                    <li><a href="../03_checks/calvorniaCarryingRatio.php"><i class="fa fa-circle-o"></i>calvorniaCarryingRatio</a></li>
                    <li><a href="../03_checks/schmidtHammreCheck.php"><i class="fa fa-circle-o"></i>SCHMIDT HAMMER TEST</a></li>
                     <li><a href="../03_checks/concreteCoreCompressionCheck.php"><i class="fa fa-circle-o"></i>CONCRETE CORE COMPRESSION TEST</a></li>
                       <li><a href="../03_checks/testResultsBlendedCement.php"><i class="fa fa-circle-o"></i>TEST RESULTS OF BLENDED CEMENT</a></li>
                  </ul>
                </li>

                  <li><a href="#"><i class="fa fa-circle-o"></i>ادخال تقارير<i class="fa fa-angle-left pull-left"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="../03_checks/concreteCompressionCheckAddEdit.php"><i class="fa fa-circle-o"></i>ضغط باطون</a></li>
                    <li><a href="../03_checks/fieldDensityCheckAddEdit.php"><i class="fa fa-circle-o"></i> كثافة حقلية</a></li>
                    <li><a href="../03_checks/inspectionPavingBricksCheck(Interlock)AddEdit.php"><i class="fa fa-circle-o"></i> برى طوب الرصف ( انترلوك )</a></li>
                   <li><a href="../03_checks/porcelainTilesCheckResultsAddEdit.php"><i class="fa fa-circle-o"></i>  بلاط بورسلان ( ارضيات )</a></li>
                    <li><a href="../03_checks/ceramicTilesCheckResultsFlooringAddEdit.php"><i class="fa fa-circle-o"></i>  بلاط كراميكا ( ارضيات )</a></li>
                    <li><a href="../03_checks/ceramicTilesCheckResultsWallAddEdit.php"><i class="fa fa-circle-o"></i>  بلاط كراميكا ( حوائط )</a></li>
                    <li><a href="../03_checks/concreteTilesCheckResultsAddEdit.php"><i class="fa fa-circle-o"></i> بلاط اسمنتي</a></li>
                     <li><a href="../03_checks/landTilesCheckResultsAddEdit.php"><i class="fa fa-circle-o"></i> بلاط ارضي ( تيرازو )</a></li>
                    <li><a href="../03_checks/checkThicknessThicknessPaintAluminumAddEdit.php"><i class="fa fa-circle-o"></i> سماكة الطلاء للألمونیوم</a></li>
                    <li><a href="../03_checks/check'Keystone'RoadsAndParkingOfCarsAddEdit.php"><i class="fa fa-circle-o"></i>نتائج فحص حجر الشك"الكیربستون"للطرق ومواقف السیارات</a></li>
                    <li><a href="../03_checks/BitumenCheckResultsAddEdit.php"><i class="fa fa-circle-o"></i> Bitumen Test</a></li>
                    <li><a href="../03_checks/asphaltCoreCheckResultsAddEdit.php"><i class="fa fa-circle-o"></i> Asphalt Core Testing</a></li>
                    <li><a href="../03_checks/marshallCheckResultsAddEdit.php"><i class="fa fa-circle-o"></i> Mrshall Test</a></li>
                    <li><a href="../03_checks/pavedTllesCompresslonCheckAddEdit.php"><i class="fa fa-circle-o"></i>  Paved Tiles Compression</a></li>
                    <li><a href="../03_checks/californiaBearingRatioAddEdit.php"><i class="fa fa-circle-o"></i>  CaliforniaBearingRatio</a></li>
                    <li><a href="../03_checks/ModifiedCompactionTestAddEdit.php"><i class="fa fa-circle-o"></i>ModifiedCompactionTest</a></li>
                    <li><a href="../03_checks/calvorniaCarryingRatioAddEdit.php"><i class="fa fa-circle-o"></i>calvorniaCarryingRatio</a></li>
                     <li><a href="../03_checks/schmidtHammreCheckAddEdit.php"><i class="fa fa-circle-o"></i>SCHMIDT HAMMER TEST</a></li>
                    <li><a href="../03_checks/concreteCoreCompressionCheckAddEdit.php"><i class="fa fa-circle-o"></i>CONCRETE CORE COMPRESSION TEST</a></li>
                       <li><a href="../03_checks/testResultsBlendedCementAddEdit.php"><i class="fa fa-circle-o"></i>TEST RESULTS OF BLENDED CEMENT</a></li>
                  </ul>
                  </li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>المختبرات</span>
                <i class="fa fa-angle-left pull-left"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../00_home/index.php"><i class="fa fa-circle-o"></i> مختبر المواد</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> مختبر الباطون <i class="fa fa-angle-left pull-left"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="../00_home/index.php"><i class="fa fa-circle-o"></i> البلاط</a></li>
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i> الخرسانة <i class="fa fa-angle-left pull-left"></i></a>
                      <ul class="treeview-menu">
                        <li><a href="../00_home/index.php"><i class="fa fa-circle-o"></i> أعمدة</a></li>
                        <li><a href="../00_home/index.php"><i class="fa fa-circle-o"></i> أسطح</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="../Laboratories/plastics.php"><i class="fa fa-circle-o"></i> البلاستيك</a></li>
              </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
