

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
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>

    .content-wrapper {
        margin-right: 0px;
    }

.main-header  .logo{height:52px}
.main_header{
  display: inline-block;
  width: 64%;
  margin-bottom: 0px !important;
  -webkit-margin-before: 0em;
  -webkit-margin-after: 0em;
  background-color: #3281af;
  -webkit-padding-start: 0px;
}


.main_header .treeview{
  display: inline-block;
  list-style: none;
  padding: 16px 16px;
  cursor: pointer;
  position: relative;
}

.main_header .treeview .fa{
  padding-left: 5px;
  color: #d2d2d2;
  padding-top: 3px
}

.main_header .treeview a{
  color: #ffffff;
}

.main_header .treeview a:hover{
  color: rgb(206, 206, 206)
}

.main_header .treeview-menu{
  z-index: 999;
  position: absolute;
  background: #4b9dce;
  box-shadow: 0 1px 2px 0 rgba(0,0,0,.38);
  min-width: 200px;
  right: 0;
  top: 51px;
  color: #191919;
  text-align: right;
  padding-top: 15px;
  padding-bottom:5px;
  cursor: default;
  opacity: 0;
  visibility: hidden;
  -webkit-padding-start: 10px;
  padding-left: 10px;
}

.main_header .treeview-menu li{
  margin-bottom: 20px;
  list-style: none;

}

.main_header .treeview-menu li a{
  color: #FFF !important
}

.main_header .treeview-menu li .fa-circle-o{
  padding-left: 10px
}

.main_header .treeview-menu li a:hover{
  color: #000 !important
}

.main_header .treeview:hover .treeview-menu{
  opacity: 1!important;
  visibility: visible !important
}

.menu-mobile{
  display: none;
  min-width: 100%;
  width: 100%;
  height: 100%;
  position: fixed;
  z-index: 30;
  padding-top: 28px;
  background-color: #4b9dce;
  right: 0;
  top: 8%;
}

.menu-mobile .treeview{
  margin-bottom: 25px
}

.menu-mobile .treeview-menu{
  padding-top: 10px
}

.menu-mobile .treeview-menu li{
  margin-bottom: 15px
}

.menu-mobile a{
  color:#FFF !important
}

.actiev-body{
  overflow: hidden;
}

@media(max-width:1200px){

    .main_header {
      display: none
    }

}


@media(max-width:767px){

    .menu-mobile{
      top: 14.9%;
    }

  }
.main-header > .navbar {
    margin-right: 0px;
}

    </style>
    @yield('style')
  </head>
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header" id="app-2">
        <!-- Logo -->

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->



          <ul class="main_header">
            @foreach($menuCategories->sortBy('menuOrder') as $item)
            @foreach($userId->menu as $menuCheck)
            @if($item->id == $menuCheck->id)
            @if($item->children->count() > 0)
            <li class="treeview">
              <a href="#">{{$item->menu}}</a><i class="fa fa-angle-down pull-left"></i>
                <ul class="treeview-menu">
                  @foreach($item->children as $submenu)
                   @foreach($userId->menu as $checksubmenu)
                    @if ($submenu->id == $checksubmenu->id)
                  <li>
                    <i class="fa fa-circle-o"></i><a href="{{route($submenu->link)}}">{{$submenu->menu}}</a>
                    @if($submenu->children->count() > 0)
                    @foreach($submenu->children as $subsubmenu)
                        <ul class="treeview-menu ">


                          <li><a href="{{route($subsubmenu->link)}}">{{$subsubmenu->menu}}</a></li>


                          </ul>
                            @endforeach
                          </li>
                        @endif

                  @endif
                  @endforeach


                @endforeach
                </ul>
            </li>
            @else
            <li  class="treeview" ><a href="">{{$item->menu}}</a></li>

            @endif
            @endif
            @endforeach
            @endforeach






          </ul>
          <a href="#menu" id="toggle"><span></span></a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">{{$count}}</span>
                </a>
                <ul class="dropdown-menu" >
                  <li class="header">ﺭﺳﺎﺋﻞ {{$count}} ﻟﺪﻳﻚ</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">


                    @foreach($massage as $key)
                      <li><!-- start message -->
                        <a href=" {{ route('email.show',['id' =>$key->id]) }}">
                          <div class="pull-right">
                          <img src="{{ asset('dist/img/rrasheed.jpg')}}" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                          {{$key->title}}

                            <small><i class="fa fa-clock-o"></i> {{ $key->created_at->diffForHumans() }}</small>
                          </h4>
                          <p></p>
                        </a>
                      </li><!-- end message -->
                  @endforeach

                    </ul>
                  </li>
                  <li class="footer"><a href="{{route('email.index')}}">ﻣﺸﺎﻫﺪﺓ اﻟﻜﻞ</a></li>
                </ul>
              </li>
              <!-- Notifications: style can be found in dropdown.less -->
                <notification :userid="{{auth()->id()}}" :unreads="{{auth()->user()->unreadNotifications}}"></notification>
              <!-- Tasks: style can be found in dropdown.less -->
              <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                  <span class="label label-danger">{{$task_count}}</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">ﻟﺪﻳﻚ {{$task_count}} ﻣﻬﺎﻡ</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                    @foreach($tasks as $task)
                      <li>
                        @if($task->link === null)<!-- Task item -->
                              <a href="{{route('tasks.show',['task'=>$task->id])}}">
                        @elseif($task->link != null)
                                <a href="{{route($task->link)}}">
                        @endif
                          <h3>
                            {{$task->title}}
                            <small class="pull-left">{{ $task->prograss }}%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-aqua" style="width: {{$task->prograss}}%" role="progressbar" aria-valuenow="{{$task->prograss}}" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">{{$task->prograss}}% اﻛﺘﻤﻞ</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      @endforeach


                    </ul>
                  </li>
                  <li class="footer">
                    <a href="{{route("tasks.index")}}">ﻣﺸﺎﻫﺪﺓ اﻟﻜﻞ</a>
                  </li>
                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="{{asset(Auth::user()->avatav)}}" class="user-image" alt="User Image">
                  <span class="hidden-xs">{{Auth::user()->username}}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="{{asset(Auth::user()->avatav)}}" class="img-circle" alt="User Image">
                    <p>
                      {{Auth::user()->username}}
                      <small>2017 ﻋﻀﻮ ﻣﻨﺬ</small>
                    </p>
                  </li>
                  <!-- Menu Body -->

                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-right">
                      <a href="{{route('user.userProfile',['id'=>Auth::user()->id])}}" class="btn btn-default btn-flat">اﻹﻋﺪاﺩاﺕ</a>
                    </div>
                    <div class="pull-left">
                      <form action="{{route('logout')}}"  method="post">
                    {{ csrf_field() }}
                          <button class="btn btn-default btn-flat">ﺗﺴﺠﻴﻞ ﺧﺮﻭﺝ</button>
                      </form>
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
