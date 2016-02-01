<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package total-wellness
 */

get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<!-- Start Carousel -->
		<section id="myCarousel" class="carousel slide">
		    <!-- Indicators -->
		    <ol class="carousel-indicators">
		        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		        <li data-target="#myCarousel" data-slide-to="1"></li>
		        <li data-target="#myCarousel" data-slide-to="2"></li>
		    </ol>

		    <!-- Wrapper for Slides -->
		    <div class="carousel-inner">
		        <div class="item active">
		            <div class="fill carousel-img-1"></div>
		        </div>
		        <div class="item">
		            <div class="fill carousel-img-2"></div>
		        </div>
		        <div class="item">
		            <div class="fill carousel-img-3" ></div>
		        </div>
		    </div>

		    <!-- Controls -->
		    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
		        <span class="icon-prev"></span>
		    </a>
		    <a class="right carousel-control" href="#myCarousel" data-slide="next">
		        <span class="icon-next"></span>
		    </a>

		</section>

		<!-- Partner Reel -->
		<section class="fp_partners">
				<div class="row-fluid clearfix">
					<div class="col-xs-4">
						<div class="partner_1"></div>
					</div>
					<div class="col-xs-4">
						<div class="partner_2"></div>
					</div>
					<div class="col-xs-4">
						<div class="partner_3"></div>
					</div>
				</div>
		</section>

		<!-- Features -->
		<section class="feature">
			<div class="row-fluid clearfix">
				<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
				  	<div class="col-md-4 col-sm-12">
				  		<div class="feature-item">
				  			<div class="feature-img-1"></div>
				  			<div class="feature-desc">
				  			<h3 class="feature-title">Personal Injuries</h3>
				  				<p>We can work with your lawyer and medical doctors to help treat your pain from car accidents, slip and falls, work injuries and sports injuries.</p>
				  			</div>
				  		</div>
				  	</div>
				  	<div class="col-md-4 col-sm-12">
				  		<div class="feature-item fi-2">
				  			<div class="feature-img-2"></div>
				  			<div class="feature-desc">
				  			<h3 class="feature-title">Wellness Care</h3>
				  				<p>We provide counseling and programs to help you in weight loss, nutrition, and exercise. It is not just about the pain, but the whole body and mind.</p>
				  			</div>
				  		</div>
				  	</div>
				  	<div class="col-md-4 col-sm-12">
				  		<div class="feature-item fi-3">
				  			<div class="feature-img-3"></div>
				  			<div class="feature-desc">
				  			<h3 class="feature-title">Disability</h3>
				  				<p>Having trouble receiving compensation from a long-term injury? We can help you apply for disability and qualify you for social security benefits.</p>
				  			</div>
				  		</div>
				  	</div>
				</div>
			</div>
		</section><!--/ feature -->

		<!-- New Patients -->
		<section class="new_patients">
			<div class="row-fluid clearfix">
				<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
					<div class="row">
						<div class="col-sm-8 new_patient_msg">
							<div class="_t">New Patients Welcome!</div>
							<div class="_d">Includes examination, muscle treatment and adjustment</div>
						</div>
						<div class="col-sm-4">
							<a href="./new-patient"><div class="np-coupon">
								<div class="np-cost">$25</div>
								<div class="np-special">New Patient Special</div>
							</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

	<!-- Chiropractic Treatments -->
		<section class="chiro_treatments">
			<div class="ct-overlay">
				<div class="row-fluid clearfix">
					<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-xs-12">
						<div class="row-fluid clearfix">
							<div class="col-sm-12">
								<div class="ct-box">
									<div class="ct-title">Our Specialty Areas of Treatment</div>
									<div class="ct-msg">Take the steps to alleviate your pain today</div>
								</div>
							</div>
						</div>
						<div class="row-fluid clearfix">
							<div class="col-md-6 col-sm-12">
								<table class="treatment_table">
									<tr>
										<td><i class="fa fa-check-circle-o"></i><span class="item-text">Herniated Disc</span></td>
									</tr>
									<tr>
										<td><i class="fa fa-check-circle-o"></i>Sciatica</td>
									</tr>
									<tr>
										<td><i class="fa fa-check-circle-o"></i>Slipped Disc</td>
									</tr>
									<tr>
										<td><i class="fa fa-check-circle-o"></i>Piriformis Syndrome</td>
									</tr>
									<tr>
										<td><i class="fa fa-check-circle-o"></i>Back Pain</td>
									</tr>
									<tr>
										<td><i class="fa fa-check-circle-o"></i>Arthritis &#38; Joint Pain</td>
									</tr>
								</table>
							</div>
							<div class="col-md-6 col-sm-12">
								<table class="treatment_table">
									<tr>
										<td><i class="fa fa-check-circle-o"></i>Achilles Tendonitis</td>
									</tr>
									<tr>
										<td><i class="fa fa-check-circle-o"></i>Shinsplints</td>
									</tr>
									<tr>
										<td><div class="ct-list-item"><i class="fa fa-check-circle-o"></i><span class="item-text">Iliotibial Band Syndrome (ITBS)</span></div></td>
									</tr>
									<tr>
										<td><i class="fa fa-check-circle-o"></i>Tight Hamstrings / Calves</td>
									</tr>
									<tr>
										<td><i class="fa fa-check-circle-o"></i>Knee Strain</td>
									</tr>
									<tr>
										<td><i class="fa fa-check-circle-o"></i>Muscle Strain &#38; Soreness</td>
									</tr>
								</table>
							</div>
						</div> <!--/row -->
					</div>
				</div>
			</div>
		</section><!-- /Chiropractic Treatments -->

	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_sidebar();
get_footer();
