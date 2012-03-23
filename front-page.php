<?php get_header(); ?>

<div id="team-picture">
	<img src="<?php bloginfo("stylesheet_directory"); ?>/img/TeamPhoto.JPG" id="team-picture-image" alt="Team Middlebury 2013" title="Team Middlebury 2013" draggable="false">
	<div id="team-picture-tagline">Middlebury College returns to the US Department of Energy Solar Decathlon. Meet the new team!</div>
</div>
<div id="main-sidebar">
	<div id="logo-container">
		<img src="<?php bloginfo("stylesheet_directory"); ?>/img/logo.png" alt="insite" title="insite" draggable="false"/>
	</div>
	<div id="news-titles">
	<h2>Recent News</h2>
	<?php
	$myposts = get_posts( $args );
	foreach( $myposts as $post ) :	setup_postdata($post); ?>
			<div class="news-title">
			<div class="the-title">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
			</div>
			<small><?php the_time('F jS, Y') ?></small>	
			</div>
	
	<?php endforeach; ?>

	</div>
</div>
<?php get_footer(); ?>