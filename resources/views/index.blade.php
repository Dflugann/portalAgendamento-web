@extends('layout.system')

@section('titulo', 'home')

@section('corpo')

	<!-- Landing section -->
	<section id="landing">
		<div class="container">
			<!-- Main Content Inner -->
			<div class="row margin-lg no-margin-bottom">
				<div class="col-lg-4 col-md-4 col-sm-6 visible-lg visible-md visible-sm">
					<!--Device Container-->
					<img src="img/landing/landing-app-top.png" class="img-responsive" alt="">
					<!--/Device Container-->
				</div>
				<!--Main landing content-->
				<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
					<div class="landing-heading padding-sm">
						<span class="txt-xlg">Welcome to </span><span class="txt-xlg txt-strong">INFINITY</span>
					</div>
					<div class="landing-text">
						<span class="txt-md">Infinity is a responsive bootstrap template built to take your mobile and showcase it with lots of features. The theme is intended for three major OS platforms, IOS, Android and Windows Phone, featuring various mobile devices and tablets with each respective device having different colour choices.</span>
					</div>
					<div class="app-availability no-padding">
						<ul class="landing-available-on list-unstyled block">
							<li>
								<span class="landing-availability">Available for</span>
							</li>
							<li>
								<i class="fa fa-tablet"></i>
							</li>
							<li>
								<i class="fa fa-mobile-phone"></i>
							</li>
						</ul>
						<a href="#" class="btn btn-store store-btn-repsonsive"><div class="apple-btn"></div></a>
						<a href="#" class="btn btn-store store-btn-repsonsive"><div class="google-btn"></div></a>
						<a href="#" class="btn btn-store store-btn-repsonsive"><div class="windows-btn"></div></a>

					</div>
				</div>
				<!--/Main landing content-->
			</div>
			<!-- /Main Content Inner -->
		</div>
    <div class="push-menu-container">
      <div class="navbar navbar-default navbar-fixed-top push-wrapper">
        <div class="push-menu-button" data-toggle="offcanvas" data-target="#infinityNav" data-canvas="body">
          <button type="button" class="navbar-toggle">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <span class="menu-text">Menu</span>
        </div>
      </div>
    </div>
	</section>
	<!-- /Landing section -->
	<!-- Features section -->
	<section id="features">
		<div class="container">
			<!-- Features Content Inner -->
			<div class="row margin-lg text-center">
				<div class="col-lg-12 text-center margin-lg no-margin-top">
					<span class="section-light section-title">features</span>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<div class="app-feature-box">
						<div class="icon-box">
							<i class="fa fa-tablet"></i>
						</div>
						<h3>Responsive Design</h3>
						<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque volutpat quam finibus ipsum placerat, in commodo nunc tristique.</span>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<div class="app-feature-box">
						<div class="icon-box">
							<i class="fa fa-eye"></i>
						</div>
						<h3>Crystal Clear</h3>
						<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque volutpat quam finibus ipsum placerat, in commodo nunc tristique.</span>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<div class="app-feature-box">
						<div class="icon-box">
							<i class="fa fa-download"></i>
						</div>
						<h3>Multiple Choice</h3>
						<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque volutpat quam finibus ipsum placerat, in commodo nunc tristique.</span>
					</div>
				</div>
			</div>
			<div class="row margin-lg text-center">
				<div class="col-lg-12 text-center sub-title-margin">
					<span class="sub-title-top">Interactive Hot spots</span>
					<span class="sub-title-bottom">Hover over the area of interest</span>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 margin-lg">
					<div class="app-overview-box aob-left">
						<div class="overview-icon-box text-center">
							<i class="fa fa-star"></i>
						</div>
						<h3>Easy Customisation</h3>
						<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque volutpat quam finibus ipsum placerat, in commodo nunc tristique.</span>
					</div>
					<div class="app-overview-box aob-left">
						<div class="overview-icon-box text-center">
							<i class="fa fa-code"></i>
						</div>
						<h3>Clean Code</h3>
						<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque volutpat quam finibus ipsum placerat, in commodo nunc tristique.</span>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 visible-lg visible-md visible-sm">
					<div class="overview-device-wrapper">
						<img src="img/landing/landing-app-overview.png" class="img-responsive" alt="">
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 margin-lg">
					<div class="app-overview-box aob-right">
						<div class="overview-icon-box text-center">
							<i class="fa fa-cog"></i>
						</div>
						<h3>Feature Packed</h3>
						<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque volutpat quam finibus ipsum placerat, in commodo nunc tristique.</span>
					</div>
					<div class="app-overview-box aob-right">
						<div class="overview-icon-box text-center">
							<i class="fa fa-heart"></i>
						</div>
						<h3>Share Moments</h3>
						<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque volutpat quam finibus ipsum placerat, in commodo nunc tristique.</span>
					</div>
				</div>
			</div>
			<!-- /Features Content Inner -->
		</div>
	</section>
	<!-- /Features section -->
	<!-- Features Extra 1 section -->
	<section id="whyus" class="grey">
		<div class="container">
			<!-- Features Extra 1 Content Inner -->
			<div class="row margin-lg text-center">
				<div class="col-lg-12 text-center sub-title-margin">
					<span class="sub-title-top">Why Our Application? (left)</span>
					<span class="sub-title-bottom">Feature your applications details</span>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 visible-lg visible-md visible-sm">
					<div class="overview-device-wrapper">
						<img src="img/landing/landing-app-left-overview.png" class="img-responsive" alt="">
					</div>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 margin-lg">
					<div class="feature-extra-box text-left">
						<h2 class="overview-title">All about your application</h2>
						<span class="overview-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mollis tellus sit amet arcu sodales elementum. Nullam sit amet massa quis arcu bibendum egestas. Curabitur rhoncus accumsan felis at faucibus. Duis imperdiet ultricies arcu, quis gravida dui ullamcorper auctor.<br/><br/> Cras dapibus nunc id porta efficitur. Etiam elit mi, vestibulum ac aliquam fermentum, imperdiet at magna. Aenean vel ex nisi.</span>
						<ul class="list-unstyled feature-extra-list">
							<li>
								<i class="fa fa-check"></i> Quick and easy to setup
							</li>
							<li>
								<i class="fa fa-check"></i> Simple design
							</li>
							<li>
								<i class="fa fa-check"></i> Intuitive controls
							</li>
							<li>
								<i class="fa fa-check"></i> User Friendly
							</li>
						</ul>
						<span class="overview-text block margin-sm">Etiam elit mi, vestibulum ac aliquam fermentum, imperdiet at magna. Aenean vel ex nisi.</span>
						<a href="#" class="btn btn-primary btn-i-sm uppercase txt-sm">Check Features <i class="fa fa-arrow-right"></i></a>

					</div>
				</div>
			</div>
			<!-- /Features Extra 1 Content Inner -->
		</div>
	</section>
	<!-- /Features Extra 1 section -->
	<!-- cta section -->
	<section id="cta" class="cta">
		<div class="container">
			<!-- cta Content Inner -->
			<div class="row margin-lg text-center">
				<div class="col-lg-12">
					<div class="feature-extra-box text-left">
						<h2 class="txt-lg uppercase">Say exactly what you need to</h2>
						<span class="txt-md block margin-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mollis tellus sit amet arcu sodales elementum. Nullam sit amet massa quis arcu bibendum egestas. Curabitur rhoncus accumsan felis at faucibus. Duis imperdiet ultricies arcu, quis gravida dui ullamcorper auctor.</span>
						<a href="#" class="btn btn-primary btn-i-md uppercase txt-md">Find Out More</a>
					</div>
				</div>
			</div>
			<!-- /cta Content Inner -->
		</div>
	</section>
	<!-- /cta section -->
	<!-- Features Extra 2 section -->
	<section id="information">
		<div class="container">
			<!-- Features Extra 2 Content Inner -->
			<div class="row margin-lg text-center">
				<div class="col-lg-12 text-center sub-title-margin">
					<span class="sub-title-top">Application Information (right)</span>
					<span class="sub-title-bottom">Feature your applications details</span>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 margin-lg">
					<div class="feature-extra-box text-left">
						<h2 class="overview-title">All about your application</h2>
						<span class="overview-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mollis tellus sit amet arcu sodales elementum. Nullam sit amet massa quis arcu bibendum egestas. Curabitur rhoncus accumsan felis at faucibus. Duis imperdiet ultricies arcu, quis gravida dui ullamcorper auctor.<br/><br/> Cras dapibus nunc id porta efficitur. Etiam elit mi, vestibulum ac aliquam fermentum, imperdiet at magna. Aenean vel ex nisi.</span>
						<ul class="list-unstyled feature-extra-list">
							<li>
								<i class="fa fa-cog"></i> Simple usablility
							</li>
							<li>
								<i class="fa fa-star"></i> Premium support
							</li>
							<li>
								<i class="fa fa-user"></i> User focused
							</li>
							<li>
								<i class="fa fa-heart"></i> Trust secured
							</li>
							<li>
								<i class="fa fa-check"></i> Lightweight
							</li>
							<li>
								<i class="fa fa-globe"></i> Multi-lingual
							</li>
							<li>
								<i class="fa fa-thumbs-up"></i> Infinity approved
							</li>
						</ul>
						<a href="#" class="btn btn-primary btn-i-sm uppercase txt-sm">Check Features <i class="fa fa-arrow-right"></i></a>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 visible-lg visible-md visible-sm">
					<div class="overview-device-wrapper">
						<img src="img/landing/landing-app-right-overview.png" class="img-responsive" alt="">
					</div>
				</div>
			</div>
			<!-- /Features Extra 2 Content Inner -->
		</div>
	</section>
	<!-- /Features Extra 2 section -->
	<!-- gallery section -->
	<section id="gallery" class="grey">
		<div class="container">
			<!-- gallery Content Inner -->
			<div class="row margin-lg text-center">
				<div class="col-lg-12 text-center margin-lg no-margin-top">
					<span class="section-light section-title">gallery</span>
				</div>
				<div class="col-lg-12">
					<div id="app-showcase-landing" class="owl-carousel owl-theme">
						<div class="item item-clickable"><div class="item-icon"><i class="fa fa-search"></i></div><a href="img/landing/gallery/app-1.png" data-lightbox="app-1"><img src="img/landing/gallery/app-1.png" class="img-responsive" alt="Iphone Application 1"></a></div>
						<div class="item item-clickable"><div class="item-icon"><i class="fa fa-search"></i></div><a href="img/landing/gallery/app-2.png" data-lightbox="app-2"><img src="img/landing/gallery/app-2.png" class="img-responsive" alt="Iphone Application 2"></a></div>
						<div class="item item-clickable"><div class="item-icon"><i class="fa fa-search"></i></div><a href="img/landing/gallery/app-3.png" data-lightbox="app-3"><img src="img/landing/gallery/app-3.png" class="img-responsive" alt="Iphone Application 3"></a></div>
						<div class="item item-clickable"><div class="item-icon"><i class="fa fa-search"></i></div><a href="img/landing/gallery/app-4.png" data-lightbox="app-4"><img src="img/landing/gallery/app-4.png" class="img-responsive" alt="Iphone Application 4"></a></div>
						<div class="item item-clickable"><div class="item-icon"><i class="fa fa-search"></i></div><a href="img/landing/gallery/app-5.png" data-lightbox="app-5"><img src="img/landing/gallery/app-5.png" class="img-responsive" alt="Iphone Application 5"></a></div>
						<div class="item item-clickable"><div class="item-icon"><i class="fa fa-search"></i></div><a href="img/landing/gallery/app-6.png" data-lightbox="app-6"><img src="img/landing/gallery/app-6.png" class="img-responsive" alt="Iphone Application 6"></a></div>
					</div>
				</div>
			</div>
			<!-- /gallery Content Inner -->
		</div>
	</section>
	<!-- /gallery section -->
	<!-- testimonials section -->
	<section id="testimonials">
		<div class="container">
			<!-- testimonials Content Inner -->
			<div class="row margin-lg text-center">
				<div class="col-lg-12 text-center margin-lg no-margin-top">
					<span class="section-dark section-title">testimonials</span>
				</div>
				<div class="col-lg-12">
					<div id="app-testimonials-landing" class="owl-carousel owl-theme">
					<!-- testimonials item -->
						<div class="item">
							<div class="testimonial-box text-center">
								<div class="testimonial-img">
									<img src="img/landing/testimonials/person.jpg" class="img-responsive" alt="person">
								</div>
								<div class="testimonial-text margin-md">
									<span class="txt-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mollis tellus sit amet arcu sodales elementum. Nullam sit amet massa quis arcu bibendum egestas. Curabitur rhoncus accumsan felis at faucibus. Duis imperdiet ultricies arcu, quis gravida dui ullamcorper auctor.</span>
								</div>
								<div class="testimonial-name">
									<span class="name uppercase txt-md">Jonathan Doe</span>
									<span class="company uppercase txt-sm block">JD, Founder</span>
								</div>
							</div>
						</div>
						<!-- /testimonials item -->
						<div class="item">
							<div class="testimonial-box text-center">
								<div class="testimonial-img">
									<img src="img/landing/testimonials/person.jpg" class="img-responsive" alt="person">
								</div>
								<div class="testimonial-text margin-md">
									<span class="txt-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mollis tellus sit amet arcu sodales elementum. Nullam sit amet massa quis arcu bibendum egestas. Curabitur rhoncus accumsan felis at faucibus. Duis imperdiet ultricies arcu, quis gravida dui ullamcorper auctor.</span>
								</div>
								<div class="testimonial-name">
									<span class="name uppercase txt-md">Jonathan Doe</span>
									<span class="company uppercase txt-sm block">JD, Founder</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /testimonials Content Inner -->
		</div>
	</section>
	<!-- /testimonials section -->
	<!-- subscribe section -->
	<section id="subscribe">
		<div class="container">
			<!-- subscribe Content Inner -->
			<div class="row margin-lg text-center">
				<div class="col-lg-12 text-center margin-lg no-margin-top">
					<span class="section-title">subscribe</span>
				</div>
				<div class="col-lg-12">
						<form id="subscribeForm" action="php/subscribe-form.php" method="POST">
						<div class="input-group">
							<div class="alert alert-success hidden" id="subscribeSuccess">
								<strong>Success!</strong> Your message has been sent to us.
							</div>

							<div class="alert alert-danger hidden" id="subscribeError">
								<strong>Error!</strong> There was an error sending your message.
							</div>
							<input type="email" value="" data-msg-required="Please enter your email address." placeholder="Your Email" data-msg-email="Please enter a valid email address." maxlength="100" class="form-control fc-contact" name="email" id="email" required>
							<div class="input-group-btn">
								<button type="submit" id="subscribe-submit" data-loading-text="..."><i class="fa fa-paper-plane"></i></button>
							</div>
						</div>
					</form>
					<span class="txt-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mollis tellus sit amet arcu sodales elementum. Nullam sit amet massa quis arcu bibendum egestas. Curabitur rhoncus accumsan felis at faucibus. Duis imperdiet ultricies arcu, quis gravida dui ullamcorper auctor.</span>
				</div>
			</div>
			<!-- /subscribe Content Inner -->
		</div>
	</section>
	<!-- /subscribe section -->
	<!-- video start -->
	<section id="video" class="grey">
		<div class="container">
			<!-- footer Content Inner -->
			<div class="row margin-lg text-center">
				<div class="col-lg-12 margin-lg no-margin-top">
					<span class="section-light section-title">video</span>
				</div>
				<div class="col-lg-12 text-center margin-lg no-margin-top">
					<div class="vid-responsive">
						<iframe src="https://player.vimeo.com/video/47911018" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>
				</div>
			</div>
			<!-- /footer Content Inner -->
		</div>
	</section>
	<!-- video end -->
	<!-- Footer start -->
	<section id="contact">
		<div class="container">
			<!-- footer Content Inner -->
			<div class="row margin-lg">
				<div class="col-lg-12 text-center margin-lg no-margin-top">
					<span class="section-dark section-title">contact</span>
				</div>
				<div class="col-lg-12 margin-lg no-margin-top">
					<form id="contactForm" action="php/contact-form.php" method="POST">
						<div class="contact-form-inner text-left">
							<div class="alert alert-success hidden" id="contactSuccess">
								<strong>Success!</strong> Your message has been sent to us.
							</div>
							<div class="alert alert-danger hidden" id="contactError">
								<strong>Error!</strong> There was an error sending your message.
							</div>
							<div class="row">
								<div class="form-group">
									<div class="col-md-6 col-sm-6 col-xs-12 form-group input-fields">
										<input type="text" value="" data-msg-required="Please enter your name." placeholder="Your Name" maxlength="100" class="form-control fc-contact" name="name" id="name" required>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 form-group input-fields">
										<input type="email" value="" data-msg-required="Please enter your email address." placeholder="Your Email" data-msg-email="Please enter a valid email address." maxlength="100" class="form-control fc-contact" name="email" id="email" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="form-group">
									<div class="col-md-12 col-sm-12 col-xs-12 form-group input-fields">
										<textarea maxlength="5000" data-msg-required="Please enter your message." placeholder="Your Message Here..." rows="10" class="form-control fc-contact" name="message" id="message" required></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12">
									<input type="submit" value="Send Message" class="btn btn-submit btn-block btn-i-sm uppercase txt-sm" data-loading-text="Loading...">
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!-- /footer Content Inner -->
		</div>
	</section>
	<!-- Footer end -->
	<!-- Footer start -->
	<footer id="footer">
		<div class="container">
			<!-- footer Content Inner -->
			<div class="row margin-sm">
				<div class="col-lg-12 text-center">
					<ul class="list-unstyled footer-items footer-social no-margin">
						<li class="footer-social-item">
							<a href="#" class="cbutton cbutton--effect-ivana">
								<i class="cbutton__icon fa fa-twitter"></i>
							</a>
						</li>
						<li class="footer-social-item">
							<a href="#" class="cbutton cbutton--effect-ivana">
								<i class="cbutton__icon fa fa-facebook"></i>
							</a>
						</li>
						<li class="footer-social-item">
							<a href="#" class="cbutton cbutton--effect-ivana">
								<i class="cbutton__icon fa fa-google-plus"></i>
							</a>
						</li>
						<li class="footer-social-item">
							<a href="#" class="cbutton cbutton--effect-ivana">
								<i class="cbutton__icon fa fa-linkedin"></i>
							</a>
						</li>
					</ul>
					<span>Copyright © 2015 <a href="http://themes.audaindesigns.com">Audain Designs</a></span>
				</div>
			</div>
			<!-- /footer Content Inner -->
		</div>
	</footer>
	<!-- Footer end -->
@endsection
