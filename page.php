<?php
/**
 * Template for displaying all pages
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
				<h2 class="display-4 m-y-lg">A simple, fast and responsive music template</h2>
				<h6 class="text-muted m-b-lg">HTML5 Music Template</h6>
				<a href="home.html" class="btn circle btn-outline b-primary m-b-lg p-x-md">Get it now</a>
			</div>
		</div>
		<div class="col-lg-2"></div>
	</div>
	<div class="row-col">
		<div class="col-lg-2"></div>
		<div class="col-lg-8 text-center">
			<div class="p-a-lg">
				<h2 class="display-4 m-y-lg">Bootstrap 4 CSS framework</h2>
				<h6 class="text-muted m-b-lg">Responsive layout</h6>
				<a href="player.html" class="btn circle btn-outline b-primary m-b-lg p-x-md">View App</a>
			</div>
		</div>
		<div class="col-lg-2"></div>
	</div>
	<div class="row-col">
		<div class="col-lg-2"></div>
		<div class="col-lg-8 text-center">
			<div class="p-a-lg">
				<h2 class="display-4 m-y-lg">Ajax powered page switch with great experience</h2>
				<h6 class="text-muted m-b-lg">No refresh page when switching pages</h6>
				<a href="rtl.html" class="btn circle btn-outline b-primary m-b-lg p-x-md">Get RTL</a>
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
				<p class="text-muted text-md m-b-lg">Get ready for high sound quality.</p>
				<a href="player.html" class="btn circle white m-b-lg p-x-md">Try Free</a>
			</div>
		</div>
	</div>
	<div class="col-sm-6 black lt">
		<div class="black cover cover-gd" style="background-image: url('https://aetheronmedia.com/wp-content/themes/newmedia-marketplace-theme/images/b7.jpg');">
			<div class="p-a-lg text-center">
				<h3 class="display-3 m-y-lg">Artists</h3>
				<p class="text-muted text-md m-b-lg">Listen to your favorite Artists.</p>
				<a href="home.html" class="btn circle white m-b-lg p-x-md">View Artists</a>
			</div>
		</div>
	</div>
</div>

<div class="row-col dark-white">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="p-a-lg text-center">
			<h3 class="display-4 m-y-lg">Light, Grey, Dark, Black themes</h3>
			<p class="text-muted text-md m-b-lg">Config any blocks with any colors</p>
			<a href="home.html" class="btn circle btn-outline b-black m-b-lg p-x-md">Try Settings</a>
		</div>
	</div>
	<div class="col-md-3"></div>
</div>

<div class="black cover" data-stellar-background-ratio="0.5" style="background-image: url('https://aetheronmedia.com/wp-content/themes/newmedia-marketplace-theme/images/b10.jpg');">
	<div class="row-col">
		<div class="col-md-4">
			<div class="p-a-lg text-center">
				<h4 class="m-y-lg">One Css framework, Unlimited options &amp; variables</h4>
				<p class="text-muted text-md m-b-lg">Colors, layouts, components and widgets. we pre-build them for you.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="p-a-lg text-center">
				<h4 class="m-y-lg">Two layouts, Horizontal and side navigation</h4>
				<p class="text-muted text-md m-b-lg">With the flexiable layout options, you can build responsive layouts.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="p-a-lg text-center">
				<h4 class="m-y-lg">Three templates, Landing, App, Site templates</h4>
				<p class="text-muted text-md m-b-lg">Choose the suitable one for your needs.</p>
			</div>
		</div>
	</div>
</div>

<!-- ############ PAGE END-->

</main><!-- #main -->

<?php
get_footer();