
	</main>
	<footer class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<p class="copy mb-0">Designed & Built by <a href="https://www.thewowfactory.co.uk/" target="_blank" title="Click here for The Wow Factory website">The Wow Factory</a> - &copy; <?php echo get_bloginfo( 'name' ).' '.date("Y"); ?> - All rights reserved</p>
					<p class="copy">Company Number: XXXXXXXX Registered In England & Wales | VAT Number: XXXXXXXXX</p>
				</div>
			</div>
		</div>
	</footer>
	
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="slick/slick.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('.multiple_items').slick({
				infinite: true,
				slidesToShow: 3,
				slidesToScroll: 3
			});
		});
	</script>
	
	<?php wp_footer();?>
</body>
</html>
