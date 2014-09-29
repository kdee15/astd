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