
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrator	</title>
   @yield('css_linkss')
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ URL('/adminstate')}}"> ADMIN </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                       <i class="fa fa-user" aria-hidden="true"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="{{ URL('/usersetting')}}"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="{{ URL('/setting')}}"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu" href="{{ URL('/adminstate')}}"><i class="fa fa-dashboard"></i> Status</a>
                    </li>
                    
					
                    <li>
                        <a href="{{ URL('/payment')}}"><i class="fa fa-qrcode"></i> Payment</a>
                    </li>
                    <li>
                        <a  href="{{ URL('/profit')}}"><i class="fa fa-qrcode"></i> Profit</a>
                    </li>
                    <li>
                        <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                   


                    
					</ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Status <small>Room Booking </small>
                        </h1>
                    </div>
                </div>
                <!-- /. ROW  -->


					<div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            
                        </div>
                        <div class="panel-body">
                            <div class="panel-group" id="accordion">
							
							<div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
											<button class="btn btn-default" type="button">
												 New Room Bookings  <span class="badge"> 5 </span>
											</button>
											</a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse in" style="height: auto;">
                                        <div class="panel-body">
                                           <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    
                                        <tr>
                                            <th>#</th>
                                           <th>FName</th>
                                            <th>Email</th>
                                            <th>Country</th>
											<th>Room</th>
											<th>Bedding</th>
											<th>Meal</th>
											<th>Check In</th>
											<th>Check Out</th>
											
                                            <th>noday</th>
											
                                        </tr>
                                    
                                       @foreach($users as $user)
                                               <tr>
                                                    <th>{{$user -> id}}</th>
                                                    <th>{{$user -> FName}}</th>
                                                    <th>{{$user -> Email}}</th>
                                                    <th>{{$user -> Country}}</th>
                                                    <th>{{$user -> TRoom}}</th>
                                                    <th>{{$user -> Bed}}</th>
                                                    <th>{{$user -> Meal}}</th>
                                                    <th>{{$user -> cin}}</th>
                                                    <th>{{$user -> cout}}</th>
                                                     <th>{{$user -> nodays}}</th>


                                                   
                                                    
                                                    
                                               </tr>

                                       @endforeach
                                </table>
								
                            </div>
                        </div>
                    </div>
                      <!-- End  Basic Table  --> 
                                        </div>
                                    </div>
                                </div>
							
                              
                             
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
			
			
				<!--DEMO END-->
				
										
                    

                <!-- /. ROW  -->
				
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="{{asset('frontend')}}/js2/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="{{asset('frontend')}}/js2/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="{{asset('frontend')}}/js2/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="{{asset('frontend')}}/js2/raphael-2.1.0.min.js"></script>
    <script src="{{asset('frontend')}}/js2/morris.js"></script>
    <!-- Custom Js -->
    <script src="{{asset('frontend')}}/js2/custom-scripts.js"></script>


</body>

</html>