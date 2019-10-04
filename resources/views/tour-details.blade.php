<!DOCTYPE html>
<html lang="en">

<head>
	<title>The Travel - Tour Travel</title>
	<!--== META TAGS ==-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- FAV ICON -->
	<link rel="shortcut icon" href="../images/fav.ico">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Poppins%7CQuicksand:400,500,700" rel="stylesheet">
	<!-- FONT-AWESOME ICON CSS -->
	<link rel="stylesheet" href="../css/font-awesome.min.css">
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
			<div class="mob-head-left"> <img src="../images/logo.png" alt=""> </div>
			
		</div>
	</section>
	<!--====== END MOBILE MENU ==========-->
	<!--====== TOP HEADER ==========-->
	<section>
		<div class="rows head"  data-offset-top="120">
			<div class="container">
				<div>
					<!--====== BRANDING LOGO ==========-->
					<div class="col-md-4 col-sm-12 col-xs-12 head_left">
						<a href="/"><img src="../images/logo.png" alt="" /> </a>
					</div>
					<!--====== HELP LINE & EMAIL ID ==========-->
					<div class="col-md-8 col-sm-12 col-xs-12 head_right head_right_all">
						<ul>
							<li><a href="#">Help Line: +91 12345678</a> </li>
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
    
    <!--====== BANNER ==========-->
    <section>
    	<div class="rows inner_banner inner_banner_4" style="background: url('../storage/{{$result->image}}') no-repeat center center;
    background-size: cover;">
    		<div class="container">
    			<h2><span>{{$result->title}}-</span> Family Package</h2>
    			
    			<p>Book travel packages and enjoy your holidays with distinctive experience</p>
    		</div>
    	</div>
    </section>
    <!--====== TOUR DETAILS - BOOKING ==========-->
    <section>
    	<div class="rows banner_book" id="inner-page-title">
    		<div class="container">
    			<div class="banner_book_1">
    				<ul>
                        @if ( !empty ( $result->seat ) ) {
    
    					<li class="dl1">Available seats : {{$result->seat}}</li>
                    } 
                    @else
                    {
                        <li class="dl1">Limited seats</li>
                    }
                    @endif
    					<li class="dl2">Price : ₹{{$result->price}}</li>
    					<li class="dl3">Duration : {{$result->duration}}</li>
    					<li class="dl4"><a href="/booking/{{$result->id}}">Book Now</a> </li>
    				</ul>
    			</div>
    		</div>
    	</div>
    </section>
    <!--====== TOUR DETAILS ==========-->
    <section>
    	<div class="rows inn-page-bg com-colo">
    		<div class="container inn-page-con-bg tb-space">
    			<div class="col-md-9">
    				<!--====== TOUR TITLE ==========-->
    				<div class="tour_head">
    					<h2>The Best of {{$result->title}} <span class="tour_star"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i></span><span class="tour_rat">4.5</span></h2> </div>
    					<!--====== TOUR DESCRIPTION ==========-->
    					
    					<!--====== ROOMS: HOTEL BOOKING ==========-->
    					<div class="tour_head1 hotel-book-room">
    						<h3>Photo Gallery</h3>
    						<div id="myCarousel1" class="carousel slide" data-ride="carousel">
    							<!-- Indicators -->
    							<ol class="carousel-indicators carousel-indicators-1">
                                    <li data-target="#myCarousel1" data-slide-to="0"><img src="../storage/{{$result->image}}" alt="Chania" width="460" height="345">
                                    @foreach($img as $image)
    								<li data-target="#myCarousel1" data-slide-to="0"><img src="../storage/{{$image->path}}" alt="Chania" width="460" height="345">
    								</li>
                                    @endforeach
    								
    							</ol>
    							<!-- Wrapper for slides -->
    							<div class="carousel-inner carousel-inner1" role="listbox">
    								<div class="item active"> <img src="../storage/{{$result->image}}" alt="Chania" width="460" height="345"> </div>
                                                                        @foreach($img as $image)
    								<div class="item"> <img src="../storage/{{$image->path}}" alt="Chania" width="850" height="345"> </div>
                                    @endforeach
    								
    							</div>
    							<!-- Left and right controls -->
    							<a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev"> <span><i class="fa fa-angle-left hotel-gal-arr" aria-hidden="true"></i></span> </a>
    							<a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next"> <span><i class="fa fa-angle-right hotel-gal-arr hotel-gal-arr1" aria-hidden="true"></i></span> </a>
    						</div>
    					</div>
    					<!--====== TOUR LOCATION ==========-->
    					<div class="tour_head1">
    						<h3>Description</h3>
    						<p>{{$result->description}}</p>
                            	</div>
    					
    					<div>
    						
    					</div>
    				</div>
    				<div class="col-md-3 tour_r">
    					<!--====== SPECIAL OFFERS ==========-->
    					<div class="tour_right tour_offer" style="background: url('../storage/{{$result->image}}')">
    						<div class="band1"><img src="images/offer.png" alt="" /> </div>
    						<p>Special Offer</p>
    						<h4>₹{{$result->price-1000}}<span class="n-td">
    							<span class="n-td-1">₹{{$result->price}}</span>
    						</span>
    					</h4> <a href="/booking" class="link-btn">Book Now</a> </div>
    					<!--====== TRIP INFORMATION ==========-->
    					
    					<!--====== PACKAGE SHARE ==========-->
    					<div class="tour_right head_right tour_social tour-ri-com">
    						<h3>Share This Package</h3>
    						<ul>
    							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
    							<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
    							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
    							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
    							<li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> </li>
    						</ul>
    					</div>
    					<!--====== HELP PACKAGE ==========-->
    					<div class="tour_right head_right tour_help tour-ri-com">
    						<h3>Help & Support</h3>
    						<div class="tour_help_1">
    							<h4 class="tour_help_1_call">Call Us Now</h4>
    							<h4><i class="fa fa-phone" aria-hidden="true"></i>  +91 9633638812</h4> </div>
    						</div>
    						<!--====== PUPULAR TOUR PACKAGES ==========-->
    						
    					</div>
    				</div>
    			</div>
    		</section>
    		<!--====== TIPS BEFORE TRAVEL ==========-->
    		
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
    								<p>valid only for 24th Dec</p> <a href="/booking">Book Now</a> </div>
    							</div>
    							<!-- FOOTER OFFER 2 -->
    							<div class="col-md-3 col-sm-6 col-xs-12">
    								<div class="disco1 disco">
    									<h3>42%<span>OFF</span></h3>
    									<h4>Colosseum,Burj Al Arab</h4>
    									<p>valid only for 18th Nov</p> <a href="/booking">Book Now</a> </div>
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
    			</body>

    			</html>