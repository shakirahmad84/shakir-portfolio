         <?php 
            while(have_posts()): the_post(); 
            $portfolio_thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );
            $portfolio_url  = get_post_meta( get_the_ID(), 'url', true); 
         ?> 
           
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
               <div class="single-portfolio-item d-flex align-items-center justify-content-center" style="background-image: url(<?php echo $portfolio_thumbnail[0]; ?>)">
                  <div class="portfolio-hover">
                     <h4 class="portfolio-header"><?php the_title(); ?></h4>
                     <a href="<?php echo $portfolio_url; ?>" target="_blank" class="boxed-btn">View Details</a>
                  </div>
               </div>
            </div>
            
         <?php endwhile; ?>