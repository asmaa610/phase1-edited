<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Grand Hotel </title>
	
    @yield('css_linss')
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
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="usersetting.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="settings.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
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
                        <a href="{{ URL('/adminstate')}}"><i class="fa fa-dashboard"></i> Status</a>
                    </li>
                   
					
                    <li>
                        <a class="active-menu" href="{{ URL('/payment')}}"><i class="fa fa-qrcode"></i> Payment</a>
                    </li>
                    <li>
                        <a  href="profit.php"><i class="fa fa-qrcode"></i> Profit</a>
                    </li>
                    <li>
                        <a href="logout.php" ><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                    
                </ul>
                    
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           Payment Details<small> </small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
				 
				 
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                   
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
											<th>Room type</th>
                                            <th>Bed Type</th>
                                            <th>Checkin</th>
											<th>Checkout</th>
											<th>No of Room</th>
											<th>Meal Type</th>
											
                                            <th> Rent</th>
											
											<th>Print</th>
                                            
                                        </tr>
                                     
                                    @foreach($users as $user)
                                               <tr>
                                                    
                                            <th>{{$user->id}}</th>
                                            <th>{{$user->FName}}</th>
                                            <th>{{$user->TRoom}}</th>
                                            <th>{{$user->Bed}}</th>
                                            <th>{{$user->cin}}</th>
                                            <th>{{$user->cout}}</th>
                                            <th>{{$user->NRoom}}</th>
                                            <th>{{$user->Meal}}</th>
                                            
                                            <th>{{$user->Rent}}</th>
                                            <th><a  href="{{ URL('/print')}}"  > <button class='btn btn-primary'> <i class='fa fa-print' ></i> Print</button></th>
                         
                                               </tr>

                                       @endforeach 
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
            
                </div>
               
            </div>
        
               
    </div>
             <!-- /. PAGE INNER  -->
            
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="{{ asset('frontend') }}/assets/js2/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="{{ asset('frontend') }}/assets/js2/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="{{ asset('frontend') }}/assets/js2/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="{{ asset('frontend') }}/assets/js2/dataTables/jquery.dataTables.js"></script>
    <script src="{{ asset('frontend') }}/assets/js2/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="{{ asset('frontend') }}/assets/js2/custom-scripts.js"></script>
    
   
</body>
</html>
