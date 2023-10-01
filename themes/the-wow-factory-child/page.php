
<?php get_header();

	$row_index = 1;
	if(have_rows('layouts')):
		while(have_rows('layouts')):
			the_row();
			include 'layouts/'.get_row_layout().'.php';
			$row_index = $row_index + 1;
		endwhile;
	endif;

get_footer();
