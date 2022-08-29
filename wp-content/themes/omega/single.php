<?php

/**
 * The Template for displaying all single posts.
 *
 * @package Omega
 */

get_header(); ?>




<div class="baner inner-page">
	<h1 class="baner_title"><?php the_title(); ?></h1>
</div>
</div>
</header>
<div class="site-container inner-page">
	<main class="main container">
		<div class="content">
		<?php the_content(); ?>
		</div>
		<a href="#" class="report_btn">Download Full Report</a>

		<div class="related">
			<h3 class="related_title">Related Insights</h3>
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
                  </div>
                </div>
                <?php
                $counter++;

            endwhile;
        endif;
        wp_reset_postdata();
        ?>
		</div>
	</main>


</div>
<?php get_footer(); ?>