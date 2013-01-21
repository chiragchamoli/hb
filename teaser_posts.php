<div class="teaser-preview">
	<a href="<?php the_permalink(); ?>">
		<div class="teaser-preview-images">
						
			<?php echo the_post_thumbnail( 'tease' ); ?>
						
		</div>
		<div class="teaser-preview-text"> <?php echo the_title(); ?></div>
	</a>
</div>