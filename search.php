<?php 

get_header();
?>

    <section id="blog">
        <div class="container">
        <h3>Search Results </h3>
            <div class="row">
               
                <div class="col-md-8">
                <?php
                       
                    if(have_posts() ) {
                    while(have_posts() ) {
                       the_post();
                            ?>  
                              <div class="blog-post">
                                    <h3><?php echo the_title(); ?></h3>
                                    <hr>
                                    
                                <p> 
                                    <div>

                                    
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
                    
                    <div class="blog-post">
                        <h5>Join our mailing list</h5>
                        <p>Keep and Upto date with our program and find more about offers and resorces
                        </p> 
                        <a href="" class="btn btn-lg btn-success ">Click Here to Subscribe</a>
                    </div>
                    
                    <?php if ( dynamic_sidebar('sidebar-1') ) : else : endif; ?>
                
                </div>
            </div>
        </div>

        
    </section>


    <?php
get_footer();
    ?>