<?php
/**
 * Index
 *
 * Standard loop for the front-page
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 1.0
 */

get_header(); ?>


<header class="">
	</header>



<div style="margin-top:10px;" class="hbfull">
<div class="main">
	<a class="logo" href="<?php echo get_option('home'); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/hblogo.png" alt=""></a>
	<?php global $query_string;
				query_posts($query_string.'&post_type=hb&posts_per_page=1');
						if ( have_posts() ) : ?>
							<?php while ( have_posts() ) : the_post(); ?>
								<?php 
										$meta= get_post_custom($post->id);
										$source = $meta['hb_source_url']['0']; 
								?>


<?php previous_post(' %', '<div class="right"> <img src="'.get_template_directory_uri().'/img/r.png"/></div>', 'no'); ?>

<?php next_post(' %', '<div class="left"> <img src="'.get_template_directory_uri().'/img/l.png"/></div>', 'no'); ?>


	<div class="meta">
		
	</div>

		<div class="thread thread-container">

		<div class="thread-headline"><?php the_title(); ?></div>
		<?php //the_permalink(); ?>
	
		<div class="thread-content"><?php the_content(); ?></div>
		<div class="thread-source">








<div id="post-nav">
	<?php $prevPost = get_previous_post(true);
		if($prevPost) {
			$args = array(
				'posts_per_page' => 1,
				'include' => $prevPost->ID
			);
			$prevPost = get_posts($args);
			foreach ($prevPost as $post) {
				setup_postdata($post);
	?>
		<div class="post-previous">
			<a class="previous" href="<?php the_permalink(); ?>">&laquo; Previous Story</a>
			<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
			<small><?php the_date('F j, Y'); ?></small>
		</div>
	<?php
				wp_reset_postdata();
			} //end foreach
		} // end if
		
		$nextPost = get_next_post(true);
		if($nextPost) {
			$args = array(
				'posts_per_page' => 1,
				'include' => $nextPost->ID
			);
			$nextPost = get_posts($args);
			foreach ($nextPost as $post) {
				setup_postdata($post);
	?>
		<div class="post-next">
			<a class="next" href="<?php the_permalink(); ?>">Next Story &raquo;</a>
			<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
			<small><?php the_date('F j, Y'); ?></strong>
		</div>
	<?php
				wp_reset_postdata();
			} //end foreach
		} // end if
	?>
</div>








			<div class="source"><a class="story-link" href="<?php echo $source; ?>">source &raquo;</a></div></div>	

		</div>

							<?php endwhile; ?>
						<?php else : ?>
						<?php endif; ?>
</div>	<!-- /Main -->
<div class="side">








<div class="social-block">
	<h3>Show your love</h3>
	<div class="facebook-like badge_facebook_render">
<fb:like href="https://www.facebook.com/pages/HippieBudha/130148760483199" send="false" width="270" show_faces="true"></fb:like>	</div>


<a href="https://twitter.com/HippieBudha" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @HippieBudha</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	

</div>

	<div class="comment block">
		<fb:comments href="<?php the_permalink(); ?>" width="270" num_posts="10"></fb:comments>
	</div>
	<?php get_footer(); ?>	
</div>
<div class="sideshow"></div>

