<!-- C. WORK AREA ++++++++++++++++++++++++++++++++++++++ -->

<!-- C.1. Masthead -->

<header id="masthead">
	<div class="container">
		
		<span id="top"></span>
		
		<!-- C.1.1. Logo -->
		
		<a href="<?php print $front_page; ?>">
        	<img src="<?php print base_path() . path_to_theme() .'/' ?>assets/images/svg/astd-logo-sm.svg" alt="ASTD Logo" class="page-logo" id="astd-siteLogo" />
		</a>
		
		<!-- C.1.1. Navigation -->
		
		<nav id="nav">

			<ul>

				<!--<li><a href="#section-events" class="first astd-textLink">Events</a></li>
				<li><a href="#section-conferences" class="astd-textLink">Conferences</a></li>
				<li><a href="#section-publications" class="astd-textLink">Publications</a></li>
				<li><a href="#section-about" class="astd-textLink">About ASTD</a></li>
				<li><a href="#section-contact" class="astd-textLink">Contact Us</a></li>
				<li><a href="#section-members" class="astd-textLink">Become a Member</a></li>-->
				<li><a href="/user" class="astd-textLink">Login</a></li>

			</ul>

		</nav>

	</div>
</header>

<!-- C.2. End -->

<section id="mast">
	
	<div class="container">	
		<!-- C.2.1. Page -->
		<section class="page">
			<div class="wrapper">
			<!-- C.2.1 Tabs -->

			<?php if ($tabs): ?>
			  <nav class="tabbed navigation">
				<?php print render($tabs); ?>
			  </nav>
			<?php endif; ?>
			<?php print render($title_prefix); ?>
			<?php if ($title): ?>
			  <h1 class="title" id="page-title">
				<?php print $title; ?>
			  </h1>
			<?php endif; ?>
			<?php print render($title_suffix); ?>

			<?php print render($page['help']); ?>
			<?php if ($action_links): ?>
			  <ul class="action-links">
				<?php print render($action_links); ?>
			  </ul>
			<?php endif; ?>
			<?php print render($page['content']); ?>
			<?php print $feed_icons; ?>

			<section class="section-region page-bottom">
				<?php print render($page['page_bottom']); ?>
			</section>
			</div>
		</section>

	</div>	
	
</section>


<!-- C.3. Footend -->


<footer id="footend">

	<div class="container">

		<div class="grid">

			<div class="grid-item item-contact">

				<div class="wrapper">
					
					<!-- C.3.1. Sponsors -->
					<?php print render($page['footend_one']); ?>

					<input type="text" placeholder="Name" class="contact-name">
					<input type="text" placeholder="Company Name" class="contact-companyname">
					<input type="text" placeholder="Telephone Number" class="contact-tel">
					<input type="text" placeholder="Email Address" class="contact-email">
					<textarea placeholder="Query" rows="4" class="contact-message"></textarea>

				</div>

			</div>

			<div class="grid-item item-comm">

				<div class="wrapper">
					
					<!-- C.3.2. Follow DMV -->
					<?php print render($page['footend_two']); ?>

					<span class="comm-icon icon-tel"></span><p>+27 11 460 6980</p>
					<span class="comm-icon icon-mail"></span><p><a href="mailto:info@astd.co.za">info@astd.co.za</a></p>
					<span class="comm-icon icon-fb"></span><p>Facebook/astd</p>
					<span class="comm-icon icon-geo"></span><p>2nd Floor The Gabba Building, The Campus, Main Road, Bryanston</p>

				</div>

			</div>

			<div class="grid-item">

				<div class="wrapper">

					<!-- C.3.3. Newsletter Signup -->
					<?php print render($page['footend_three']); ?>
					
				</div>

			</div>

		</div>

	</div>

</footer>