
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="5KArGM1RM7ndW3NxD8oPc4sq1C64fcpN2k5JaB5F">

    <title>RTP</title>

    <!-- Scripts -->
    <!--<script src="https://appstacklabs.com/rtp_landing/js/app.js" defer></script>-->
    <link rel="stylesheet" href="https://appstacklabs.com/rtp_landing/admin/assets/css/stylee.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <link rel="icon" href="https://appstacklabs.com/rtp_landing/admin/assets/img/favicon.png" type="image/x-icon">
        <!-- VENDOR CSS -->
        <link rel="stylesheet" href="https://appstacklabs.com/rtp_landing/admin/assets/new/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://appstacklabs.com/rtp_landing/admin/assets/new/vendor/font-awesome/css/font-awesome.min.css">

        

  <link rel="stylesheet" href="https://appstacklabs.com/rtp_landing/admin/assets/new/vendor/dropify/css/dropify.min.css">
  <link rel="stylesheet" href="https://appstacklabs.com/rtp_landing/admin/assets/new/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
        <link rel="stylesheet" href="https://appstacklabs.com/rtp_landing/admin/assets/new/vendor/chartist/css/chartist.min.css">
        <link rel="stylesheet" href="https://appstacklabs.com/rtp_landing/admin/assets/new/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
        <link rel="stylesheet" href="https://appstacklabs.com/rtp_landing/admin/assets/new/vendor/toastr/toastr.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    
        <!-- MAIN CSS -->
        <link rel="stylesheet" href="https://appstacklabs.com/rtp_landing/admin/assets/css/main.css">
        <link rel="stylesheet" href="https://appstacklabs.com/rtp_landing/admin/assets/css/color_skins.css">
       <link rel="stylesheet" href="https://appstacklabs.com/rtp_landing/assets/css/elements.min.css">
<style>
    .btn {
    padding: 0.175rem 0.5rem !important;
}
</style>
   
    
</head>
<body class="theme-cyan" style="top:0px !important;">
             
            <!-- Overlay For Sidebars -->
        
            <div id="wrapper">
                <nav class="navbar navbar-fixed-top">
    <div class="container-fluid" style="padding-left:0px !important;">
    

        <div class="navbar-brand d-flex justify-content-center" style="margin-right:0px !important;padding: 9px 40px;">
            <a href="https://appstacklabs.com/rtp_landing/dashboard"><img
                    src="https://appstacklabs.com/rtp_landing/admin/assets/img/soukhya-health-white.png"
                    alt="Medx Logo" class="img-responsive logo" width="20"></a>
                        <div class="navbar-btn">
            <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
        </div>
        </div>

        <div class="navbar-right row">

            <ul class="nav nav-tabs-new2 mt-2 col-lg-8">      
                
            </ul> 
            <div id="navbar-menu" style="display: flex;justify-content: end;" class="col-lg-4">
                <ul class="nav navbar-nav text-center">
                    <li>



                        <div class="dropdown">
                           
                            <img src="https://appstacklabs.com/rtp_landing/admin/assets/new/images/sm/avatar3.jpg"
                                class="profile-image rounded square-image" alt="profile-image" id="profileImage"
                                width="40">
                              
                            <a href="#" class="dropdown-toggle user-name" tabindex="0"><strong>Welcome to RTP
                                   </strong></a>
                            <ul class="dropdown-menu dropdown-menu-right account">
                                <li><a href="#">Settings</a></li>
                                <li class="divider"></li>
                                <li><a href="{{url('/logout')}}">Logout</a></li>
                            </ul>
                        </div>
                    </li>
                    </li>
                </ul>
            </div>

            <!-- <div id="navbar-menu">
                
                <ul class="nav navbar-nav">



                    <li>
                        <a href="page-login.php" class="icon-menu"><i class="icon-login"></i></a>
                    </li>
                </ul>
            </div> -->
        </div>
    </div>
</nav>        
                <div id="left-sidebar" class="sidebar" style="background-color: #163c60;">
    <div class="sidebar-scroll">
        <!-- Tab panes -->
        <div class="tab-content p-l-0 p-r-0" style="padding-top: 40px;">
            <div class="tab-pane active" id="menu">
                <nav class="sidebar-nav">
                    <ul class="main-menu metismenu">
                        <li class=""><a href="{{url('/home')}}"><i
                                    class="icon-home"></i><span>Dashboard</span></a></li>

                                    <li ><a href="{{url('/contact-enq')}}"><i
                                        class="icon-home"></i><span>contact Enquiry</span></a></li>

         
                      
                       
                        <li><a href="{{url('/logout')}}"><i class="icon-login"></i><span>Logout</span> </a>

                        </li>
                    </ul>
                </nav>
            </div>



        </div>
    </div>
</div>
        

    <div id="app">
 
        <main>
            
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header" style="margin-top: 2%;">
            <div class="row mt-4">
                <div class="col-sm-7 col-6">
                    <div class="col-lg-6 col-md-8 col-sm-12" style="margin-top: 1%;">
                        <h2><a href="patient-profile.html">Contact Enquiry
                            </a></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix" style="padding-bottom:40px;">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover js-basic-example dataTable table-custom">
                                <thead class="theme-cyan">
                                    <tr>
                                        <th>S.No</th>
                                        <th>Name</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach($enquiry as $key => $val)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td><a href="#">{{$val->name}}</a></td>
                                            <td>{{$val->phone}}</td>
                                            <td>{{$val->email}}</td>
                                            <td>T{{$val->subject}}</td> 
                                            <td>{{$val->message}}</td>
                                            
                                        </tr>
                                        @endforeach
                                  
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function ndelete() {
        if(!confirm("Send data to dustbin"))
        event.preventDefault();
    }
</script>
<script src="https://appstacklabs.com/rtp_landing/admin/assets/bundles/libscripts.bundle.js"></script>
        </main>
    </div>
      </div>
    <!--<script src="https://appstacklabs.com/rtp_landing/admin/assets/bundles/libscripts.bundle.js"></script>-->
 <script src="https://appstacklabs.com/rtp_landing/admin/assets/bundles/vendorscripts.bundle.js"></script>

 <script src="https://appstacklabs.com/rtp_landing/admin/assets/bundles/chartist.bundle.js"></script>
 <script src="https://appstacklabs.com/rtp_landing/admin/assets/bundles/knob.bundle.js"></script> <!-- Jquery Knob-->
 <script src="https://appstacklabs.com/rtp_landing/admin/assets/bundles/flotscripts.bundle.js"></script> <!-- flot charts Plugin Js -->
 <script src="https://appstacklabs.com/rtp_landing/admin/assets/new/vendor/toastr/toastr.js"></script>
 <script src="https://appstacklabs.com/rtp_landing/admin/assets/new/vendor/flot-charts/jquery.flot.selection.js"></script>

 <script src="https://appstacklabs.com/rtp_landing/admin/assets/bundles/mainscripts.bundle.js"></script>


  
 
   <script src="https://appstacklabs.com/rtp_landing/admin/assets/new/vendor/dropify/js/dropify.min.js"></script>
   <script src="https://appstacklabs.com/rtp_landing/admin/assets/new/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
   <!-- bootstrap datepicker Plugin Js -->
 
   <script src="https://appstacklabs.com/rtp_landing/admin/assets/js/pages/forms/dropify.js"></script>
       <!-- Javascript -->
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
       <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>-->
       <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>-->
   
   <script src="https://appstacklabs.com/rtp_landing/admin/assets/bundles/datatablescripts.bundle.js"></script>
   <script src="https://appstacklabs.com/rtp_landing/admin/assets/new/vendor/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
   <script src="https://appstacklabs.com/rtp_landing/admin/assets/new/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
   <script src="https://appstacklabs.com/rtp_landing/admin/assets/new/vendor/jquery-datatable/buttons/buttons.colVis.min.js"></script>
   <script src="https://appstacklabs.com/rtp_landing/admin/assets/new/vendor/jquery-datatable/buttons/buttons.php5.min.js"></script>
   <script src="https://appstacklabs.com/rtp_landing/admin/assets/new/vendor/jquery-datatable/buttons/buttons.print.min.js"></script>
   
   
   
   
   <script src="https://appstacklabs.com/rtp_landing/admin/assets/bundles/mainscripts.bundle.js"></script>
   <script src="https://appstacklabs.com/rtp_landing/admin/assets/js/pages/tables/jquery-datatable.js"></script>     
  
</body>
</html>
