
@extends('layout.master')
@section('content')
 
<div class="fullwidthbanner-container">
	<div class="fullwidthbanner">
		<ul>

			<!-- Slide 1 -->
			<li data-fstransition="fade" data-transition="fade" data-slotamount="10" data-masterspeed="300">

				<img src="{{ asset('images/banner-01.jpg') }}"  alt="">
				<div class="caption title sfb" data-x="0" data-y="165" data-speed="400" data-start="800"  data-easing="easeOutExpo">
					<h2>Explore and be discovered</h2>
				</div>

				<div class="caption text sfb" data-x="0" data-y="240" data-speed="400" data-start="1200" data-easing="easeOutExpo">
					<p>Connect directly with and be discovered by the employers <br>who want to hire you.</p>
				</div>

				<div class="caption sfb" data-x="0" data-y="370" data-speed="400" data-start="1600" data-easing="easeOutExpo">
					<a href="my-account.html" class="slider-button">Get Started</a>
				</div>
			</li>

			<!-- Slide 2 -->
			<li data-transition="slideup" data-slotamount="10" data-masterspeed="800">
				<img src="{{ asset('images/banner-02.jpg') }}" alt="">

				<div class="caption title sfb" data-x="center" data-y="165" data-speed="400" data-start="800"  data-easing="easeOutExpo">
					<h2>Hire great hourly employees</h2>
				</div>

				<div class="caption text align-center sfb" data-x="center" data-y="240" data-speed="400" data-start="1200" data-easing="easeOutExpo">
					<p>Work Scout is most trusted job board, connecting the world's <br> brightest minds with resume database loaded with talents.</p>
				</div>

				<div class="caption sfb" data-x="center" data-y="370" data-speed="400" data-start="1600" data-easing="easeOutExpo">
					<a href="add-job.html" class="slider-button">Hire</a>
					<a href="browse-jobs.html" class="slider-button">Work</a>
				</div>
			</li>

		</ul>
	</div>

</div>
<div class="container">
	
	<!-- Recent Jobs -->
	<div class="eleven columns">
	<div class="padding-right">
		<h3 class="margin-bottom-25">Recent Jobs</h3>
		<ul class="job-list">

			<li class="highlighted"><a href="job-page.html">
				<img src="images/job-list-logo-01.png" alt="">
				<div class="job-list-content">
					<h4>Marketing Coordinator - SEO / SEM Experience <span class="full-time">Full-Time</span></h4>
					<div class="job-icons">
						<span><i class="fa fa-briefcase"></i> King</span>
						<span><i class="fa fa-map-marker"></i> Sydney</span>
						<span><i class="fa fa-money"></i> $100 / hour</span>
					</div>
				</div>
				</a>
				<div class="clearfix"></div>
			</li>

			<li><a href="job-page.html">
				<img src="images/job-list-logo-02.png" alt="">
				<div class="job-list-content">
					<h4>Core PHP Developer for Site Maintenance <span class="part-time">Part-Time</span></h4>
					<div class="job-icons">
						<span><i class="fa fa-briefcase"></i> Cubico</span>
						<span><i class="fa fa-map-marker"></i> London</span>
						<span><i class="fa fa-money"></i> $50 / hour</span>
					</div>
				</div>
				</a>
				<div class="clearfix"></div>
			</li>

			<li><a href="job-page.html">
				<img src="images/job-list-logo-03.png" alt="">
				<div class="job-list-content">
					<h4>Restaurant Team Member - Crew <span class="full-time">Full-Time</span></h4>
					<div class="job-icons">
						<span><i class="fa fa-briefcase"></i> King</span>
						<span><i class="fa fa-map-marker"></i> Sydney</span>
						<span><i class="fa fa-money"></i> $15 / hour</span>
					</div>
				</div>
				</a>
				<div class="clearfix"></div>
			</li>

			<li><a href="job-page.html">
				<img src="images/job-list-logo-04.png" alt="">
				<div class="job-list-content">
					<h4>Power Systems User Experience Designer  <span class="internship">Internship</span></h4>
					<div class="job-icons">
						<span><i class="fa fa-briefcase"></i> Hexagon</span>
						<span><i class="fa fa-map-marker"></i> London</span>
						<span><i class="fa fa-money"></i> $75 / hour</span>
					</div>
				</div>
				</a>
				<div class="clearfix"></div>
			</li>

			<li><a href="job-page.html">
				<img src="images/job-list-logo-05.png" alt="">
				<div class="job-list-content">
					<h4>iPhone / Android Music App Development <span class="temporary">Temporary</span></h4>
					<div class="job-icons">
						<span><i class="fa fa-briefcase"></i> Mates</span>
						<span><i class="fa fa-map-marker"></i> New York</span>
						<span><i class="fa fa-money"></i> $115 / hour</span>
					</div>
				</div>
				</a>
				<div class="clearfix"></div>
			</li>
		</ul>

		<a href="browse-jobs.html" class="button centered"><i class="fa fa-plus-circle"></i> Show More Jobs</a>
		<div class="margin-bottom-55"></div>
	</div>
	</div>

	<!-- Job Spotlight -->
	<div class="five columns">
		<h3 class="margin-bottom-5">Job Spotlight</h3>

		<!-- Navigation -->
		<div class="showbiz-navigation">
			<div id="showbiz_left_1" class="sb-navigation-left"><i class="fa fa-angle-left"></i></div>
			<div id="showbiz_right_1" class="sb-navigation-right"><i class="fa fa-angle-right"></i></div>
		</div>
		<div class="clearfix"></div>
		
		<!-- Showbiz Container -->
		<div id="job-spotlight" class="showbiz-container">
			<div class="showbiz" data-left="#showbiz_left_1" data-right="#showbiz_right_1" data-play="#showbiz_play_1" >
				<div class="overflowholder">

					<ul>

						<li>
							<div class="job-spotlight">
								<a href="#"><h4>Social Media: Advertising Coordinator <span class="part-time">Part-Time</span></h4></a>
								<span><i class="fa fa-briefcase"></i> Mates</span>
								<span><i class="fa fa-map-marker"></i> New York</span>
								<span><i class="fa fa-money"></i> $20 / hour</span>
								<p>As advertising & content coordinator, you will support our social media team in producing high quality social content for a range of media channels.</p>
								<a href="job-page.html" class="button">Apply For This Job</a>
							</div>
						</li>

						<li>
							<div class="job-spotlight">
								<a href="#"><h4>Prestashop / WooCommerce Product Listing <span class="freelance">Freelance</span></h4></a>
								<span><i class="fa fa-briefcase"></i> King</span>
								<span><i class="fa fa-map-marker"></i> London</span>
								<span><i class="fa fa-money"></i> $25 / hour</span>
								<p>Etiam suscipit tellus ante, sit amet hendrerit magna varius in. Pellentesque lorem quis enim venenatis pellentesque.</p>
								<a href="job-page.html" class="button">Apply For This Job</a>
							</div>
						</li>

						<li>
							<div class="job-spotlight">
								<a href="#"><h4>Logo Design <span class="freelance">Freelance</span></h4></a>
								<span><i class="fa fa-briefcase"></i> Hexagon</span>
								<span><i class="fa fa-map-marker"></i> Sydney</span>
								<span><i class="fa fa-money"></i> $10 / hour</span>
								<p>Proin ligula neque, pretium et ipsum eget, mattis commodo dolor. Etiam tincidunt libero quis commodo.</p>
								<a href="job-page.html" class="button">Apply For This Job</a>
							</div>
						</li>


					</ul>
					<div class="clearfix"></div>

				</div>
				<div class="clearfix"></div>
			</div>
		</div>

	</div>
</div>


<!-- Counters -->
<div id="counters">
	<div class="container">

		<div class="four columns">
			<div class="counter-box">
				<span class="counter">15</span><i>k</i>
				<p>Job Offers</p>
			</div>
		</div>

		<div class="four columns">
			<div class="counter-box">
				<span class="counter">4982</span>
				<p>Members</p>
			</div>
		</div>

		<div class="four columns">
			<div class="counter-box">
				<span class="counter">768</span>
				<p>Resumes Posted</p>
			</div>
		</div>

		<div class="four columns">
			<div class="counter-box">
				<span class="counter">90</span><i>%</i>
				<p>Clients Who Rehire</p>
			</div>
		</div>

	</div>
</div>


<!-- Infobox -->
<div class="infobox">
	<div class="container">
		<div class="sixteen columns">Start Building Your Own Job Board Now <a href="my-account.html">Get Started</a></div>
	</div>
</div>


<!-- Recent Posts -->
<div class="container">
	<div class="sixteen columns">
		<h3 class="margin-bottom-25">Job Plans & Pricing</h3>
	</div>


	<!-- Plan #1 -->
	<div class="plan color-1 one-third column">
		<div class="plan-price">
			<h3>Start Up</h3>
			<span class="plan-currency">$</span>
			<span class="value">19</span>
			
		</div>
		<div class="plan-features">
			<ul>
				<li>One Time Fee</li>
				<li>This Plan Includes 1 Job</li>
				<li>Non-Highlighted Post</li>
				<li>Posted For 30 Days</li>
			</ul>
			<a class="button" href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
		</div>
	</div>

	<!-- Plan #2 -->	
	<div class="plan color-2 one-third column">
		<div class="plan-price">
			<h3>Company</h3>
			<span class="plan-currency">$</span>
			<span class="value">59</span>
		</div>
		<div class="plan-features">
			<ul>
				<li>One Time Fee</li>
				<li>This Plan Includes 2 Jobs</li>
				<li>Highlighted Job Post</li>
				<li>Posted For 60 Days</li>
			</ul>
			<a class="button" href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
		</div>
	</div>
			
	<!-- Plan #3 -->
	<div class="plan color-1 one-third column">
		<div class="plan-price">
			<h3>Enterprise</h3>
			<span class="plan-currency">$</span>
			<span class="value">99</span>
		</div>
		<div class="plan-features">
			<ul>
				<li>One Time Fee</li>
				<li>This Plan Includes 4 Jobs</li>
				<li>2 Highlighted Job Posts</li>
				<li>Posted For 90 Days</li>
			</ul>
			<a class="button" href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
		</div>
	</div>

</div>



<!-- Clients Carousel -->
<h3 class="centered-headline">Clients Who Have Trusted Us <span>The list of clients who have put their trust in us includes:</span></h3>
<div class="clearfix"></div>

<div class="container">

	<div class="sixteen columns">

		<!-- Navigation / Left -->
		<div class="one carousel column"><div id="showbiz_left_2" class="sb-navigation-left-2"><i class="fa fa-angle-left"></i></div></div>

		<!-- ShowBiz Carousel -->
		<div id="our-clients" class="showbiz-container fourteen carousel columns" >

		<!-- Portfolio Entries -->
		<div class="showbiz our-clients" data-left="#showbiz_left_2" data-right="#showbiz_right_2">
			<div class="overflowholder">

				<ul>
					<!-- Item -->
					<li><img src="images/logo-01.png" alt="" /></li>
					<li><img src="images/logo-02.png" alt="" /></li>
					<li><img src="images/logo-03.png" alt="" /></li>
					<li><img src="images/logo-04.png" alt="" /></li>
					<li><img src="images/logo-05.png" alt="" /></li>
					<li><img src="images/logo-06.png" alt="" /></li>
					<li><img src="images/logo-07.png" alt="" /></li>
				</ul>
				<div class="clearfix"></div>

			</div>
			<div class="clearfix"></div>

		</div>
		</div>

		<!-- Navigation / Right -->
		<div class="one carousel column"><div id="showbiz_right_2" class="sb-navigation-right-2"><i class="fa fa-angle-right"></i></div></div>

	</div>

</div>
<!-- Container / End -->
@endsection