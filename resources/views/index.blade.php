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
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/materialize.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/mob.css">
	<link rel="stylesheet" href="css/animate.css">
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
						<a href="/"><img src="images/logo.png" alt="" /> </a>
					</div>
					<!--====== HELP LINE & EMAIL ID ==========-->
					<div class="col-md-8 col-sm-12 col-xs-12 head_right head_right_all">
						<ul>
							<li><a href="#">Help Line: +91 9447987057</a> </li>
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
								</div>	--><a class='dropdown-button waves-effect waves-light profile-btn' href='/login' data-activates='myacc'><i class="fa fa-user" aria-hidden="true"></i> Login</a>
													<a class='dropdown-button waves-effect waves-light profile-btn' href='/login' data-activates='myacc'><i class="fa fa-user" aria-hidden="true"></i> Registration</a>
								<!-- Dropdown Structure -->
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== NAVIGATION MENU ==========-->

	<!-- SECTION: HEADER -->
	<!--HEADER SECTION-->
	<section>
		<div class="tourz-search">
			<div class="container">
				<div class="row">
					<div class="tourz-search-1">
						<h1>Kerala Weekend Planner</h1>
						<p>Kochi,Kerala</p>
						<p>Experience the various exciting tour and travel packages and Make hotel reservations, find vacation packages, search cheap hotels and events</p>


					</div>
				</div>
			</div>
		</div>
	</section>
	<!--END HEADER SECTION-->
	<!--====== HOME PLACES ==========-->
	<section>
		<div class="rows pad-bot-redu tb-space">
			<div class="container">
				<!-- TITLE & DESCRIPTION -->
				<div class="spe-title">
					<h2>Top <span>Tour Packages</span></h2>
					<div class="title-line">
						<div class="tl-1"></div>
						<div class="tl-2"></div>
						<div class="tl-3"></div>
					</div>
					<p>World's leading tour and travels Booking website,Over 30,000 packages worldwide.</p>
				</div>
				<div>

					@foreach ($details as $detail)
					@if($detail->package=='0')



					<!-- TOUR PLACE 1 -->
					<div class="col-md-4 col-sm-6 col-xs-12 b_packages">
						<!-- OFFER BRAND -->
						<div class="band"> <img src="images/band.png" alt="" /> </div>
						<!-- IMAGE -->
						<div class="v_place_img"> <img src="storage/{{$detail->image}}" alt="Tour Booking" title="Tour Booking" height="200" width='200'/> </div>
						<!-- TOUR TITLE & ICONS -->
						<div class="b_pack rows">
							<!-- TOUR TITLE -->
							<div class="col-md-8 col-sm-8">
								<h4><a href="/tour-details/{{$detail->id}}">{{$detail->title}}<span class="v_pl_name"></span></a></h4> </div>
							<!-- TOUR ICONS -->
							<div class="col-md-4 col-sm-4 pack_icon">
								<ul>
									<li>
										<a href="#"><img src="images/clock.png" alt="Date" title="Tour Timing" /> </a>
									</li>
									<li>
										<a href="#"><img src="images/info.png" alt="Details" title="View more details" /> </a>
									</li>
									<li>
										<a href="#"><img src="images/price.png" alt="Price" title="Price" /> </a>
									</li>
									<li>
										<a href="#"><img src="images/map.png" alt="Location" title="Location" /> </a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					@endif
					@endforeach



				</div>
			</div>
		</div>
	</section>
	<!--====== HOME HOTELS ==========-->

	<!--====== HOME HOTELS ==========-->
	<section>
		<div class="rows tb-space pad-top-o pad-bot-redu">
			<div class="container">
				<!-- TITLE & DESCRIPTION -->
				<div class="spe-title">
					<h2><span>Top</span> Events <span>Coming Soon! </span> </h2>
					<div class="title-line">
						<div class="tl-1"></div>
						<div class="tl-2"></div>
						<div class="tl-3"></div>
					</div>
					<p>World's leading Hotel Booking website,Over 30,000 Hotel rooms worldwide. Book Hotel rooms and enjoy your holidays with distinctive experience</p>
				</div>
				<!-- HOTEL GRID -->
				<div class="to-ho-hotel">
					<!-- HOTEL GRID -->

					<!-- HOTEL GRID -->
					@foreach ($details as $detail)
					@if($detail->package=='1')
					<div class="col-md-4">
						<div class="to-ho-hotel-con">
							<div class="to-ho-hotel-con-1">
								<div class="hot-page2-hli-3"> <img src="images/hci1.png" alt=""> </div>
								<div class="hom-hot-av-tic"> Available Tickets: {{$detail->seat}} </div> <img src="storage/{{$detail->image}}" alt=""> </div>
							<div class="to-ho-hotel-con-23">
								<div class="to-ho-hotel-con-2"> <a href="/tour-details/{{$detail->id}}"><h4>{{$detail->title}}</h4></a> </div>
								<div class="to-ho-hotel-con-3">
									<ul>

										<li><span class="ho-hot-pri-dis">₹840</span><span class="ho-hot-pri">₹{{$detail->price}}</span> </li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					@endif
					@endforeach
					<!-- HOTEL GRID -->
							</div>
			</div>
		</div>
	</section>
	<!--====== SECTION: FREE CONSULTANT ==========-->

	<!--====== EVENTS ==========-->

	<!--====== POPULAR TOUR PLACES ==========-->

	<!--====== REQUEST A QUOTE ==========-->

	<!--====== REQUEST A QUOTE ==========-->
	<!--<section>
        <div class="form tb-space">
            <div class="rows container">
                <div class="spe-title">
                    <h2>Book your <span>favourite Package</span> Now!</h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with distinctive experience</p>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 form_1">
                    <div class="succ_mess">Thank you for contacting us we will get back to you soon.</div>
                    <form id="home_form" name="home_form" action="mail/send.php">
                        <ul>
                            <li>
                                <input type="text" name="ename" value="" id="ename" placeholder="Name" required>
                            </li>
                            <li>
                                <input type="tel" name="emobile" value="" id="emobile" placeholder="Mobile" required>
                            </li>
                            <li>
                                <input type="email" name="eemail" value="" id="eemail" placeholder="Email id" required>
                            </li>
                            <li>
                                <input type="text" name="esubject" value="" id="esubject" placeholder="Subject" required>
                            </li>
                            <li>
                                <input type="text" name="ecity" value="" id="ecity" placeholder="City" required>
                            </li>
                            <li>
                                <input type="text" name="ecount" value="" id="ecount" placeholder="Country" required>
                            </li>
                            <li>
                                <textarea name="emess" cols="40" rows="3" id="text-comment" placeholder="Enter your message"></textarea>
                            </li>
                            <li>
                                <input type="submit" value="Submit" id="send_button">
                            </li>
                        </ul>
                    </form>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 family">
                    <img src="images/family.png" alt="" />
                </div>
            </div>
        </div>
    </section>-->
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
							<li><a href="/tour-details">Angkor Wat</a> </li>
							<li><a href="/tour-details">Buckingham Palace</a> </li>
							<li><a href="/tour-details">High Line</a> </li>
							<li><a href="/tour-details">Sagrada Família</a> </li>
							<li><a href="/tour-details">Statue of Liberty </a> </li>
							<li><a href="/tour-details">Notre Dame de Paris</a> </li>
							<li><a href="/tour-details">Taj Mahal</a> </li>
							<li><a href="/tour-details">The Louvre</a> </li>
							<li><a href="/tour-details">Tate Modern, London</a> </li>
							<li><a href="/tour-details">Gothic Quarter</a> </li>
							<li><a href="/tour-details">Table Mountain</a> </li>
							<li><a href="/tour-details">Bayon</a> </li>
							<li><a href="/tour-details">Great Wall of China</a> </li>
							<li><a href="/tour-details">Hermitage Museum</a> </li>
							<li><a href="/tour-details">Yellowstone</a> </li>
							<li><a href="/tour-details">Musée d'Orsay</a> </li>
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

	<!--========= Scripts ===========-->
	<script src="js/jquery-latest.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/materialize.min.js"></script>
	<script src="js/custom.js"></script>
</body>

</html>
