<!-- 
<div class="twelve columns magicbar">
	<div class="magicbarinner">
		
		<?php

		   // The Query
 	   	query_posts(array('post_type' => 'hb_post', 'posts_per_page' => 7 )); 
			// The Loop
		 	while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'teaser_posts' ); ?>	
		<?php endwhile;

		// Reset Query
		wp_reset_query();

		?>
			<div class="teaser-preview"> <a href="'<?php echo $randomPost; ?>"><img src="<?php bloginfo('template_directory'); ?>/img/shuffle.png" alt=""></a></div>
			


	</div>
</div>


Begin Page -->




    <!-- Main Content 
    <div class="twelve columns" role="content">-->
		<div class="wrapper">		
			<div style="padding-top:20px;" class="threads">
			<?php global $query_string;
				query_posts($query_string.'&post_type=hb_post&posts_per_page=1');
						if ( have_posts() ) : ?>
							<?php while ( have_posts() ) : the_post(); ?>
								<?php //get_template_part('single_post' );  ?>

								<?php 
$meta= get_post_custom($post->id);
$source = $meta['hb_source_url']['0']; 
//print_r($meta);				
?>

<div class="thread thread-container">
			<div class="thread-headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>

				



<div class="thread-source"><a class="story-link" href="<?php echo $source; ?>">source</a></div>	
<div class="thread-preview">
		
		
		<?php the_content(); ?>
		

</div>
<div class="thread-social">
	<div class="social-icon">
		<a href=""><img src="<?php bloginfo('template_directory'); ?>/social/f.png" alt=""></a>
		<a href=""><img src="<?php bloginfo('template_directory'); ?>/social/t.png" alt=""></a>
		<a href=""><img src="<?php bloginfo('template_directory'); ?>/social/p.png" alt=""></a>
		<a href=""><img src="<?php bloginfo('template_directory'); ?>/social/s.png" alt=""></a>
	</div>


</div>	
</div>



<div class="thread-meta hide-for-small">
	<div class="social">
		social
	</div>
	<div class="comment">
		collents
	</div>
</div>







								
							<?php endwhile; ?>
						<?php else : ?>
						<?php endif; ?>
			


			</div>


<?php get_footer(); ?>

		</div>
	</div>