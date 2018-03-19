<!DOCTYPE html>
<html lang="en">

<head>
	<title>The Travel - Tour Travel</title>
	<!--== META TAGS ==-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- FAV ICON -->
	<link rel="shortcut icon" href="images/fav.ico">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Poppins%7CQuicksand:400,500,700" rel="stylesheet">
	<!-- FONT-AWESOME ICON CSS -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!--== ALL CSS FILES ==-->
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/materialize.css">
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/mob.css">
	<link rel="stylesheet" href="../css/animate.css">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Preloader -->
	<div id="preloader">
		<div id="status">&nbsp;</div>
	</div>
	<!--====== MOBILE MENU ==========-->
	<section class="mob-top">
		<div class="mob-menu">
			<div class="mob-head-left"> <img src="images/logo.png" alt=""> </div>
			<div class="mob-head-right"> <a href="#"><i class="fa fa-bars mob-menu-icon" aria-hidden="true"></i></a> <a href="#" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a>
				<div class="mob-menu-slide">
					<h4>My Profile</h4>
					<ul class='top-menu'>
						<li><a href="db-my-profile.html"><i class="fa fa-sign-in" aria-hidden="true"></i> My Profile</a>
						</li>
						<li><a href="register.html"><i class="fa fa-address-book-o" aria-hidden="true"></i> Register with us</a>
						</li>
						<li><a href="dashboard.html"><i class="fa fa-bookmark-o" aria-hidden="true"></i> My Bookings</a>
						</li>
						<li><a href="db-travel-booking.html"><i class="fa fa-umbrella" aria-hidden="true"></i> Tour Packages</a>
						</li>
						<li><a href="db-hotel-booking.html"><i class="fa fa-bed" aria-hidden="true"></i> Hotel Bookings</a>
						</li>
						<li><a href="db-refund.html"><i class="fa fa-ban" aria-hidden="true"></i> Cancel Bookings</a>
						</li>
						<li><a href="db-all-payment.html"><i class="fa fa-print" aria-hidden="true"></i> Prient E-Tickets</a>
						</li>
						<li><a href="db-payment.html" class="ho-dr-con-last"><i class="fa fa-align-justify" aria-hidden="true"></i> Make Payment</a>
						</li>
					</ul>
					

				</div>
			</div>
		</div>
	</section>
	<!--====== END MOBILE MENU ==========-->
	<!--====== TOP HEADER ==========-->
	<section>
		<div class="rows head" data-spy="affix" data-offset-top="120">
			<div class="container">
				<div>
					<!--====== BRANDING LOGO ==========-->
					<div class="col-md-4 col-sm-12 col-xs-12 head_left">
						<a href="/"><img src="images/logo.png" alt="" /> </a>
					</div>
					<!--====== HELP LINE & EMAIL ID ==========-->
					<div class="col-md-8 col-sm-12 col-xs-12 head_right head_right_all">
						<ul>
							<li><a href="#">Help Line: +91 9633638812</a> </li>
							<li><a href="#">Email: mail@synctravel.in</a> </li>
							<li>
								<!--<div class="dropdown">
                                    <button class="dropbtn">My Account</button>
                                    <div class="dropdown-content">
                                        <a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
                                        <a href="#"><i class="fa fa-address-book-o" aria-hidden="true"></i> Register with us</a>
                                        <a href="#"><i class="fa fa-bookmark-o" aria-hidden="true"></i> My Bookings</a>
                                        <a href="#"><i class="fa fa-umbrella" aria-hidden="true"></i> Tour Packages</a>
                                        <a href="#"><i class="fa fa-bed" aria-hidden="true"></i> Hotel Bookings</a>
                                        <a href="#"><i class="fa fa-ban" aria-hidden="true"></i> Cancel Bookings</a>
                                        <a href="#"><i class="fa fa-print" aria-hidden="true"></i> Prient E-Tickets</a>
                                        <a href="#" class="ho-dr-con-last"><i class="fa fa-align-justify" aria-hidden="true"></i> Custom Tour Plan</a>
                                    </div>
								</div>	--><a class='dropdown-button waves-effect waves-light profile-btn' href='#!' data-activates='myacc'><i class="fa fa-user" aria-hidden="true"></i> My Account</a>
								<!-- Dropdown Structure -->
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== NAVIGATION MENU ==========-->	
	
	<!--====== NAVIGATION MENU ==========-->
	
	<!--DASHBOARD-->
	<section>
		<div class="tr-register">
			<div class="tr-regi-form">
				<h4>Create an Package</h4>
				<p>It's free and always will be.</p>
				<form class="col s12" action='/update' method='POST' enctype='multipart/form-data'>

					{{ csrf_field() }}
					<input type="hidden"  name="id" value="{{$result->id}}">
					<div class="row">
						<div class="input-field col s12">
							<select  class="validate" name="pack" id="pack">
						    <option value="1">Event</option>
							<option value="0">Tour package</option>
							
						</select>
							
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input type="text" class="validate" name="title" value="{{$result->title}}">
							<label>Title</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input type="number" class="validate" name="price" value="{{$result->price}}">
							<label>Price</label>
						</div>
					</div>
					<div class="row" id="seat">
						<div class="input-field col s12">
							<input type="number" class="validate" name="seat" value="{{$result->seat}}">
							<label>max no.of seat</label>
						</div>
					</div>


					<div class="row" id="date">
						<div class="input-field col s12">
							<input type="date" class="validate" name="date" value="{{$result->date}}">
						</div>
					</div>
					
					<div class="row">
						<div class="input-field col s12">
							<select  class="validate" name="per" value="{{$result->package}}">
							
							<option value="1">per head</option>
							<option value="0">per package</option>
						</select>
							
						</div>
					</div>
										
 					
					<div class="row">
						<div class="input-field col s12" >
							<input type="file"  name='image[]' multiple="multiple"  class="validate">


							
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input type="text" class="validate" name="dis" value="{{$result->description}}">
							<label>Discripition</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input type="number" class="validate" name="days" value="{{$result->duration}}">
							<label>number of days</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input type="submit"  class="waves-effect waves-light btn-large full-btn" "> </div>
					</div>
				</form>
				<p>Are you a already member ? <a href="login.html">Click to Login</a>
				</p>
			</div>
		</div>
	</section>
	<!--END DASHBOARD-->
	<!--====== TIPS BEFORE TRAVEL ==========-->
	<section>
		<div class="rows tips tips-home tb-space home_title">
			<div class="container tips_1">
				<!-- TIPS BEFORE TRAVEL -->
				<div class="col-md-4 col-sm-6 col-xs-12">
					<h3>Tips Before Travel</h3>
					<div class="tips_left tips_left_1">
						<h5>Bring copies of your passport</h5>
						<p>Aliquam pretium id justo eget tristique. Aenean feugiat vestibulum blandit.</p>
					</div>
					<div class="tips_left tips_left_2">
						<h5>Register with your embassy</h5>
						<p>Mauris efficitur, ante sit amet rhoncus malesuada, orci justo sollicitudin.</p>
					</div>
					<div class="tips_left tips_left_3">
						<h5>Always have local cash</h5>
						<p>Donec et placerat ante. Etiam et velit in massa. </p>
					</div>
				</div>
				<!-- CUSTOMER TESTIMONIALS -->
				<div class="col-md-8 col-sm-6 col-xs-12 testi-2">
					<!-- TESTIMONIAL TITLE -->
					<h3>Customer Testimonials</h3>
					<div class="testi">
						<h4>John William</h4>
						<p>Ut sed sem quis magna ultricies lacinia et sed tortor. Ut non tincidunt nisi, non elementum lorem. Aliquam gravida sodales</p> <address>Illinois, United States of America</address> </div>
					<!-- ARRANGEMENTS & HELPS -->
					<h3>Arrangement & Helps</h3>
					<div class="arrange">
						<ul>
							<!-- LOCATION MANAGER -->
							<li>
								<a href="#"><img src="images/Location-Manager.png" alt=""> </a>
							</li>
							<!-- PRIVATE GUIDE -->
							<li>
								<a href="#"><img src="images/Private-Guide.png" alt=""> </a>
							</li>
							<!-- ARRANGEMENTS -->
							<li>
								<a href="#"><img src="images/Arrangements.png" alt=""> </a>
							</li>
							<!-- EVENT ACTIVITIES -->
							<li>
								<a href="#"><img src="images/Events-Activities.png" alt=""> </a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== FOOTER 1 ==========-->
	<section>
		<div class="rows">
			<div class="footer1 home_title tb-space">
				<div class="pla1 container">
					<!-- FOOTER OFFER 1 -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="disco">
							<h3>30%<span>OFF</span></h3>
							<h4>Eiffel Tower,Rome</h4>
							<p>valid only for 24th Dec</p> <a href="booking.html">Book Now</a> </div>
					</div>
					<!-- FOOTER OFFER 2 -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="disco1 disco">
							<h3>42%<span>OFF</span></h3>
							<h4>Colosseum,Burj Al Arab</h4>
							<p>valid only for 18th Nov</p> <a href="booking.html">Book Now</a> </div>
					</div>
					<!-- FOOTER MOST POPULAR VACATIONS -->
					<div class="col-md-6 col-sm-12 col-xs-12 foot-spec footer_places">
						<h4><span>Most Popular</span> Vacations</h4>
						<ul>
							<li><a href="tour-details.html">Angkor Wat</a> </li>
							<li><a href="tour-details.html">Buckingham Palace</a> </li>
							<li><a href="tour-details.html">High Line</a> </li>
							<li><a href="tour-details.html">Sagrada Família</a> </li>
							<li><a href="tour-details.html">Statue of Liberty </a> </li>
							<li><a href="tour-details.html">Notre Dame de Paris</a> </li>
							<li><a href="tour-details.html">Taj Mahal</a> </li>
							<li><a href="tour-details.html">The Louvre</a> </li>
							<li><a href="tour-details.html">Tate Modern, London</a> </li>
							<li><a href="tour-details.html">Gothic Quarter</a> </li>
							<li><a href="tour-details.html">Table Mountain</a> </li>
							<li><a href="tour-details.html">Bayon</a> </li>
							<li><a href="tour-details.html">Great Wall of China</a> </li>
							<li><a href="tour-details.html">Hermitage Museum</a> </li>
							<li><a href="tour-details.html">Yellowstone</a> </li>
							<li><a href="tour-details.html">Musée d'Orsay</a> </li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== FOOTER 2 ==========-->
	<section>
		<div class="rows">
			<div class="footer">
				<div class="container">
					<div class="foot-sec2">
						<div>
							<div class="row">
								<div class="col-sm-3 foot-spec foot-com">
									<h4><span>Holiday</span> Tour & Travels</h4>
									<p>World's leading tour and travels Booking website,Over 30,000 packages worldwide.</p>
								</div>
								<div class="col-sm-3 foot-spec foot-com">
									<h4><span>Address</span> & Contact Info</h4>
									<p>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A. Landmark : Next To Airport</p>
									<p> <span class="strong">Phone: </span> <span class="highlighted">+101-1231-1231</span> </p>
								</div>
								<div class="col-sm-3 col-md-3 foot-spec foot-com">
									<h4><span>SUPPORT</span> & HELP</h4>
									<ul class="two-columns">
										<li> <a href="#">About Us</a> </li>
										<li> <a href="#">FAQ</a> </li>
										<li> <a href="#">Feedbacks</a> </li>
										<li> <a href="#">Blog </a> </li>
										<li> <a href="#">Use Cases</a> </li>
										<li> <a href="#">Advertise us</a> </li>
										<li> <a href="#">Discount</a> </li>
										<li> <a href="#">Vacations</a> </li>
										<li> <a href="#">Branding Offers </a> </li>
										<li> <a href="#">Contact Us</a> </li>
									</ul>
								</div>
								<div class="col-sm-3 foot-social foot-spec foot-com">
									<h4><span>Follow</span> with us</h4>
									<p>Join the thousands of other There are many variations of passages of Lorem Ipsum available</p>
									<ul>
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
										<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
										<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
										<li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== FOOTER - COPYRIGHT ==========-->
	<section>
		<div class="rows copy">
			<div class="container">
				<p>Copyrights © 2017 Company Name. All Rights Reserved</p>
			</div>
		</div>
	</section>
	<section>
		<div class="icon-float">
			<ul>
				<li><a href="#" class="sh">1k <br> Share</a> </li>
				<li><a href="#" class="fb1"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
				<li><a href="#" class="gp1"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
				<li><a href="#" class="tw1"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
				<li><a href="#" class="li1"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
				<li><a href="#" class="wa1"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> </li>
				<li><a href="#" class="sh1"><i class="fa fa-envelope-o" aria-hidden="true"></i></a> </li>
			</ul>
		</div>
	</section>
	<!--========= Scripts ===========-->
	<script src="../js/jquery-latest.min.js"></script>
	<script src="../js/bootstrap.js"></script>
	<script src="../js/wow.min.js"></script>
	<script src="../js/materialize.min.js"></script>
	<script src="../js/custom.js"></script>
	<script type="text/javascript">
    	$('#pack').on('change',function(){
        if( $(this).val()==="1"){
        $("#seat").show()
        $("#date").show()

        }
        else{
        $("#seat").hide()
        $("#date").hide()
        }
    });
    </script>
</body>

</html>