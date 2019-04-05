<!DOCTYPE html>
<!--
	ubusina by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com
-->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GrandHotel</title>
	@yield('css_links')
</head>
<body>
<!-- ====================================================
header section -->
	@include('frontview.inc.header')
	 <!-- end of header area -->

			<section class="slider" id="home">
				<div class="container-fluid">
					<div class="row">

					    <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
							<div class="header-backup"></div>
					        <!-- Wrapper for slides -->
					        <div class="carousel-inner" role="listbox">
					            <div class="item active">
					            	<img src="{{ asset('frontend') }}/img/3.jpg" alt="">
					                <div class="carousel-caption">
				               			<h1>feedback</h1>
				               			<p>good business consulting service</p>
				               				<button><a href="{{ URL('/reserve/save')}}">reservation</a></button>
				               			   
					                </div>
					            </div>
					            <div class="item">
					            	<img src="{{ asset('frontend') }}/img/1.jpg" alt="">
					                <div class="carousel-caption">
				               			<h1>payment</h1>
				               			<p>we can book your room when you at home </p>
				               			<button>reservation</button>
					                </div>
					            </div>
					            <div class="item">
					            	<img src="{{ asset('frontend') }}/img/2.jpg"    alt="" >
					                <div class="carousel-caption">
				               			<h1>service</h1>
				               			<p>good business consulting service</p>
				               			<button>reservation</button>
					                </div>
					            </div>
					         <!--  < <div class="item">
					            	<img src="img/download%20(1).jpg" alt="">
					                <div class="carousel-caption">
				               			<h1>online payment</h1>
				               			<p>good business consulting service</p>
				               			<button>learn more</button>
					                 </div> 
					            </div> -->
					        </div>

					        <!-- Controls -->
					        <a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev">
					            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					            <span class="sr-only">Previous</span>
					        </a>
					        <a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next">
					            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					            <span class="sr-only">Next</span>
					        </a>
					    </div>

					</div>
				</div>
			</section><!-- end of slider section -->


			<!-- about section -->
			<section class="about text-center" id="about">
				<div class="container">
					<div class="row">
						<h2>about us</h2>
						<h4>grand hotel select you room </h4>

						<div class="col-md-4 col-sm-6">
							<div class="single-about-detail clearfix">
								<div class="about-img">
									<img src="{{ asset('frontend') }}/img/download%20(1).jpg" alt="">
								</div>

								<div class="about-details">
									<div class="pentagon-text">
										<h1>S</h1>
									</div>

									<h3>select your room</h3>
									<p> you can select your room when you are at home .</p>
								</div>
							</div>
						</div>

						<div class="col-md-4 col-sm-6">
							<div class="single-about-detail">
								<div class="about-img">
									<img class="img-responsive" src="{{ asset('frontend') }}/img/download.jpg" alt="">
								</div>

								<div class="about-details">
									<div class="pentagon-text">
										<h1>H</h1>
									</div>

									<h3>how to payment</h3>
									<p>you can payment kash or online or when you come to our hotel</p>
								</div>
							</div>
						</div>


						<div class="col-md-4 col-sm-6">
							<div class="single-about-detail">
								<div class="about-img">
									<img class="img-responsive" src="{{ asset('frontend') }}/img/KSL-Lobby.jpg" alt="">
								</div>

								<div class="about-details">
									<div class="pentagon-text">
										<h1>F</h1>
									</div>

									<h3>Feedbacks</h3>
									<p>because we care about our customers we wait your feedback </p>
								</div>
							</div>
						</div>

					</div>
				</div>
			</section><!-- end of about section -->


			<!-- service section starts here -->

			<section class="service text-center" id="service">
				<div class="container">
					<div class="row">
						<h2>our services</h2>
						<h4>grand hotel choose your from your home.</h4>

						<div class="col-md-3 col-sm-6">
							<div class="single-service">
								<div class="single-service-img">
									<div class="service-img">
										<img class="img-responsive" src="{{ asset('frontend') }}/img/123197762.jpg" alt="">
									</div>
								</div>
								<h3>For one person</h3>
							</div>
						</div>

						<div class="col-md-3 col-sm-6">
							<div class="single-service">
								<div class="single-service-img">
									<div class="service-img">
										<img class="img-responsive" src="{{ asset('frontend') }}/img/xo-hotels-park-west-standard-double-twin-room-v17925543.jpg" alt="">
									</div>
								</div>
								<h3>for two person</h3>
							</div>
						</div>

						<div class="col-md-3 col-sm-6">
							<div class="single-service">
								<div class="single-service-img">
									<div class="service-img">
										<img class="img-responsive" src="{{ asset('frontend') }}/img/images%20(3).jpg" alt="">
									</div>
								</div>
								<h3>for one person</h3>
							</div>
						</div>

						<div class="col-md-3 col-sm-6">
							<div class="single-service">
								<div class="single-service-img">
									<div class="service-img">
										<img class="img-responsive" src="{{ asset('frontend') }}/img/images%20(1).jpg" alt="">
									</div>
								</div>
								<h3>for two person</h3>
							</div>
						</div>
					</div>
				</div>
			</section><!-- end of service section -->


			<!-- team section -->

			<section class="team" id="team">
				<div class="container">
					<div class="row">
						<div class="team-heading text-center">
							<h2>our team</h2>

							<h4>grand hotel was built in 2018 we are seeking of how to make our customer Comfortable just "select your room" </p></h4>
						</div>

						<div class="col-md-2 single-member col-sm-4">
							<div class="person">
								<img class="img-responsive" src="{{ asset('frontend') }}/img/item1.jpg" alt="member-1">
							</div>

							<div class="person-detail">
								<div class="arrow-bottom"></div>
								<h3>Mr. Graham</h3>
								<p>grand hotel was built in 2018 we are seeking of how to make our customer Comfortable just "select your room" </p>
							</div>
						
						</div>

						<div class="col-md-2 single-member col-sm-4">

							<div class="person-detail">
								<div class="arrow-top"></div>
								<h3>Mr. David</h3>
								<p>grand hotel was built in 2018 we are seeking of how to make our customer Comfortable just "select your room" </p> </p>
							</div>
							<div class="person">
								<img class="img-responsive" src="{{ asset('frontend') }}/img/item2.jpg" alt="member-2">
							</div>
						</div>
						<div class="col-md-2 single-member col-sm-4">
							<div class="person">
								<img class="img-responsive" src="{{ asset('frontend') }}/img/item3.jpg" alt="member-3">
							</div>
							<div class="person-detail">
								<div class="arrow-bottom"></div>
								<h3>Mr. Hovid</h3>
								<p>grand hotel was built in 2018 we are seeking of how to make our customer Comfortable just "select your room" </p> </p>
							</div>
						</div>

						<div class="col-md-2 single-member col-sm-4">
							<div class="person-detail">
								<div class="arrow-top"></div>
								<h3>Mr Jasak</h3>
								<p>grand hotel was built in 2018 we are seeking of how to make our customer Comfortable just "select your room" </p></p>
							</div>
							<div class="person">
								<img class="img-responsive" src="{{ asset('frontend') }}/img/item4.jpg" alt="member-4">
							</div>
						</div>

						<div class="col-md-2 single-member col-sm-4">
							<div class="person">
								<img class="img-responsive" src="{{ asset('frontend') }}/img/item5.jpg" alt="member-5">
							</div>

							<div class="person-detail">
								<div class="arrow-bottom"></div>
								<h3>Mr. Joy Ka</h3>
								<p>grand hotel was built in 2018 we are seeking of how to make our customer Comfortable just "select your room" </p> </p>
							</div>
						</div>

						<div class="col-md-2 single-member col-sm-4">

							<div class="person-detail">
								<div class="arrow-top"></div>
								<h3>Mr. Mikari</h3>
								<p>grand hotel was built in 2018 we are seeking of how to make our customer Comfortable just "select your room" </p> </p>
							</div>
							<div class="person">
								<img class="img-responsive" src="{{ asset('frontend') }}/img/item6.jpg" alt="member-5">
							</div>

						</div>
					</div>
				</div>
			</section><!-- end of team section -->

			<!-- map section -->
			<section class="api-map" id="contact">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12 map" id="map"></div>
					</div>
				</div>
			</section><!-- end of map section -->

			<!-- contact section starts here -->
			<section class="contact">
				<div class="container">
					<div class="row">
							<div class="contact-caption clearfix">
								<div class="contact-heading text-center">
									<h2>contact us</h2>
								</div>

								<div class="col-md-5 contact-info text-left">
									<h3>contact information</h3>
									<div class="info-detail">
										<ul><li><i class="fa fa-calendar"></i><span>Monday - Friday:</span> 9:30 AM to 6:30 PM</li></ul>
										<ul><li><i class="fa fa-map-marker"></i><span>Address:</span> 123 Some Street , California, US, CP 123</li></ul>
										<ul><li><i class="fa fa-phone"></i><span>Phone:</span> (01) 999-1235</li></ul>
										<ul><li><i class="fa fa-fax"></i><span>Fax:</span> (01) 999-1234</li></ul>
										<ul><li><i class="fa fa-envelope"></i><span>Email:</span> info@domain.com</li></ul>
									</div>
								</div>


								<div class="col-md-6 col-md-offset-1 contact-form">
									<h3>leave us a message</h3>

									<form class="form" method="post" action="{{ URL('contact')}}">
										{{ csrf_field() }}
										<input class="name" type="text" placeholder="Name" name="fullname">
										<input class="email" type="email" placeholder="Email" name="email">
										<input class="phone" type="text" placeholder="Phone No:" name="phoneno">
										<textarea class="message" name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
										<input class="submit-btn" type="submit" value="SUBMIT">
									</form>
								</div>

							</div>
					</div>
				</div>
			</section><!-- end of contact section -->


			<!-- footer starts here -->
		@include('frontview.inc.footer')
		<!-- footer ends here -->

	<!-- script tags
	============================================================= -->
	<script src="{{ asset('frontend') }}/js/jquery-2.1.1.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="{{ asset('frontend') }}/js/gmaps.js"></script>
	<script src="{{ asset('frontend') }}/js/smoothscroll.js"></script>
	<script src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>
	<script src="{{ asset('frontend') }}/js/custom.js"></script>
	
</body>
</html>