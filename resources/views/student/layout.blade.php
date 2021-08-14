<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Required meta tags-->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Title Page-->
      <title>@yield('page_title')</title>
      <!-- Fontfaces CSS-->
      <link href="{{asset('admin_assets/css/font-face.css')}}" rel="stylesheet" media="all">
      <link href="{{asset('admin_assets/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
      <link href="{{asset('admin_assets/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
      <link href="{{asset('admin_assets/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
      <!-- Bootstrap CSS-->
      <link href="{{asset('admin_assets/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">
      <!-- Vendor CSS-->
      <link href="{{asset('admin_assets/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
      <link href="{{asset('admin_assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
      <link href="{{asset('admin_assets/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
      <link href="{{asset('admin_assets/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
      <link href="{{asset('admin_assets/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
      <link href="{{asset('admin_assets/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
      <link href="{{asset('admin_assets/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">
      <!-- Main CSS-->
      <link href="{{asset('admin_assets/css/theme.css')}}" rel="stylesheet" media="all">
   </head>
   <body class="animsition">
      <div class="page-wrapper">
         <!-- HEADER MOBILE-->
         <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
               <div class="container-fluid">
                  <div class="header-mobile-inner">
                     <a class="logo" href="{{url('student/dashboard')}}">
                        <h3><i class="fas fa-graduation-cap mr-2 text-success"></i>{{Config::get('constants.SITE_NAME')}}</h3>
                        <span style="margin-left:100px; font-size: 15px;" class="text-success">Student</span>
                     </a>
                     <button class="hamburger hamburger--slider" type="button">
                     <span class="hamburger-box">
                     <span class="hamburger-inner"></span>
                     </span>
                     </button>
                  </div>
               </div>
            </div>
            <nav class="navbar-mobile">
               <div class="container-fluid">
                  <ul class="navbar-mobile__list list-unstyled">
                     <li class="@yield('dashboard_select')">
                        <a href="{{url('/student/dashboard')}}">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                     </li>
                     <li class="@yield('student_select')">
                        <a href="{{url('/student/classmate')}}">
                        <i class="fas fa-user"></i>Students</a>
                     </li>
                     <li class="@yield('faculty_select')">
                        <a href="{{url('/student/my_faculty')}}">
                        <i class="fas fa-users"></i>Faculties</a>
                     </li>
                     <li class="@yield('lecture_select')">
                        <a href="{{url('/student/my_lecture')}}">
                        <i class="fas fa-users"></i>Lectures</a>
                     </li>
                     <li class="@yield('subject_select')">
                        <a href="{{url('/student/my_subject')}}">
                        <i class="fas fa-folder"></i>Subjects</a>
                     </li>
                     <li class="@yield('exam_select')">
                        <a href="{{url('student/examination')}}">
                        <i class="fas fa-book"></i>Examinations</a>
                     </li>
                     <li class="@yield('exam_result_select')">
                        <a href="{{url('/admin/exam_result')}}">
                        <i class="fas fa-list-alt"></i>Exam Results</a>
                     </li>
                  </ul>
               </div>
            </nav>
         </header>
         <!-- END HEADER MOBILE-->
         <!-- MENU SIDEBAR-->
         <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
               <a href="{{url('student/dashboard')}}">
                  <h3><i class="fas fa-graduation-cap mr-2 text-success"></i>{{Config::get('constants.SITE_NAME')}}</h3>
                  <span style="margin-left:100px; font-size: 15px;" class="text-success">Student</span>
               </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
               <nav class="navbar-sidebar">
                  <ul class="list-unstyled navbar__list">
                     <li class="@yield('dashboard_select')">
                        <a href="{{url('/student/dashboard')}}">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                     </li>
                     <li class="@yield('student_select')">
                        <a href="{{url('/student/classmate')}}">
                        <i class="fas fa-user"></i>Students</a>
                     </li>
                     <li class="@yield('faculty_select')">
                        <a href="{{url('/student/my_faculty')}}">
                        <i class="fas fa-users"></i>Faculties</a>
                     </li>
                     <li class="@yield('lecture_select')">
                        <a href="{{url('/student/my_lecture')}}">
                        <i class="fas fa-play"></i>Lectures</a>
                     </li>
                     <li class="@yield('subject_select')">
                        <a href="{{url('/student/my_subject')}}">
                        <i class="fas fa-folder"></i>Subjects</a>
                     </li>
                     <li class="@yield('exam_select')">
                        <a href="{{url('student/examination')}}">
                        <i class="fas fa-book"></i>Examinations</a>
                     </li>
                     <li class="@yield('exam_result_select')">
                        <a href="{{url('/admin/exam_result')}}">
                        <i class="fas fa-list-alt"></i>Exam Results</a>
                     </li>
                  </ul>
               </nav>
            </div>
         </aside>
         <!-- END MENU SIDEBAR-->
         <!-- PAGE CONTAINER-->
         <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
               <div class="section__content section__content--p30">
                  <div class="container-fluid">
                     <div class="header-wrap">
                        <form class="form-header" action="" method="POST">
                        </form>
                        <div class="header-button">
                           <div class="account-wrap">
                              <div class="account-item clearfix js-item-menu">
                                 <div class="content">
                                    <a class="js-acc-btn" href="#"></a>
                                 </div>
                                 <div class="account-dropdown js-dropdown">
                                    <div class="account-dropdown__footer">
                                       <a href="{{url('student/logout')}}">
                                       <i class="zmdi zmdi-power"></i>Logout</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </header>
            <!-- HEADER DESKTOP-->
            <!-- MAIN CONTENT-->
            <div class="main-content">
               <div class="section__content section__content--p30">
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-md-12">
                           @section('container')
                           @show
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
         </div>
      </div>
      <!-- Jquery JS-->
      <script src="{{asset('admin_assets/vendor/jquery-3.2.1.min.js')}}"></script>
      <!-- Bootstrap JS-->
      <script src="{{asset('admin_assets/vendor/bootstrap-4.1/popper.min.js')}}"></script>
      <script src="{{asset('admin_assets/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
      <!-- Vendor JS       -->
      <script src="{{asset('admin_assets/vendor/slick/slick.min.js')}}"></script>
      <script src="{{asset('admin_assets/vendor/wow/wow.min.js')}}"></script>
      <script src="{{asset('admin_assets/vendor/animsition/animsition.min.js')}}"></script>
      <script src="{{asset('admin_assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
      <script src="{{asset('admin_assets/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
      <script src="{{asset('admin_assets/vendor/counter-up/jquery.counterup.min.js')}}"></script>
      <script src="{{asset('admin_assets/vendor/circle-progress/circle-progress.min.js')}}"></script>
      <script src="{{asset('admin_assets/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
      <script src="{{asset('admin_assets/vendor/chartjs/Chart.bundle.min.js')}}"></script>
      <script src="{{asset('admin_assets/vendor/select2/select2.min.js')}}"></script>
      <!-- Main JS-->
      <script src="{{asset('admin_assets/js/main.js')}}"></script>
   </body>
</html>
<!-- end document-->