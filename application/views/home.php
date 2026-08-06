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
				<source src="<?php echo base_url()?>assets/video/carvox-video.mp4" type="video/mp4">
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

								<a href="<?php echo base_url('contact'); ?>" class="btn-white-blue">
									Get a Quote
								</a>

								<a href="<?php echo base_url('about'); ?>" class="btn-white-blue">
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
	<div class="why-choose-us-prime">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <!-- Why Choose Image Box Start -->
                    <div class="why-choose-image-box-prime wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Why Choose Image Start -->
                        <div class="why-choose-image-prime">
                            <figure class="image-anime">
                                <img src="<?php echo base_url()?>assets/images/about.jpg" alt="">
                            </figure>
                        </div>
                        <!-- Why Choose Image End -->

                        <!-- Experience Year Box Start -->
                        <div class="experience-year-box-prime">
                            <!-- Satisfy Client Images End -->

                            <!-- Experience Year Content Start -->
                            <div class="experience-year-content-prime">
                                <p>Years Experience</p>
                                <h2><span class="counter">25</span>k+</h2>
                            </div>
                            <!-- Experience Year Content End -->
                        </div>
                        <!-- Experience Year Box End -->
                    </div>
                    <!-- Why Choose Image Box End -->
                </div>

                <div class="col-xl-6">
                    <!-- Why Choose Content Start -->
                    <div class="why-choose-content-prime">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">About Us</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Your trusted partner for global logistics excellence</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">We specialize in delivering comprehensive transportation and logistics solutions businesses can rely on. With a global network, advanced tracking systems.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Why Choose List Start -->
                        <div class="why-choose-list-prime wow fadeInUp" data-wow-delay="0.4s">
                            <ul>
                                <li>Reliable Logistics You Can Trust Always</li>
                                <li>Delivering Excellence Across Every Route</li>
                                <li>Smart Technology for Smarter Deliveries</li>
                                <li>Experienced Logistics Management Team</li>
                                <li>Customized Plans Tailored to Your Needs</li>
                                <li>Affordable, Efficient Logistics Solutions</li>
                            </ul>
                        </div>
                        <!-- Why Choose List End -->

                        <!-- Why Choose Counter List Start -->
                        <div class="why-choose-counter-list-prime wow fadeInUp">
                            <!-- Why Choose Counter Item Start -->
                            <div class="why-choose-counter-item-prime">
                                <div class="icon-box">
                                    <img src="<?php echo base_url()?>assets/images/icon-why-choose-counter-1-prime.svg" alt="">
                                </div>
                                <div class="why-choose-counter-content-prime">
                                    <h2><span class="counter">25</span>k+</h2>
                                    <p>Successful delivery</p>
                                </div>
                            </div>
                            <!-- Why Choose Counter Item End -->

                            <!-- Why Choose Counter Item Start -->
                            <div class="why-choose-counter-item-prime">
                                <div class="icon-box">
                                    <img src="<?php echo base_url()?>assets/images/icon-why-choose-counter-2-prime.svg" alt="">
                                </div>
                                <div class="why-choose-counter-content-prime">
                                    <h2><span class="counter">85</span>+</h2>
                                    <p>Countries Reached</p>
                                </div>
                            </div>
                            <!-- Why Choose Counter Item End -->

                            <!-- Why Choose Counter Item Start -->
                            <div class="why-choose-counter-item-prime">
                                <div class="icon-box">
                                    <img src="<?php echo base_url()?>assets/images/icon-why-choose-counter-3-prime.svg" alt="">
                                </div>
                                <div class="why-choose-counter-content-prime">
                                    <h2><span class="counter">500</span>+</h2>
                                    <p>Dedicated Logistics</p>
                                </div>
                            </div>
                            <!-- Why Choose Counter Item End -->
                        </div>
                        <!-- Why Choose Counter List End -->

                        <!-- Why Choose Button Start -->
                        <div class="why-choose-btn-prime wow fadeInUp" data-wow-delay="0.2s">
                            <a href="#" class="btn-default">Read More</a>
                        </div>
                        <!-- Why Choose Button End -->
                    </div>
                    <!-- Why Choose Content End -->
                </div>
            </div>
        </div>
    </div>
	<!-- About Us Section End -->

	<!-- Our categories Section Start -->
	<div class="our-services-prime bg-section">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">Sourcing Catalog</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Premium Import & Export Categories</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item-prime wow fadeInUp">
                        <!-- Service Image Start -->
                        <div class="service-item-image-prime">
                            <a href="#" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="<?php echo base_url()?>assets/images/feature1.jpg" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Service Image End -->

                        <!-- Service Body Start -->
                        <div class="service-item-body-prime">
                            <div class="icon-box">
                                <img src="<?php echo base_url()?>assets/images/icon-service-1-prime.svg" alt="">
                            </div>
                            <div class="service-item-content-prime">
                                <h3><a href="#">Premium Agriculture </a></h3>
                                <p>Apples, Citrus, Grapes, and Tropical Fruits sourced directly from certified orchards with full cold-chain custody..</p>
                            </div>
                            <div class="service-item-btn-prime">
                                <a href="#" class="readmore-btn">View Details</a>
                            </div>
                        </div>
                        <!-- Service Body End -->
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-xl-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item-prime wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Service Image Start -->
                        <div class="service-item-image-prime">
                            <a href="#" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="<?php echo base_url()?>assets/images/feature2.jpg" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Service Image End -->

                        <!-- Service Body Start -->
                        <div class="service-item-body-prime">
                            <div class="icon-box">
                                <img src="<?php echo base_url()?>assets/images/icon-service-2-prime.svg" alt="">
                            </div>
                            <div class="service-item-content-prime">
                                <h3><a href="#">Farm Sourced</a></h3>
                                <p>Root vegetables, leafy greens, and exotic varieties processed in certified grading facilities under strict hygienic control.</p>
                            </div>
                            <div class="service-item-btn-prime">
                                <a href="#" class="readmore-btn">View Details</a>
                            </div>
                        </div>
                        <!-- Service Body End -->
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-xl-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item-prime wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Service Image Start -->
                        <div class="service-item-image-prime">
                            <a href="#" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="<?php echo base_url()?>assets/images/feature3.jpg" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Service Image End -->

                        <!-- Service Body Start -->
                        <div class="service-item-body-prime">
                            <div class="icon-box">
                                <img src="<?php echo base_url()?>assets/images/icon-service-3-prime.svg" alt="">
                            </div>
                            <div class="service-item-content-prime">
                                <h3><a href="#">Global Origins</a></h3>
                                <p>Whole and ground spices including cardamom, black pepper, turmeric, and cumin with certified ASTA cleanliness standards.</p>
                            </div>
                            <div class="service-item-btn-prime">
                                <a href="#" class="readmore-btn">View Details</a>
                            </div>
                        </div>
                        <!-- Service Body End -->
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-xl-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item-prime wow fadeInUp" data-wow-delay="0.6s">
                        <!-- Service Image Start -->
                        <div class="service-item-image-prime">
                            <a href="#" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="<?php echo base_url()?>assets/images/feature4.jpg" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Service Image End -->

                        <!-- Service Body Start -->
                        <div class="service-item-body-prime">
                            <div class="icon-box">
                                <img src="<?php echo base_url()?>assets/images/icon-service-4-prime.svg" alt="">
                            </div>
                            <div class="service-item-content-prime">
                                <h3><a href="#">Nutritional Grade</a></h3>
                                <p>Premium walnuts, almonds, cashews, raisins, and dates sourced from select global cultivators, fully tested for aflatoxins.</p>
                            </div>
                            <div class="service-item-btn-prime">
                                <a href="#" class="readmore-btn">View Details</a>
                            </div>
                        </div>
                        <!-- Service Body End -->
                    </div>
                    <!-- Service Item End -->
                </div>
            </div>
        </div>
    </div>
	<!-- Our categories Section End -->

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
				<div class="col-lg-12">

					<!-- Project Slider Start -->
					<div class="project-slider">
						<div class="swiper">
							<div class="swiper-wrapper">

								<!-- Card 1 -->
								<div class="swiper-slide">
									<div class="project-item">
										<div class="project-item-image">
											<figure>
												<img src="<?php echo base_url()?>assets/images/project1.jpg" alt="">
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
												<p style="color:white">Safe and reliable transportation services across India with timely
													deliveries.</p>
											</div>
										</div>
									</div>
								</div>

								<!-- Card 2 -->
								<div class="swiper-slide">
									<div class="project-item">
										<div class="project-item-image">
											<figure>
												<img src="<?php echo base_url()?>assets/images/project2.jpg" alt="">
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
												<p style="color:white">Dedicated transportation solutions for bulk shipments with complete
													safety.</p>
											</div>
										</div>
									</div>
								</div>

								<!-- Card 3 -->
								<div class="swiper-slide">
									<div class="project-item">
										<div class="project-item-image">
											<figure>
												<img src="<?php echo base_url()?>assets/images/project3.jpg" alt="">
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
												<p style="color:white">Affordable transportation for smaller consignments with optimized
													delivery.</p>
											</div>
										</div>
									</div>
								</div>

								<!-- Card 4 -->
								<div class="swiper-slide">
									<div class="project-item">
										<div class="project-item-image">
											<figure>
												<img src="<?php echo base_url()?>assets/images/project4.jpg" alt="">
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
												<p style="color:white">Secure warehousing with inventory management and efficient
													distribution services.</p>
											</div>
										</div>
									</div>
								</div>

								<!-- Card 5 -->
								<div class="swiper-slide">
									<div class="project-item">
										<div class="project-item-image">
											<figure>
												<img src="<?php echo base_url()?>assets/images/project5.jpg" alt="">
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
												<p style="color:white">End-to-end logistics planning and supply chain management for
													businesses.</p>
											</div>
										</div>
									</div>
								</div>

								<!-- Card 6 -->
								<div class="swiper-slide">
									<div class="project-item">
										<div class="project-item-image">
											<figure>
												<img src="<?php echo base_url()?>assets/images/project6.jpg" alt="">
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
												<p style="color:white">Real-time shipment tracking and complete visibility throughout
													transportation.</p>
											</div>
										</div>
									</div>
								</div>

							</div>

							<!-- Pagination -->
							<div class="project-pagination"></div>

						</div>
					</div>
					<!-- Project Slider End -->

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

	<!-- feaature Layout Start -->
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
										<h3>Guaranteed Cold Chain</h3>
										<p>Continuous temperature logging and controlled atmosphere containers protect agricultural integrity.</p>
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
										<h3>Direct Farm Sourcing</h3>
										<p>By eliminating speculative intermediaries, we lock in superior pricing and verified crop origins.</p>
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
										<h3>Risk Mitigation</h3>
										<p>Comprehensive marine cargo insurance and robust commercial contract structures secure your capital.</p>
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
										<h3>Real-Time Tracking</h3>
										<p>Full milestone telemetry from shipping line dispatch through to port customs clearance and final delivery</p>
									</div>

								</div>
							</div>
						</div>
					</div>

				</div>

				<!-- Images (Keep Same Images) -->
				<div class="interactive-process-list-image">

					<div class="interactive-process-image img-0 show"
						data-bg="<?php echo base_url()?>assets/images/feature1.jpg"
						style="background-image:url('<?php echo base_url()?>assets/images/feature1.jpg');">
					</div>

					<div class="interactive-process-image img-1"
						data-bg="<?php echo base_url()?>assets/images/feature2.jpg"
						style="background-image:url('<?php echo base_url()?>assets/images/feature2.jpg');">
					</div>

					<div class="interactive-process-image img-2"
						data-bg="<?php echo base_url()?>assets/images/feature3.jpg"
						style="background-image:url('<?php echo base_url()?>assets/images/feature3.jpg');">
					</div>

					<div class="interactive-process-image img-3"
						data-bg="<?php echo base_url()?>assets/images/feature4.jpg"
						style="background-image:url('<?php echo base_url()?>assets/images/feature4.jpg');">
					</div>

				</div>

			</div>
		</div>

	</div>
	<!-- FeaturesLayout End -->

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
								<img src="<?php echo base_url()?>assets/images/testimonial.jpg" alt="">
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
							<a href="#" data-cursor-text="View">
								<figure class="image-anime">
									<img src="<?php echo base_url()?>assets/images/blog1.jpg" alt="">
								</figure>
							</a>
							<div class="post-item-tags">
								<a href="#">Shipping</a>
							</div>
						</div>
						<!-- Post Featured Image End -->

						<!-- Post Item Body Start -->
						<div class="post-item-body">
							<!-- Post Item Content Start -->
							<div class="post-item-content">
								<h2><a href="#">The Future of Global Logistics: Trends Shaping 2025</a>
								</h2>
							</div>
							<!-- Post Item Content End -->

							<!-- Post Item Readmore Button Start-->
							<div class="post-item-btn">
								<a href="#" class="readmore-btn">view details</a>
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
							<a href="#" data-cursor-text="View">
								<figure class="image-anime">
									<img src="<?php echo base_url()?>assets/images/blog2.jpg" alt="">
								</figure>
							</a>
							<div class="post-item-tags">
								<a href="#">Delivery</a>
							</div>
						</div>
						<!-- Post Featured Image End -->

						<!-- Post Item Body Start -->
						<div class="post-item-body">
							<!-- Post Item Content Start -->
							<div class="post-item-content">
								<h2><a href="#">Building a World International Shipping Operation</a>
								</h2>
							</div>
							<!-- Post Item Content End -->

							<!-- Post Item Readmore Button Start-->
							<div class="post-item-btn">
								<a href="#" class="readmore-btn">view details</a>
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
							<a href="#" data-cursor-text="View">
								<figure class="image-anime">
									<img src="<?php echo base_url()?>assets/images/blog3.jpg" alt="">
								</figure>
							</a>
							<div class="post-item-tags">
								<a href="#">Solutions</a>
							</div>
						</div>
						<!-- Post Featured Image End -->

						<!-- Post Item Body Start -->
						<div class="post-item-body">
							<!-- Post Item Content Start -->
							<div class="post-item-content">
								<h2><a href="#">Innovations Driving Faster, Safer, And Smarter
										Deliveries</a></h2>
							</div>
							<!-- Post Item Content End -->

							<!-- Post Item Readmore Button Start-->
							<div class="post-item-btn">
								<a href="#" class="readmore-btn">view details</a>
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
