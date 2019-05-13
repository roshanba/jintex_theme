<?php 

get_header();
?>

    <section id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                <?php
                        $args = array(
                            'post_type' => 'post'
                        );

                        $post_query = new WP_Query($args);
                    if($post_query->have_posts() ) {
                    while($post_query->have_posts() ) {
                        $post_query->the_post();
                            ?>  
                              <div class="blog-post">
                                    <h3><?php echo the_title(); ?></h3>
                                    <hr>
                                    <span class="post-mini "><i class="fas fa-user "></i><?php  the_author(); ?> </span>
                                    <span class="post-mini"></span><i class="fas fa-clock"></i><?php  the_date(); ?></span>
                                    <span class="post-mini"></span><i class="fas fa-tags"></i></span>
                                    <img src="<?php get_the_post_thumbnail_url();?>" alt="">
                                <p> 
                                    <div>

                                    <?php the_post_thumbnail('medium'); ?>
                                    </div>
                                
                                    <?php echo  get_the_excerpt(); ?>
                                    <a href="<?php echo  get_post_permalink(); ?>">Continue reading</a>
                                    </p>
                                </div>

   
                            <?php
                        }
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