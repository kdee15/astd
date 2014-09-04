<!-- C. WORK AREA ++++++++++++++++++++++++++++++++++++++ -->

<span id="top"></span>

<!-- C.1. Masthead -->

<header id="masthead">
	<div class="container">
	
		<!-- C.1.1. Logo -->
		<a href="#top" rel="home" class="astd-textLink">
        	<img src="<?php print base_path() . path_to_theme() .'/' ?>assets/images/svg/astd-logo-sm.svg" alt="ASTD Logo" class="logo" id="astd-siteLogo" />
		</a>
		<!-- C.1.1. Navigation -->
		<nav id="nav">

			<ul>

				<li><a href="#section-events" class="first astd-textLink">Events</a></li>
				<li><a href="#section-conferences" class="astd-textLink">Conferences</a></li>
				<li><a href="#section-publications" class="astd-textLink">Publications</a></li>
				<li><a href="#section-about" class="astd-textLink">About ASTD</a></li>
				<li><a href="#section-contact" class="astd-textLink">Contact Us</a></li>
				<li><a href="#section-members" class="astd-textLink">Become a Member</a></li>
				<li><a href="user" class="astd-textLink">Login</a></li>

			</ul>

		</nav>

	</div>
</header>

<!-- C.2. End -->

<section id="mast">

	<!-- C.2.1. Page Intro -->
	
	<section class="section-intro">
					
		<div class="container">
			
			<div class="wrapper">
				
				<div class="section-scale">
				
					<h2>Welcome to the</h2>

					<!-- C.1.1. Logo -->

					<figure class="figure-logo">

						<span class="image-logo">
							<a href="<?php print $front_page; ?>" rel="home">
								<img src="<?php print base_path() . path_to_theme() .'/' ?>assets/images/svg/astd-logo.svg">
							</a>
						</span>

					</figure>

					<p>
						A PROFESSIONAL ASSOCIATION DEDICATED TO THE<br>
						TALENT, TRAINNG AND DEVELOPMENT FIELD IN AFRICA
					</p>
				
				</div>	
				
			</div>

		</div>

	</section>
	
	<!-- C.2.2. Events Grid -->

	<section class="section-events" id="section-events">

		<div class="container">
			
			<h2>Join us at upcoming events</h2>
			
			<?php print render($page['events']); ?>
			
		</div>

	</section>

	<!-- C.2.2. End -->
	
	<!-- C.2.3. Conferences -->
	
	<section class="section-conferences" id="section-conferences">

		<div class="container">
			
			<div class="wrapper">
			
				<div class="section-scale">
				
					<figure class="figure-icon">

					<span class="image-icon">

						<img class="icon" src="<?php print base_path() . path_to_theme() .'/' ?>assets/images/svg/astd-icon.svg">

					</span>

				</figure>

				<h2>Our Annual ASTD Conference</h2>
				
				</div>
			
			</div>

		</div>

	</section>
	
	<!-- C.2.3. End -->
	
	<!-- C.2.4. Testimonials -->
				
	<section class="section-testimonials">

		<div class="container">

			<p>
				My ASTD membership is an important link to thought leadership and innovative best practice. 
				As an Organisational Development practitioner, I have derived enormous benefit from my interaction 
				with communities of practice focusing on building organizational capability and driving organizational 
				effectiveness. Being a member of ASTD and attending the annual conference has enabled me to establish 
				valuable networks and introduce game-changing initiatives at work.
				- <span>Clayton Lendrum, Group OD Manager, Human Resources, MultiChoice</span>

			</p>

		</div>

	</section>
	
	<!-- C.2.4. End -->
	
	<!-- C.2.5. About -->
	
	<section class="section-about" id="section-about">

		<div class="container">

			<h2>

				About Us

			</h2>

			<hr class="astd-hr" />

			<div class="grid">
				
				<!-- C.2.5.1. Dynamic Content Region One -->
				
				<div class="grid-item">
					<div class="wrapper">
						
						<?php print render($page['about_one']); ?>

					</div>
				</div>
				
				<!-- C.2.5.1. End: Dynamic Content Region One -->
				
				<!-- C.2.5.2. Dynamic Content Region Two -->
				
				<div class="grid-item">

					<div class="wrapper">
						
						<?php print render($page['about_two']); ?>

					</div>

				</div>
				
				<!-- C.2.5.2. End: Dynamic Content Region Two -->
				
				<!-- C.2.5.3. Dynamic Content Region Three -->
				
				<div class="grid-item">

					<div class="wrapper">
						
						<?php print render($page['about_three']); ?>

					</div>

				</div>
				
				<!-- C.2.5.3. End: Dynamic Content Region Three -->
				
				<!-- C.2.5.4. Dynamic Content Region Four -->
				
				<div class="grid-item">

					<div class="wrapper">
						
						<?php print render($page['about_four']); ?>

					</div>

				</div>
				
				<!-- C.2.5.4. End: Dynamic Content Region Four -->

			</div>
		</div>

	</section>
	
	<!-- C.2.5. End -->
	
	<!-- C.2.6. Advisory Board -->
				
	<section class="section-board">

		<div class="container">
			
			<h2>Advisory Board</h2>
			
			<p>ASTD needs continuous input and reflection to stay abreast and ensure high quality output for its members and society. The ASTD Advisory Board members are all individuals with the experience and insight to enhance services to members and contribute to ASTD’s quest to develop an advance learning network across Africa.</p>

			<?php print render($page['advisory_board']); ?>

		</div>

	</section>
	
	<!-- C.2.6. End: Advisory Board -->

</section>





<?php print render($page['homepage_content']); ?>



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


<!-- C. END ++++++++++++++++++++++++++++++++++++++ -->