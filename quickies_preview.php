<?php 
$meta= get_post_custom($post->id);
$source = $meta['hb_source_url']['0']; 
//print_r($meta);				
?>


<div class="thread thread-container">
			<div class="thread-headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>

			<span class="quickie">HB QUICKIE</span>



<div class="thread-source"><a class="story-link" href="<?php echo $source; ?>">source</a></div>	
<div class="thread-preview"><?php the_content(); ?></div>
<div class="thread-social">
	<div class="social-icon">
		<a href=""><img src="<?php bloginfo('template_directory'); ?>/social/f.png" alt=""></a>
		<a href=""><img src="<?php bloginfo('template_directory'); ?>/social/t.png" alt=""></a>
		<a href=""><img src="<?php bloginfo('template_directory'); ?>/social/p.png" alt=""></a>
		<a href=""><img src="<?php bloginfo('template_directory'); ?>/social/s.png" alt=""></a>
	</div>


</div>	
</div>