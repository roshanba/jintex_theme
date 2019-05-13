<?php 
get_header();
?>

    <section id="blog">
        <div class="container">
            <div class="row">
               <div class="col-md-8 blog-post">
               <?php 
               while(have_posts() ) {
                        the_post();
                            ?>       
               <h3><?php echo the_title();?></h3>
                    <hr>
                    <span class="post-mini "><i class="fas fa-user "></i><?php  the_author(); ?> </span>
                    <span class="post-mini"></span><i class="fas fa-clock"></i><?php  the_date(); ?></span>
                    <span class="post-mini"></span><i class="fas fa-tags"></i>Blog , Web Development, Seo</span>
                    

                    <?php the_post_thumbnail(array(600, 400)); ?>
                    <p>

                    <?php
                        echo the_content();
                            ?>
                    </p>
                    
               <?php 
                    }
               ?>



                </div>

                <div class="col-md-4">
                    
                    
                    
                    
                    
                    <?php if ( dynamic_sidebar('sidebar-1') ) : else : endif; ?>
                    

                   
                
                </div>
            </div>
        </div>

        
    </section>


<?php
get_footer();
?>