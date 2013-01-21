<?php 
$meta= get_post_custom($post->id);
$source = $meta['hb_source_url']['0']; 
//print_r($meta);				
?>


<div class="thread thread-container">
			<div class="thread-headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>

				



<div class="thread-source"><a class="story-link" href="<?php echo $source; ?>">source</a></div>	
<div class="thread-preview">
		
		
		<a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail( 'showtime' ); ?></a>
		

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