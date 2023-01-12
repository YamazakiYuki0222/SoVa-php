<?php
/*
 *Template Name:プライバシーポリシー
 */

?>
<?php if(have_posts()): while(have_posts()):the_post(); ?>
これはプラポリだよ
<?php the_title();?>
<?php the_content();?>
<?php if (has_post_thumbnail()) : ?>
	<?php the_post_thumbnail('full', array('class' => 'img-fluid w-100')); ?>
<?php else : ?>
	<img class="img-fluid w-100" src="<?php bloginfo('template_url'); ?>/img/ec-wordpress.png" alt="デフォルト画像">
<?php endif ; ?>


<?php endwhile; endif; ?>

