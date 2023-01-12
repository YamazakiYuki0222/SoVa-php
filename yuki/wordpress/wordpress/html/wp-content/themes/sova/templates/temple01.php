<?php
/*
 *Template Name:テンプレ１
 */

?>
<?php if(have_posts()): while(have_posts()):the_post(); ?>
これはテンプレ１です
<?php the_title();?>
<?php the_content();?>


<?php endwhile; endif; ?>

