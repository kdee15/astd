<!-- C. WORK AREA ++++++++++++++++++++++++++++++++++++++ -->

<!-- C.1. Masthead -->

<header id="masthead">
	<div class="container">
		
		<span id="top"></span>
		<!-- C.1.1. Logo -->
        <img src="<?php print base_path() . path_to_theme() .'/' ?>assets/images/svg/astd-logo-sm.svg" alt="ASTD Logo" class="logo" id="astd-siteLogo" />
		
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

			<h2>Welcome to the</h2>

			<!-- C.1.1. Logo -->
			
			<figure class="figure-logo">

				<span class="image-logo">
					<a href="<?php print $front_page; ?>" rel="home" class="logo">
						<img class="logo" src="<?php print base_path() . path_to_theme() .'/' ?>assets/images/svg/astd-logo.svg">
					</a>
				</span>

			</figure>

			<p>
				A PROFESSIONAL ASSOCIATION DEDICATED TO THE<br>
				TALENT, TRAINNG AND DEVELOPMENT FIELD IN AFRICA
			</p>

			<hr class="astd-hr" />

			<h2>Join us at upcoming events</h2>

		</div>

	</section>
	
	<!-- C.2.2. Events Grid -->

	<section class="section-events" id="section-events">

		<div class="container">
			
			<?php print render($page['events']); ?>
			
		</div>

	</section>

	<!-- C.2.2. End -->
	
	<!-- C.2.3. Conferences -->
	
	<section class="section-conferences" id="section-conferences">

		<div class="container">

			<figure class="figure-icon">

				<span class="image-icon">

					<img class="icon" src="<?php print base_path() . path_to_theme() .'/' ?>assets/images/svg/astd-icon.svg">

				</span>

			</figure>

			<h2>Our Annual ASTD Conference</h2>

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

						<h3>
							GLOBAL BEST PRACTICE<br>
							HUMAN PERFORMANCE<br>
							WORKPLACE IMPROVEMENT<br>
							COLLABORATION
						</h3>

						<p class="medium">
							The African Society for 
							Talent Development (ASTD)
						</p>
						<p class="normal">
							is a professional association 
							dedicated to the
						</p>
						<p class="large">
							talent, training and development field in Africa.
						</p>
						<p class="normal">
							The ASTD positions itself as a 
							stakeholder, collaborator and a 
							facilitator in creating, disseminating and acting on knowledge that will assist professionals to successfully interact with tomorrow’s people in tomorrow’s organisations.
						</p>
						<p  class="medium">
							STRUCTURE
						</p>
						<p  class="normal">
							The ASTD is composed of
						</p>
						<ul>

							<li>Members</li>
							<li>An Executive; and</li>
							<li>An Advisory Board</li>

						</ul>

					</div>
				</div>
				
				<!-- C.2.5.1. End: Dynamic Content Region One -->
				
				<!-- C.2.5.2. Dynamic Content Region Two -->
				
				<div class="grid-item">

					<div class="wrapper">
						
						<?php print render($page['about_two']); ?>

						<h3>

							NETWORKING<br>
							INFORMATION SHARING<br>
							TRAINING DESIGN AND<br>
							DELIVERY

						</h3>

						<p>

							We understand the need for network building, both locally and internationally:  we believe that Africa cannot afford to rest on it’s laurels, and needs continuously to look for ways to enhance the knowledge and hone the skills of its talent development community. Under the guidance of USB-ED, initiatives will be developed aimed specifically at this need. The ASTD maintains it’s strategic alliance with the Assocation for Talent Development (ATD), formerly the American Society for Training and Development. 

						</p>

					</div>

				</div>
				
				<!-- C.2.5.2. End: Dynamic Content Region Two -->
				
				<!-- C.2.5.3. Dynamic Content Region Three -->
				
				<div class="grid-item">

					<div class="wrapper">
						
						<?php print render($page['about_three']); ?>

						<h3>

							LEADERSHIP DEVELOPMENT<br>
							SCIENCE OF ART AND LEARNING<br>
							LEARNING TECHNOLOGY

						</h3>

						<p>

							We have the experience, skills and 
resources:  with our managing partner, USB-ED, we have put together an 
experienced team to focus on 
facilitating the development of strategic thought leadership in the field, build a sound network amongst our stakeholders in government, business, academia and civil society as well as exposing members to the most profound and practical knowledge possible.  Our aspiration is to be recognised as a key voice in the field of talent development.  In fulfilling this aspiration and with the support of our members amongst others, we will gain access to key local and international players in this field and then authentically advocate on behalf of our industry.


						</p>

					</div>

				</div>
				
				<!-- C.2.5.3. End: Dynamic Content Region Three -->
				
				<!-- C.2.5.4. Dynamic Content Region Four -->
				
				<div class="grid-item">

					<div class="wrapper">
						
						<?php print render($page['about_four']); ?>

						<h3>

							LEARNING MEASUREMENT AND ANALYTICS<br>
							SALES ENABLEMENT

						</h3>

						<p>

							We provide unique, strategic engagement:  our membership is now expanded to represent the full range of talent development leaders and practitioners in Africa, enabling us to engage around the challenges and opportunities impacting the field of talent development on the continent.  Using our convening abilities we will create the space in which our professional members will engage with national, regional and international others, not only to learn from each other but to contribute to the body of talent development knowledge.

						</p>

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