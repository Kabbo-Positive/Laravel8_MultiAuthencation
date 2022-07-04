<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="{{ asset('admin/assets/images/favicon.png') }}" >
        <!--Page title-->
        <title>Admin easy Learning</title>
        <!--bootstrap-->
        <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.min.css') }}">
        <!--font awesome-->
        <link rel="stylesheet" href="{{ asset('admin/assets/css/all.min.css') }}">
        <!-- metis menu -->
        <link rel="stylesheet" href="{{ asset('admin/assets/plugins/metismenu-3.0.4/assets/css/metisMenu.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/assets/plugins/metismenu-3.0.4/assets/css/mm-vertical-hover.css') }}">
        <!-- chart -->
   
        <!-- <link rel="stylesheet" href="assets/plugins/chartjs-bar-chart/chart.css"> -->
        <!--Custom CSS-->
        <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">
        <!-- bootstrap css -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    </head>
    <body id="page-top">
        <!-- preloader -->
        <div class="preloader">
            <img src="{{ asset('panel/assets/images/preloader.gif') }}" alt="">
        </div>

        
         <div class="wrapper without_header_sidebar">
            <!-- contnet wrapper -->
            <div class="content_wrapper">
                <!-- page content -->
                <div class="registration_page center_container">
                    <div class="center_content">
                        <div class="logo">
                            <img src="{{ asset('panel/assets/images/logo.png') }}" alt="" class="img-fluid">
                        </div>

                            @if (Session::has('error'))
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>{{ session::get('error') }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                        <form action="{{ route('admin_register') }}" method="post" enctype="multipart/form-data">
                            @csrf
                           
                            <div class="form-group icon_parent">
                                <label for="uname">Username</label>
                                <input id="name" type="text" class="form-control" name="name"  required placeholder="Enter Full Name">
                                
                                <span class="icon_soon_bottom_right"><i class="fas fa-user"></i></span>
                            </div>
                            <div class="form-group icon_parent">
                                <label for="email">E-mail</label>
                                <input id="email" type="email" class="form-control" name="email" required placeholder="Enter Email Address">

                                
                                <span class="icon_soon_bottom_right"><i class="fas fa-envelope"></i></span>
                            </div>
                            <div class="form-group icon_parent">
                                <label for="password">Password</label>
                                <input id="password" type="password" class="form-control" name="password" required  placeholder="Enter Password">

                                 
                                <span class="icon_soon_bottom_right"><i class="fas fa-unlock"></i></span>
                            </div>
                            <div class="form-group icon_parent">
                                <label for="rtpassword">Re-type Password</label>
                                <input type="password" class="form-control" name="password_confirmation" required  placeholder="Confirm Password">
                                <span class="icon_soon_bottom_right"><i class="fas fa-unlock"></i></span>
                            </div>
                            <div class="form-group">
                                <a class="registration" href=" ">Already have an account</a><br>
                                <button type="submit" class="btn btn-blue">Signup</button>
                            </div>
                        </form>
                            <div class="footer">
                               <p>Copyright &copy; 2022 <a href="#">Kabbo@Hridoy</a>. All rights reserved.</p>
                            </div>
                            
                        </div>
                    </div>
            </div><!--/ content wrapper -->
        </div><!--/ wrapper -->


        
        <!-- jquery -->
        <script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>
        <!-- popper Min Js -->
        <script src="{{ asset('admin/assets/js/popper.min.js') }}"></script>
        <!-- Bootstrap Min Js -->
        <script src="{{ asset('admin/assets/js/bootstrap.min.js') }}"></script>
        <!-- Fontawesome-->
        <script src="{{ asset('admin/assets/js/all.min.js') }}"></script>
        <!-- metis menu -->
        <script src="{{ asset('admin/assets/plugins/metismenu-3.0.4/assets/js/metismenu.js') }}"></script>
        <script src="{{ asset('admin/assets/plugins/metismenu-3.0.4/assets/js/mm-vertical-hover.js') }}"></script>
        <!-- nice scroll bar -->
        <script src="{{ asset('admin/assets/plugins/scrollbar/jquery.nicescroll.min.js') }}"></script>
        <script src="{{ asset('admin/assets/plugins/scrollbar/scroll.active.js') }}"></script>
        <!-- counter -->
        <script src="{{ asset('admin/assets/plugins/counter/js/counter.js') }}"></script>
        <!-- chart -->
        <script src="{{ asset('admin/assets/plugins/chartjs-bar-chart/Chart.min.js') }}"></script>
        <script src="{{ asset('admin/assets/plugins/chartjs-bar-chart/chart.js') }}"></script>
        <!-- pie chart -->
        <script src="{{ asset('admin/assets/plugins/pie_chart/chart.loader.js') }}"></script>
        <script src="{{ asset('admin/assets/plugins/pie_chart/pie.active.js') }}"></script>
        <!-- bootstrap js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
 
 
        <!-- Main js -->
        <script src="{{ asset('admin/assets/js/main.js') }}"></script>

    
     


    </body>
</html>