<?php
/*
Template Name: Home page
Template Post Type: page
*/



get_header(); ?>


<?php 
$title = get_field('title');
$subtitle = get_field('subtitle');
$textbtn = get_field('textbtn');
$linkbtn = get_field('linkbtn');
$borderimg = get_field('border');
?>



<div class="baner">
    <h1 class="baner_title"><?php echo $title ?></h1>
    <div class="baner_paragraph"><?php echo $subtitle ?>
   </div>
    <a href="<?php echo $linkbtn ?>" class="baner_btn"><?php echo $textbtn ?></a>
    <img class="baner_border" src="<?php echo $borderimg ?>" alt="border">

  </div>
  </div>
  </header>

  <div class="site-container">
    <main class="main container">
    
      <?php 
            $args = array(
          'post_type' => 'post',
          'posts_per_page' => 4,
          'order' => 'DESC',
          'orderby' => 'menu_order'
      );

        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) :
            $counter = 0;
            while ($the_query->have_posts()) : $the_query->the_post();
                if ($counter % 4 == 0) :
                    echo $counter > 0 ? "</div>" : ""; // close div if it's not the first
                    echo "<div id='blog' class='blog'>";
                endif;
                ?>
                <div class="blog_item">
                    
                    <img src="<?php the_field('postimg'); ?>" alt="" class="blog_item_image">
                    <div class="blog_item_text">
                      <div class="blog_item_title"><?php the_title(); ?>
                      </div>
                      <div class="blog_item_discription"><?php the_field('discription'); ?></div>
                      <a href="<?php the_permalink();?>" class="blog_item_show-more">Show more</a>
                  </div>
                </div>
                <?php
                $counter++;

            endwhile;
        endif;
        wp_reset_postdata();
        ?>

    </main>



<?php get_footer(); ?>