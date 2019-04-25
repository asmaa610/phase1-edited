<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Grand HOTEL</title>
	
   @yield('css_liink')
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
                <a class="navbar-brand" href="{{ URL('/adminstate')}}">MAIN MENU </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
			
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="{{ URL('/usersetting')}}"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="{{ URL('/setting')}}"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                        <a  href="{{ URL('/setting')}}"><i class="fa fa-dashboard"></i>Room Status</a>
                    </li>
					<li>
                        <a   href="{{ URL('/room')}}"><i class="fa fa-plus-circle"></i>Add Room</a>
                    </li>
                    <li>
                        <a  class="active-menu" href="{{ URL('/delete')}}"><i class="fa fa-pencil-square-o"></i> Delete Room</a>
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
                           DELETE ROOM <small></small>
                        </h1>
                    </div>
                </div> 
                 
                                 
            <div class="row">
                
                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Delete room
                        </div>
                        <div class="panel-body">
						<form name="form" method="post" action="{{ URL('room')}}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <div class="form-group">
                                            <label>Select the Room ID *</label>
                                            <select name="troom"  class="form-control" required>
                                           @foreach($users as $user)  
												<option value selected > {{$user -> id}} </option>
                                            @endforeach    
                                            </select>
                              </div>
							  
								
							 <input type="submit" name="del" value="DELETE" class="btn btn-primary">  
							</form>
							<!-- add data to room tablr-->
                        </div>
                        
                    </div>
                </div>
                
                  
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            ROOMS INFORMATION
                        </div>
                        <div class="panel-body">
								<!-- Advanced Tables -->
                    <div class="panel panel-default">
                       
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                 
                                        <tr>
                                            <th>Room ID</th>
                                            <th>Room Type</th>
											<th>Bedding</th>
                                            
                                        </tr>
                                   
                                        @foreach($users as $user)
                                               <tr>
                                                    <th>{{$user -> id}}</th>
                                                    <th>{{$user -> type}}</th>
                                                    <th>{{$user -> bedding}}</th>
                                                    
                                               
                                               </tr>

                                       @endforeach

                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                    
                       
                            
							  
							 
							 
							  
							  
							   
                       </div>
                        
                    </div>
                </div>
                
               
            </div>
                    
            
				
					</div>
			 <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
      
     <!-- /. WRAPPER  -->
    
    <script src="{{asset('frontend')}}/assets/js2/jquery-1.10.2.js"></script>
      
    <script src="{{asset('frontend')}}/assets/js2/bootstrap.min.js"></script>
    
    <script src="{{asset('frontend')}}/assets/js2/jquery.metisMenu.js"></script>
     
    <script src="{{asset('frontend')}}/assets/js2/custom-scripts.js"></script>
    
   
</body>
</html>
