<?php 
/*
 *Template Name:テンプレ２
 */

?>
<?php if(have_posts()): while(have_posts()):the_post(); ?>
これはテンプレ２やで
<?php the_title();?>
<?php the_content();?>


<?php endwhile; endif; ?>





