@extends("front.layouts.master")

@Section("title","Contact_Page")

@Section("content")
	<!-- Page Header -->
@include("front.layouts.static_slide");
	<!-- /Page Header -->

	<!-- CAUSESS -->
	<div id="causes" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<!-- <div class="col-md-8 col-md-offset-2"> -->
					<div class="section-title text-center">
						<h2 class="title question">Contact Info</h2>
						<p class="sub-title">Thank you for contacting Smile Charity. We love hearing from you and will be happy to assist with any inquiries you may have.To save your time, please visit our <a href="faqs"><b>FAQs</b></a> page to see if your question has already been answered.</p>
					</div>
				<!-- </div> -->
				<!-- section title -->

				<!-- /causes -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /CAUSESS -->

	<!-- TESTIMONIAL -->
	<div id="testimonial" class="section" style="margin-top: -50px;">
		<!-- background section -->
		<div class="section-bg" style="background-image: url(./img/background-2.jpg);" data-stellar-background-ratio="0.5"></div>
		<!-- /background section -->

		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- Testimonial owl -->
				<div class="col-md-12">
					<div id="testimonial-owl" class="owl-carousel owl-theme">
						<!-- testimonial -->
						<div class="testimonial">
							<div class="testimonial-meta">
								<div class="testimonial-img">
									<img src="./img/a3.jpeg" alt="">
								</div>
								<h3>Rizwan Khan</h3>
								<span>Developer</span>
							</div>
							<div class="testimonial-quote">
								<blockquote>
									<h4>Give Us Call</h4>
									<p>+92 343 5391592 </p>
									<h4>Email Us</h4>
									<p>rizwanyousaf.rio@17@gmail.com</p>
								</blockquote>
							</div>
						</div>
						<!-- /testimonial -->

						<!-- testimonial -->
						<div class="testimonial">
							<div class="testimonial-meta">
								<div class="testimonial-img">
									<img src="./img/a2.jpeg" alt="">
								</div>
								<h3>Sami khan</h3>
								<span>Developer</span>
							</div>
							<div class="testimonial-quote">
								<blockquote>
									<h4>Give Us Call</h4>
									<p>+92 333 9740572</p>
									<h4>Email Us</h4>
									<p>isameelala@gmail.com</p>
								</blockquote>
							</div>
						</div>
						<!-- /testimonial -->

						<!-- testimonial -->
						<div class="testimonial">
							<div class="testimonial-meta">
								<div class="testimonial-img">
									<img src="./img/a3.jpeg" alt="">
								</div>
								<h3>Rizwan Khan</h3>
								<span>Developer</span>
							</div>
							<div class="testimonial-quote">
								<blockquote>
									<h4>Give Us Call</h4>
									<p>+92 343 5391592 </p>
									<h4>Email Us</h4>
									<p>rizwanyousaf.rio@17@gmail.com</p>
								</blockquote>
							</div>
						</div>
						<!-- /testimonial -->

						<!-- testimonial -->
						<div class="testimonial">
							<div class="testimonial-meta">
								<div class="testimonial-img">
									<img src="./img/a2.jpeg" alt="">
								</div>
								<h3>Sami khan</h3>
								<span>Developer</span>
							</div>
							<div class="testimonial-quote">
								<blockquote>
									<h4>Give Us Call</h4>
									<p>+92 333 9740572</p>
									<h4>Email Us</h4>
									<p>isameelala@gmail.com</p>
								</blockquote>
							</div>
						</div>
						<!-- /testimonial -->
					</div>
				</div>
				<!-- /Testimonial owl -->
			</div>
			<!-- /Row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /TESTIMONIAL -->

	<!-- ABOUT -->
	<div id="about" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- about content -->
				<div class="col-md-5">
					<div class="section-title" style="margin-top: -20px;">
						<h2 class="title">Leave a Reply</h2>
						<p class="sub-title">Do you have any questions?</p>
					</div>
					<div class="about-content">
						<form class="footer-newsletter">
							<div class="form-group">
								<input class="input" placeholder=" Your Name" type="text">
							</div>

							<div class="form-group">
								<input class="input" placeholder="Your Email" type="text">
							</div>

							<div class="form-group">
								<input class="input" placeholder="Phone Number" type="text">
							</div>

							<div class="form-group">
								<input class="input" placeholder="Subject" type="text">
							</div>

							<div class="form-group">
								<textarea class="input" placeholder="Message"></textarea>
							</div>

							<button class="primary-button">Send Message</button>
						</form>
					</div>
				</div>
				<!-- /about content -->

				<!-- about Map -->
				<div class="col-md-offset-1 col-md-6">
					<section>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3317.595146700863!2d72.78427794965044!3d33.74528358059578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfa6be9d0c8f47%3A0x5b644c8f62d5c43e!2sComsats%20Wah%2C%20Old%20Cafeteria!5e0!3m2!1sen!2s!4v1583471150183!5m2!1sen!2s" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					</section>
				</div>
				<!-- /about map -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /ABOUT -->
@endSection
