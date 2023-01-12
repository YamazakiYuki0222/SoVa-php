<?php
/*
 *Template Name:問い合わせ
 */
?>
<?php if(have_posts()): while(have_posts()):the_post(); ?>
これは問い合わせだよ
<?php the_title(); ?>
<?php the_content();?>

<?php endwhile; endif; ?>
