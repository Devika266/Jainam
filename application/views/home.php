<!DOCTYPE html>
<html lang="zxx">

<head>
	<?php $this->load->view('components/head'); ?>
</head>

<body>

	<!-- Preloader Start -->
	<div class="preloader">
		<div class="loading-container">
			<div class="loading"></div>
			<div id="loading-icon"><img src="<?php echo base_url()?>assets/images/loader.svg" alt=""></div>
		</div>
	</div>
	<!-- Preloader End -->
	<?php $this->load->view('components/navbar'); ?>
	<!-- Hero Section Start -->
	<!-- Hero Section Start -->
	<div class="hero bg-section dark-section parallaxie">

		<!-- Hero Background -->
		<div class="hero-bg-video">
			<!-- Replace with your truck video if available -->
			<video autoplay muted loop id="myvideo">
				<source src="https://demo.awaikenthemes.com/assets/videos/carvox-video.mp4" type="video/mp4">
			</video>

			<!-- OR use a background image instead -->
			<!--
        <div class="hero-bg-image"
            style="background:url('<?php echo base_url()?>assets/images/hero-banner.jpg') center center/cover no-repeat;
            position:absolute;
            width:100%;
            height:100%;
            top:0;
            left:0;"></div>
        -->
		</div>

		<div class="container">
			<div class="row">
				<div class="col-lg-12">

					<div class="hero-content">

						<div class="section-title section-title-center">

							<h3 class="wow fadeInUp">
								Welcome To Jainam Logistics
							</h3>

							<h1 class="text-anime-style-3" data-cursor="-opaque">
								Trusted Logistics & Transportation Solutions Across India
							</h1>

						</div>

						<div class="section-content-btn">

							<div class="section-title-content wow fadeInUp" data-wow-delay="0.2s">

								<p>
									Jainam Logistics delivers safe, reliable and cost-effective
									transportation services with a modern fleet, experienced
									professionals and a strong commitment to timely deliveries.
									We help businesses move their goods efficiently across India.
								</p>

							</div>

							<div class="section-btn wow fadeInUp" data-wow-delay="0.4s">

								<a href="<?php echo base_url('contact'); ?>" class="btn-default btn-highlighted">
									Get a Quote
								</a>

								<a href="<?php echo base_url('about'); ?>" class="btn-default ms-3">
									Learn More
								</a>

							</div>

						</div>

					</div>

				</div>

				<div class="col-lg-12">

					<div class="hero-info-list wow fadeInUp" data-wow-delay="0.6s">

						<ul>

							<li>✔ PAN India Transportation</li>

							<li>✔ GPS Enabled Fleet</li>

							<li>✔ Safe & Secure Cargo Handling</li>

							<li>✔ Experienced Logistics Team</li>

							<li>✔ On-Time Delivery Assurance</li>

							<li>✔ 24×7 Customer Support</li>

						</ul>

					</div>

				</div>

			</div>
		</div>

	</div>
	<!-- Hero Section End -->
	<!-- Hero Section End -->

	<!-- About Us Section Start -->
	<!-- About Us Section Start -->
	<div class="about-us">
		<div class="container">
			<div class="row section-row">
				<div class="col-lg-12">

					<!-- Section Title Start -->
					<div class="section-title section-title-center">
						<h3 class="wow fadeInUp">About Jainam Logistics</h3>

						<h2 class="text-effect" data-cursor="-opaque">
							Delivering trusted <span class="about-us-title-image-1">
								<img src="<?php echo base_url()?>assets/images/about-us-title-image-1.jpg" alt="">
							</span>
							logistics and transportation solutions with
							<span class="about-us-title-image-2">
								<img src="<?php echo base_url()?>assets/images/about-us-title-image-2.jpg" alt="">
							</span>
							a commitment to safety, reliability and on-time deliveries across India.
						</h2>
					</div>
					<!-- Section Title End -->

				</div>
			</div>

			<div class="row">

				<!-- Left Image -->
				<div class="col-xl-4 col-md-6">

					<div class="about-us-image-box wow fadeInUp">

						<div class="about-us-image">
							<figure class="image-anime">
								<img src="<?php echo base_url()?>assets/images/about-us-image.jpg" alt="">
							</figure>
						</div>

						<div class="about-counter-box">
							<h2><span class="counter">24</span>/7</h2>
							<p>Customer Support</p>
						</div>

					</div>

				</div>

				<!-- Middle Box -->
				<div class="col-xl-4 col-md-6">

					<div class="about-us-item wow fadeInUp" data-wow-delay="0.2s">

						<div class="about-us-item-content">
							<h3>Reliable Transportation Backed by Modern Infrastructure</h3>

							<p>
								Jainam Logistics provides dependable freight and transportation
								services through a modern fleet, experienced professionals,
								advanced tracking systems and customer-focused logistics solutions.
							</p>
						</div>

						<div class="about-us-body">

							<div class="about-counter-box">
								<h2><span class="counter">15</span>+</h2>
								<p>Years of Experience</p>
							</div>

							<div class="about-us-body-image">
								<figure>
									<img src="<?php echo base_url()?>assets/images/about-us-body-image.png" alt="">
								</figure>
							</div>

						</div>

					</div>

				</div>

				<!-- Right Box -->
				<div class="col-xl-4 col-md-6">

					<div class="about-us-item highlighted-box wow fadeInUp" data-wow-delay="0.4s">

						<div class="about-us-item-content">

							<p>
								We are committed to delivering safe, efficient and cost-effective
								logistics services that help businesses move their goods with
								confidence across the country.
							</p>

						</div>

						<div class="about-us-list-btn">

							<div class="about-us-item-list">

								<ul>
									<li>Safe & Secure Cargo Transportation</li>

									<li>GPS Enabled Fleet with Timely Delivery</li>

								</ul>

							</div>

							<div class="about-us-item-btn">

								<a href="<?php echo base_url('about'); ?>" class="btn-default btn-highlighted">
									Learn More
								</a>

							</div>

						</div>

					</div>

				</div>

				<!-- Bottom -->
				<div class="col-lg-12">

					<div class="section-footer-text wow fadeInUp" data-wow-delay="0.4s">

						<p>
							Your trusted logistics partner for reliable transportation solutions.
							<a href="<?php echo base_url('contact'); ?>">Get in Touch</a>
						</p>

						<ul>

							<li><span class="counter">98</span>%</li>

							<li>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
							</li>

							<li>On-Time Delivery Rate</li>

						</ul>

					</div>

				</div>

			</div>
		</div>
	</div>
	<!-- About Us Section End -->
	<!-- About Us Section End -->

	<!-- Our Services Section Start -->
	<div class="our-services bg-section">
		<div class="container">

			<div class="row section-row">
				<div class="col-lg-12">

					<!-- Section Title Start -->
					<div class="section-title section-title-center">
						<h3 class="wow fadeInUp">Our Transportation Services</h3>
						<h2 class="text-anime-style-3" data-cursor="-opaque">
							Comprehensive logistics solutions tailored to meet your transportation needs.
						</h2>
					</div>
					<!-- Section Title End -->

				</div>
			</div>

			<div class="row">

				<!-- Service 1 -->
				<div class="col-xl-3 col-md-6">
					<div class="service-item service-box-1 wow fadeInUp">

						<div class="service-item-image">
							<a href="<?php echo base_url('services'); ?>" data-cursor-text="View">
								<figure>
									<img src="<?php echo base_url()?>assets/images/service-1.jpg" alt="">
								</figure>
							</a>
						</div>

						<div class="service-item-body">

							<div class="icon-box">
								<i class="fa-solid fa-truck"></i>
							</div>

							<div class="service-item-content">
								<h3>
									<a href="<?php echo base_url('services'); ?>">
										Full Truck Load (FTL)
									</a>
								</h3>

								<p>
									Dedicated truck transportation for bulk cargo with safe, secure and timely
									deliveries.
								</p>
							</div>

							<div class="service-item-btn">
								<a href="<?php echo base_url('services'); ?>" class="readmore-btn">
									View Details
								</a>
							</div>

						</div>
					</div>
				</div>

				<!-- Service 2 -->
				<div class="col-xl-3 col-md-6">
					<div class="service-item service-box-2 wow fadeInUp" data-wow-delay="0.2s">

						<div class="service-item-image">
							<a href="<?php echo base_url('services'); ?>" data-cursor-text="View">
								<figure>
									<img src="<?php echo base_url()?>assets/images/service-2.jpg" alt="">
								</figure>
							</a>
						</div>

						<div class="service-item-body">

							<div class="icon-box">
								<i class="fa-solid fa-truck-fast"></i> </div>

							<div class="service-item-content">
								<h3>
									<a href="<?php echo base_url('services'); ?>">
										Part Truck Load (LTL)
									</a>
								</h3>

								<p>
									Cost-effective transportation for small and medium-sized consignments across India.
								</p>
							</div>

							<div class="service-item-btn">
								<a href="<?php echo base_url('services'); ?>" class="readmore-btn">
									View Details
								</a>
							</div>

						</div>
					</div>
				</div>

				<!-- Service 3 -->
				<div class="col-xl-3 col-md-6">
					<div class="service-item service-box-3 wow fadeInUp" data-wow-delay="0.4s">

						<div class="service-item-image">
							<a href="<?php echo base_url('services'); ?>" data-cursor-text="View">
								<figure>
									<img src="<?php echo base_url()?>assets/images/service-3.jpg" alt="">
								</figure>
							</a>
						</div>

						<div class="service-item-body">

							<div class="icon-box">
								<i class="fa-solid fa-boxes-stacked"></i> </div>

							<div class="service-item-content">
								<h3>
									<a href="<?php echo base_url('services'); ?>">
										Industrial Logistics
									</a>
								</h3>

								<p>
									Reliable logistics support for manufacturing, engineering and industrial businesses.
								</p>
							</div>

							<div class="service-item-btn">
								<a href="<?php echo base_url('services'); ?>" class="readmore-btn">
									View Details
								</a>
							</div>

						</div>
					</div>
				</div>

				<!-- Service 4 -->
				<div class="col-xl-3 col-md-6">
					<div class="service-item service-box-4 wow fadeInUp" data-wow-delay="0.6s">

						<div class="service-item-image">
							<a href="<?php echo base_url('services'); ?>" data-cursor-text="View">
								<figure>
									<img src="<?php echo base_url()?>assets/images/service-4.jpg" alt="">
								</figure>
							</a>
						</div>

						<div class="service-item-body">

							<div class="icon-box">
								<i class="fa-solid fa-warehouse"></i>
							</div>

							<div class="service-item-content">
								<h3>
									<a href="<?php echo base_url('services'); ?>">
										Warehousing & Distribution
									</a>
								</h3>

								<p>
									Secure warehousing, inventory management and efficient distribution services.
								</p>
							</div>

							<div class="service-item-btn">
								<a href="<?php echo base_url('services'); ?>" class="readmore-btn">
									View Details
								</a>
							</div>

						</div>
					</div>
				</div>

				<!-- Footer Text -->
				<div class="col-lg-12">
					<div class="section-footer-text wow fadeInUp" data-wow-delay="0.4s">
						<p>
							<span>Need</span> a reliable logistics partner?
							<a href="<?php echo base_url('contact'); ?>">
								Request a Free Quote
							</a>
						</p>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- Our Services Section End -->

	<!-- Integrated Services Section Start -->
	<div class="our-project">
		<div class="container">

			<div class="row section-row">
				<div class="col-lg-12">
					<div class="section-title section-title-center">
						<h3 class="wow fadeInUp">Integrated Services</h3>
						<h2 class="text-anime-style-3" data-cursor="-opaque">
							Complete Logistics Solutions Under One Roof
						</h2>
					</div>
				</div>
			</div>

			<div class="row">

				<!-- Card 1 -->
				<div class="col-lg-4 col-md-6 mb-4 wow fadeInUp">
					<div class="project-item">
						<div class="project-item-image">
							<figure>
								<img src="<?php echo base_url()?>assets/images/project-1.jpg" alt="">
							</figure>
						</div>

						<div class="project-item-body">
							<div class="project-item-tag">
								<ul>
									<li>Transportation</li>
								</ul>
							</div>

							<div class="project-item-content">
								<h3>Road Transportation</h3>
								<p>Safe and reliable transportation services across India with timely deliveries.</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Card 2 -->
				<div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.2s">
					<div class="project-item">
						<div class="project-item-image">
							<figure>
								<img src="<?php echo base_url()?>assets/images/project-2.jpg" alt="">
							</figure>
						</div>

						<div class="project-item-body">
							<div class="project-item-tag">
								<ul>
									<li>Freight</li>
								</ul>
							</div>

							<div class="project-item-content">
								<h3>Full Truck Load (FTL)</h3>
								<p>Dedicated transportation solutions for bulk shipments with complete safety.</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Card 3 -->
				<div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.4s">
					<div class="project-item">
						<div class="project-item-image">
							<figure>
								<img src="<?php echo base_url()?>assets/images/project-3.jpg" alt="">
							</figure>
						</div>

						<div class="project-item-body">
							<div class="project-item-tag">
								<ul>
									<li>Distribution</li>
								</ul>
							</div>

							<div class="project-item-content">
								<h3>Part Truck Load (LTL)</h3>
								<p>Affordable transportation for smaller consignments with optimized delivery.</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Card 4 -->
				<div class="col-lg-4 col-md-6 mb-4 wow fadeInUp">
					<div class="project-item">
						<div class="project-item-image">
							<figure>
								<img src="<?php echo base_url()?>assets/images/project-4.jpg" alt="">
							</figure>
						</div>

						<div class="project-item-body">
							<div class="project-item-tag">
								<ul>
									<li>Warehouse</li>
								</ul>
							</div>

							<div class="project-item-content">
								<h3>Warehousing & Distribution</h3>
								<p>Secure warehousing with inventory management and efficient distribution services.</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Card 5 -->
				<div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.2s">
					<div class="project-item">
						<div class="project-item-image">
							<figure>
								<img src="<?php echo base_url()?>assets/images/project-5.jpg" alt="">
							</figure>
						</div>

						<div class="project-item-body">
							<div class="project-item-tag">
								<ul>
									<li>Supply Chain</li>
								</ul>
							</div>

							<div class="project-item-content">
								<h3>Supply Chain Solutions</h3>
								<p>End-to-end logistics planning and supply chain management for businesses.</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Card 6 -->
				<div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.4s">
					<div class="project-item">
						<div class="project-item-image">
							<figure>
								<img src="<?php echo base_url()?>assets/images/project-1.jpg" alt="">
							</figure>
						</div>

						<div class="project-item-body">
							<div class="project-item-tag">
								<ul>
									<li>Tracking</li>
								</ul>
							</div>

							<div class="project-item-content">
								<h3>GPS Fleet Tracking</h3>
								<p>Real-time shipment tracking and complete visibility throughout transportation.</p>
							</div>
						</div>
					</div>
				</div>

			</div>

			<div class="row">
				<div class="col-lg-12">

					<div class="section-footer-text text-center wow fadeInUp">

						<p>
							Delivering reliable logistics solutions with safety, speed and efficiency.
							<a href="<?php echo base_url('contact');?>">Get a Free Quote</a>
						</p>

					</div>

				</div>
			</div>

		</div>
	</div>
	<!-- Integrated Services Section End -->

	<!-- Interactive Process Layout Start -->
	<div class="interactive interactive-process-layout bg-section">

		<div class="interactive-interactive-process-wrapper interactive-wrapper">
			<div class="interactive-con">

				<div class="interactive-con-inner interactive-grid">

					<!-- Item 1 -->
					<div class="interactive-process-item">
						<div class="interactive-inner-process activate" data-index="0">
							<div class="process-content-wap">
								<div class="interactive-process-item-wap">

									<div class="icon-box">
										<img src="<?php echo base_url()?>assets/images/icon-interactive-process-item-1.svg"
											alt="">
									</div>

									<div class="interactive-process-item-content-wap">
										<h3><a href="#">Experienced Logistics Team</a></h3>
										<p>Our skilled professionals ensure smooth planning, execution and reliable
											transportation for every shipment.</p>
									</div>

								</div>
							</div>
						</div>
					</div>

					<!-- Item 2 -->
					<div class="interactive-process-item">
						<div class="interactive-inner-process" data-index="1">
							<div class="process-content-wap">
								<div class="interactive-process-item-wap">

									<div class="icon-box">
										<img src="<?php echo base_url()?>assets/images/icon-interactive-process-item-2.svg"
											alt="">
									</div>

									<div class="interactive-process-item-content-wap">
										<h3><a href="#">Modern GPS Enabled Fleet</a></h3>
										<p>Track every shipment with advanced GPS technology for complete visibility and
											peace of mind.</p>
									</div>

								</div>
							</div>
						</div>
					</div>

					<!-- Item 3 -->
					<div class="interactive-process-item">
						<div class="interactive-inner-process" data-index="2">
							<div class="process-content-wap">
								<div class="interactive-process-item-wap">

									<div class="icon-box">
										<img src="<?php echo base_url()?>assets/images/icon-interactive-process-item-3.svg"
											alt="">
									</div>

									<div class="interactive-process-item-content-wap">
										<h3><a href="#">Safe & Timely Deliveries</a></h3>
										<p>Every consignment is handled with care and delivered on schedule without
											compromising safety.</p>
									</div>

								</div>
							</div>
						</div>
					</div>

					<!-- Item 4 -->
					<div class="interactive-process-item">
						<div class="interactive-inner-process" data-index="3">
							<div class="process-content-wap">
								<div class="interactive-process-item-wap">

									<div class="icon-box">
										<img src="<?php echo base_url()?>assets/images/icon-interactive-process-item-4.svg"
											alt="">
									</div>

									<div class="interactive-process-item-content-wap">
										<h3><a href="#">24×7 Customer Support</a></h3>
										<p>Our dedicated support team is always available to assist you and provide
											shipment updates whenever required.</p>
									</div>

								</div>
							</div>
						</div>
					</div>

				</div>

				<!-- Images (Keep Same Images) -->
				<div class="interactive-process-list-image">

					<div class="interactive-process-image img-0 show"
						data-bg="<?php echo base_url()?>assets/images/interactive-process-image-1.jpg"
						style="background-image:url('<?php echo base_url()?>assets/images/interactive-process-image-1.jpg');">
					</div>

					<div class="interactive-process-image img-1"
						data-bg="<?php echo base_url()?>assets/images/interactive-process-image-2.jpg"
						style="background-image:url('<?php echo base_url()?>assets/images/interactive-process-image-2.jpg');">
					</div>

					<div class="interactive-process-image img-2"
						data-bg="<?php echo base_url()?>assets/images/interactive-process-image-3.jpg"
						style="background-image:url('<?php echo base_url()?>assets/images/interactive-process-image-3.jpg');">
					</div>

					<div class="interactive-process-image img-3"
						data-bg="<?php echo base_url()?>assets/images/interactive-process-image-4.jpg"
						style="background-image:url('<?php echo base_url()?>assets/images/interactive-process-image-4.jpg');">
					</div>

				</div>

			</div>
		</div>

	</div>
	<!-- Interactive Process Layout End -->

	<!-- Our Testimonials Section Start -->
	<div class="our-testimonials bg-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-5">
					<!-- Testimonial Image Box Start -->
					<div class="testimonial-image-box wow fadeInUp" data-wow-delay="0.2s">
						<!-- Testimonial Image Start -->
						<div class="testimonial-image">
							<figure class="image-anime">
								<img src="<?php echo base_url()?>assets/images/testimonial-image.jpg" alt="">
							</figure>
						</div>
						<!-- Testimonial Image End -->

						<!-- Happy Customer Box Start -->
						<div class="happy-customer-box">
							<!-- Satisfy Client Images Start -->
							<div class="satisfy-client-images">
								<div class="satisfy-client-image">
									<figure class="image-anime">
										<img src="<?php echo base_url()?>assets/images/author-1.jpg" alt="">
									</figure>
								</div>
								<div class="satisfy-client-image">
									<figure class="image-anime">
										<img src="<?php echo base_url()?>assets/images/author-2.jpg" alt="">
									</figure>
								</div>
								<div class="satisfy-client-image">
									<figure class="image-anime">
										<img src="<?php echo base_url()?>assets/images/author-3.jpg" alt="">
									</figure>
								</div>
								<div class="satisfy-client-image add-more">
									<h3><span class="counter">10</span>k</h3>
								</div>
							</div>
							<!-- Satisfy Client Images End -->

							<!-- Review Content Start -->
							<div class="happy-customer-content">
								<p>Trusted by World Customer</p>
							</div>
							<!-- Review Content End -->
						</div>
						<!-- Happy Customer Box End -->
					</div>
					<!-- Testimonial Image Box End -->
				</div>

				<div class="col-xl-7">
					<!-- Testimonial Content Box Start -->
					<div class="testimonial-content-box">
						<!-- Section Title Start -->
						<div class="section-title">
							<h3 class="wow fadeInUp">Our Testimonials</h3>
							<h2 class="text-anime-style-3" data-cursor="-opaque">Hear from business we proudly serve
								worldwide</h2>
						</div>
						<!-- Section Title End -->

						<!-- Testimonial Slider Start -->
						<div class="testimonial-slider">
							<div class="swiper">
								<div class="swiper-wrapper" data-cursor-text="Drag">
									<!-- Testimonial Slide Start -->
									<div class="swiper-slide">
										<div class="testimonial-item">
											<div class="testimonial-company-logo">
												<img src="<?php echo base_url()?>assets/images/company-logo-1.svg"
													alt="">
											</div>
											<div class="testimonial-content">
												<p>"Their logistics solutions transformed our supply chain. On-time
													delivery and real-time tracking have made our operations seamless
													reliable, efficient, and professional service every time."</p>
											</div>
											<div class="testimonial-author">
												<div class="author-content">
													<h3>Darlene Robertson</h3>
													<p>Global Trade Inc.</p>
												</div>
											</div>
										</div>
									</div>
									<!-- Testimonial Slide End -->

									<!-- Testimonial Slide Start -->
									<div class="swiper-slide">
										<div class="testimonial-item">
											<div class="testimonial-company-logo">
												<img src="<?php echo base_url()?>assets/images/company-logo-2.svg"
													alt="">
											</div>
											<div class="testimonial-content">
												<p>"Their logistics solutions transformed our supply chain. On-time
													delivery and real-time tracking have made our operations seamless
													reliable, efficient, and professional service every time."</p>
											</div>
											<div class="testimonial-author">
												<div class="author-content">
													<h3>Leslie Alexander</h3>
													<p>CEO, Tech Startup</p>
												</div>
											</div>
										</div>
									</div>
									<!-- Testimonial Slide End -->

									<!-- Testimonial Slide Start -->
									<div class="swiper-slide">
										<div class="testimonial-item">
											<div class="testimonial-company-logo">
												<img src="<?php echo base_url()?>assets/images/company-logo-3.svg"
													alt="">
											</div>
											<div class="testimonial-content">
												<p>"Their logistics solutions transformed our supply chain. On-time
													delivery and real-time tracking have made our operations seamless
													reliable, efficient, and professional service every time."</p>
											</div>
											<div class="testimonial-author">
												<div class="author-content">
													<h3>Courtney Henry</h3>
													<p>Fleet Supervisor</p>
												</div>
											</div>
										</div>
									</div>
									<!-- Testimonial Slide End -->
								</div>
								<div class="testimonial-pagination"></div>
							</div>
						</div>
						<!-- Testimonial Slider End -->
					</div>
					<!-- Testimonial Content Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Our Testimonials Section End -->

	<!-- Our Blog Section Start -->
	<div class="our-blog">
		<div class="container">
			<div class="row section-row">
				<div class="col-lg-12">
					<!-- Section Title Start -->
					<div class="section-title section-title-center">
						<h3 class="wow fadeInUp">Latest blog</h3>
						<h2 class="text-anime-style-3" data-cursor="-opaque">Explore our latest insights and industry
							updates</h2>
					</div>
					<!-- Section Title End -->
				</div>
			</div>

			<div class="row">
				<div class="col-xl-4 col-md-6">
					<!-- Post Item Start -->
					<div class="post-item wow fadeInUp">
						<!-- Post Featured Image Start-->
						<div class="post-featured-image">
							<a href="blog-single.html" data-cursor-text="View">
								<figure class="image-anime">
									<img src="<?php echo base_url()?>assets/images/post-1.jpg" alt="">
								</figure>
							</a>
							<div class="post-item-tags">
								<a href="blog-single.html">Shipping</a>
							</div>
						</div>
						<!-- Post Featured Image End -->

						<!-- Post Item Body Start -->
						<div class="post-item-body">
							<!-- Post Item Content Start -->
							<div class="post-item-content">
								<h2><a href="blog-single.html">The Future of Global Logistics: Trends Shaping 2025</a>
								</h2>
							</div>
							<!-- Post Item Content End -->

							<!-- Post Item Readmore Button Start-->
							<div class="post-item-btn">
								<a href="blog-single.html" class="readmore-btn">view details</a>
							</div>
							<!-- Post Item Readmore Button End-->
						</div>
						<!-- Post Item Body End -->
					</div>
					<!-- Post Item End -->
				</div>

				<div class="col-xl-4 col-md-6">
					<!-- Post Item Start -->
					<div class="post-item wow fadeInUp" data-wow-delay="0.2s">
						<!-- Post Featured Image Start-->
						<div class="post-featured-image">
							<a href="blog-single.html" data-cursor-text="View">
								<figure class="image-anime">
									<img src="<?php echo base_url()?>assets/images/post-2.jpg" alt="">
								</figure>
							</a>
							<div class="post-item-tags">
								<a href="blog-single.html">Delivery</a>
							</div>
						</div>
						<!-- Post Featured Image End -->

						<!-- Post Item Body Start -->
						<div class="post-item-body">
							<!-- Post Item Content Start -->
							<div class="post-item-content">
								<h2><a href="blog-single.html">Building a World International Shipping Operation</a>
								</h2>
							</div>
							<!-- Post Item Content End -->

							<!-- Post Item Readmore Button Start-->
							<div class="post-item-btn">
								<a href="blog-single.html" class="readmore-btn">view details</a>
							</div>
							<!-- Post Item Readmore Button End-->
						</div>
						<!-- Post Item Body End -->
					</div>
					<!-- Post Item End -->
				</div>

				<div class="col-xl-4 col-md-6">
					<!-- Post Item Start -->
					<div class="post-item wow fadeInUp" data-wow-delay="0.4s">
						<!-- Post Featured Image Start-->
						<div class="post-featured-image">
							<a href="blog-single.html" data-cursor-text="View">
								<figure class="image-anime">
									<img src="<?php echo base_url()?>assets/images/post-3.jpg" alt="">
								</figure>
							</a>
							<div class="post-item-tags">
								<a href="blog-single.html">Solutions</a>
							</div>
						</div>
						<!-- Post Featured Image End -->

						<!-- Post Item Body Start -->
						<div class="post-item-body">
							<!-- Post Item Content Start -->
							<div class="post-item-content">
								<h2><a href="blog-single.html">Innovations Driving Faster, Safer, And Smarter
										Deliveries</a></h2>
							</div>
							<!-- Post Item Content End -->

							<!-- Post Item Readmore Button Start-->
							<div class="post-item-btn">
								<a href="blog-single.html" class="readmore-btn">view details</a>
							</div>
							<!-- Post Item Readmore Button End-->
						</div>
						<!-- Post Item Body End -->
					</div>
					<!-- Post Item End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Our Blog Section End -->
     <!-- CtA Section started -->
      <!-- CTA Section Start -->
<div class="cta-section bg-section">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-8">
                <div class="cta-content">
                    <h3 class="wow fadeInUp">Need Reliable Logistics Solutions?</h3>

                    <h2 class="text-anime-style-3" data-cursor="-opaque">
                        Let's Move Your Business Forward with Safe, Fast & Reliable Transportation
                    </h2>

                    <p class="wow fadeInUp" data-wow-delay="0.2s">
                        Whether you require full truckload transportation, part load services,
                        warehousing, or end-to-end logistics support, Jairam Logistics is ready
                        to deliver customized solutions that meet your business needs.
                    </p>

                    <div class="cta-info wow fadeInUp" data-wow-delay="0.4s">
                        <ul>
                            <li><i class="fa-solid fa-circle-check"></i> PAN India Transportation</li>
                            <li><i class="fa-solid fa-circle-check"></i> GPS Enabled Fleet</li>
                            <li><i class="fa-solid fa-circle-check"></i> On-Time Delivery</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">

                <div class="cta-box wow fadeInRight">

                    <h3>Get a Free Quote</h3>

                    <p>
                        Speak with our logistics experts and receive a customized transportation solution.
                    </p>

                    <a href="<?php echo base_url('contact'); ?>" class="btn-default btn-highlighted">
                        Request Quote
                    </a>

                    <a href="tel:+919876543210" class="btn-default mt-3">
                        <i class="fa-solid fa-phone"></i> Call Now
                    </a>

                </div>

            </div>

        </div>
    </div>
</div>
<!-- CTA Section End -->
	<?php $this->load->view('components/footer'); ?>
	<?php $this->load->view('components/script'); ?>

</body>

</html>
