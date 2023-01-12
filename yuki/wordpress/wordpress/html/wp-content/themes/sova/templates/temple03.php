<?php
/*
 *Template Name:テンプレ3
 */

?>
<?php if(have_posts()): while(have_posts()):the_post(); ?>
これはテンプレ3だら〜
<?php the_title();?>
<?php the_content();?>


<?php endwhile; endif; ?>

