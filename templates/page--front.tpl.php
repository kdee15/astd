<!-- C. WORK AREA ++++++++++++++++++++++++++++++++++++++ -->

<!-- C.1. Masthead -->

<?php include('includes/header.inc'); ?>

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

					<p>A professional society dedicated to</p>
                    <h2>talent development field in Africa</h2>
                    
                    <div class="new-logo">
                
                        <img src="<?php print base_path() . path_to_theme() .'/' ?>assets/images/svg/atd-logo.png">

                    </div>
				
				</div>	
				
			</div>

		</div>

	</section>
	
	<!-- C.2.2. Events Grid -->

	<section class="section-events" id="section-events">

		<div class="container">
			
			<h2 class="section-header">Join us at upcoming events<hr/></h2>
			
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

						<img class="icon" src="<?php print base_path() . path_to_theme() .'/' ?>assets/images/svg/logo-astdweek.svg">

					</span>

				</figure>

				<h2>Join us at our Annual ASTD Conference</h2>
                    
                	<?php print render($page['astd']); ?>    
				
				</div>
			
			</div>

		</div>

	</section>
	
	<!-- C.2.3. End -->
	
	<!-- C.2.5. About -->
	
	<section class="section-about" id="section-about">

		<div class="container">

			<h2>

				About Us

			</h2>

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

			</div>
		</div>

	</section>
	
	<!-- C.2.5. End -->
    
    <!-- C.2.4. Testimonials -->
				
	<section class="section-testimonials">

		<div class="container">

			<?php print render($page['testimonials']); ?>

		</div>

	</section>
	
	<!-- C.2.4. End -->

</section>

<?php print render($page['homepage_content']); ?>

<!-- C.3. Footend -->

<?php include('includes/footer.inc'); ?>

<!-- C. END ++++++++++++++++++++++++++++++++++++++ -->