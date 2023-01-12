<?php
//アクセスしたURLから引っ張ってこれる
/*ブログ投稿情報を自動で取ってくる関数がhave_posts();
$res = have_posts();
if($res) { 
  while($res) {
    the_post();
    
    the_title();

    the_content();

  }
} 
 */
?>
<?php if(have_posts()): while(have_posts()):the_post(); ?>

<?php the_title(); ?>
<?php the_content();?>

<?php endwhile; endif; ?>








