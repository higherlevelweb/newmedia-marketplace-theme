<?php
/**
* Template Name: homepage
 * Template for displaying homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package newmedia-marketplace
 */

get_header();
?>

<main id="primary" class="site-main">

<!-- ############ PAGE START-->

<div class="owl-carousel black owl-theme owl-dots-bottom-center" data-ui-jp="owlCarousel" data-ui-options="{
             items: 1
            ,loop: true
            ,autoplay: true
            ,nav: true
          }">
	<div class="row-col">
		<div class="col-lg-2"></div>
		<div class="col-lg-8 text-center">
			<div class="p-a-lg">
				<div><img src="https://aetheronmedia.com/wp-content/themes/newmedia-marketplace-theme/images/logo.svg" alt="Aetheron Media" id="logo" class="slider-img"></div>
			</div>
		</div>
		<div class="col-lg-2"></div>
	</div>
	<div class="row-col">
		<div class="col-lg-2"></div>
		<div class="col-lg-8 text-center">
			<div class="p-a-lg">
				<h2 class="display-4 m-y-lg">Where arts and technology intersect</h2>
				<h6 class="text-muted m-b-lg">Original high quality digital media productions</h6>
				<a href="player.html" class="btn circle btn-outline b-primary m-b-lg p-x-md">Explore platform</a>
			</div>
		</div>
		<div class="col-lg-2"></div>
	</div>
	<div class="row-col">
		<div class="col-lg-2"></div>
		<div class="col-lg-8 text-center">
			<div class="p-a-lg">
				<h2 class="display-4 m-y-lg">Showcasing creators to the world</h2>
				<h6 class="text-muted m-b-lg">Creative marketplace with shining online presences</h6>
				<a href="rtl.html" class="btn circle btn-outline b-primary m-b-lg p-x-md">Get on the platform</a>
			</div>
		</div>
		<div class="col-lg-2"></div>
	</div>
</div>
<div class="row-col">
	<div class="col-sm-6">
		<div class="black cover cover-gd" style="background-image: url('https://aetheronmedia.com/wp-content/themes/newmedia-marketplace-theme/images/b1.jpg');">
			<div class="p-a-lg text-center">
				<h3 class="display-3 m-y-lg">Music</h3>
				<p class="text-muted text-md m-b-lg">Inspiring artist music and audio in high quality sound.</p>
				<a href="player.html" class="btn circle white m-b-lg p-x-md">Listen ></a>
			</div>
		</div>
	</div>
	<div class="col-sm-6 black lt">
		<div class="black cover cover-gd" style="background-image: url('https://aetheronmedia.com/wp-content/themes/newmedia-marketplace-theme/images/b7.jpg');">
			<div class="p-a-lg text-center">
				<h3 class="display-3 m-y-lg">Digital</h3>
				<p class="text-muted text-md m-b-lg">Original podcasts, videos, books, photography, and graphics.</p>
				<a href="home.html" class="btn circle white m-b-lg p-x-md">Discover ></a>
			</div>
		</div>
	</div>
</div>

<div class="row-col dark-white">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="p-a-lg text-center">
			<h3 class="display-4 m-y-lg">Artist Merchandise</h3>
			<p class="text-muted text-md m-b-lg">Unique t-shirts, other personalized items, and printed posters, designed by your favourite artists.</p>
			<a href="home.html" class="btn circle btn-outline b-black m-b-lg p-x-md">See unique offers ></a>
		</div>
	</div>
	<div class="col-md-3"></div>
</div>

<div class="black cover" data-stellar-background-ratio="0.5" style="background-image: url('https://aetheronmedia.com/wp-content/themes/newmedia-marketplace-theme/images/b10.jpg');">
	<div class="row-col">
		<div class="col-md-4">
			<div class="p-a-lg text-center">
				<h4 class="m-y-lg">Digital Content Creators</h4>
				<p class="text-muted text-md m-b-lg">Whether you're a youtuber, podcaster, marketer, or student, you've got projects, and we've got resources to help you enhance them.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="p-a-lg text-center">
				<h4 class="m-y-lg">Producers, Speakers, Filmmakers, Authors, Photographers, and Graphic Designers</h4>
				<p class="text-muted text-md m-b-lg">Our passion is to promote and enable music and digital artists, and great minds, to earn and keep more for doing what they love.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="p-a-lg text-center">
				<h4 class="m-y-lg">One platform to feature it all</h4>
				<p class="text-muted text-md m-b-lg">Our mission is to spread creative and inspired music and digital works, as well as unique artist merchandise.</p>
			</div>
		</div>
	</div>
</div>

<!-- ############ PAGE END-->

</main><!-- #main -->

<?php
get_footer();