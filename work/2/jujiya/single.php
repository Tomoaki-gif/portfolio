<?php get_header(); ?>

<!-- back -->
<!-- 前のページに戻る。前のページがなければトップページに戻る。 -->
<div class="back">
	<?php if (!empty($_SERVER['HTTP_REFERER'])) : ?>
		<a href="<?php echo $_SERVER['HTTP_REFERER']; ?>" class="back"><img src="<?php echo get_template_directory_uri() ?>/img/layout/back.png" alt="back"></a>
	<?php else : ?>
		<a href="<?php echo home_url(); ?>" class="back"><img src="<?php echo get_template_directory_uri() ?>/img/layout/back.png" alt="back"></a>
	<?php endif; ?>
</div>
<!-- back -->

<?php
if ( have_posts() ) :
while ( have_posts() ) :
the_post();
?>

<!-- news -->
<div class="news-main">
	<div class="news-content">
		<div class="news-title">
			<!-- タイトルの表示 -->
			<p><?php the_title(); ?></p>
		</div>

		<hr>
		
		<div class="news-detail">
			<!-- 本文の表示 -->
			<p><?php the_content();?></p>
		</div>
	</div>
</div>

<?php
endwhile;
endif;
?>

<?php get_footer(); ?>