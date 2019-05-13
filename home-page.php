<?php
/* Template Name: Home Template  */
get_header();


$boost_image=get_field('featured_image');
$boost_heading=get_field('heading_title');
$boost_heading_text=get_field('head_text');

$boost_reason1_heading=get_field('reason1_heading');
$boost_reason1_text=get_field('reason1_text');
$boost_reason2_heading=get_field('reason2_heading');
$boost_reason2_text=get_field('reason2_text');



$font_link=get_field('fontawesome_link');
$features_text=get_field('features_text');

?>

<section id="hero">
        <article>  
            <div class="container clearfix">
                <div class="row">
                    <div class="col-sm-5" id="hero">
                    <?php 
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    ?>

                        <img src="<?php echo $image[0]; ?>" alt="">


                    </div>

                    <div class="col-sm-7 hero-text">
                            <p class="main-text">Jintex is a web development company based on Nepal . It expertises on web development, 
                                search engiene optimization , web hosting and mobile app development. 
                            </p>
                            <div id="price-timeline">
                                <div class="price">
                                    <h5>Websitee Development </h5>
                                    <span><?php echo "$". get_post_meta(get_the_ID(),'website_development',true); ?></span>
                                </div>
                                <div class="price">
                                    <h5>Android App Development </h5>
                                    
                                    <span><?php echo "$". get_post_meta(get_the_ID(),'android_app_development',true); ?></span>
                                </div>
                                <div class="price">
                                    <h5>Search Optimization </h5>
                                    <span><?php echo "$". get_post_meta(get_the_ID(),'search_engiene',true); ?></span>
                                </div>
                            </div><!-- End price-timeline -->

                            <p> <a class="btn btn-lg btn-danger">Learn More </a></p>

                    </div>
                </div>
            </div>
        </article>
    </section >
   
    
    
    
    <!-- Boost you Business -->
    <section id="boost-business">   
        <div class="container">
            <div class="section-header">
            <h3><?php echo $boost_heading;?></h3>
            <img src="<?php echo $boost_image['url']; ?>" alt="<?php echo $boost_image['alt']; ?>" />
                
                
            </div><!-- section header end  -->
            <p class="lead">
            <?php echo $boost_heading_text; ?>
            </p>
            <div class="row">
                <div class="col-sm-6">
                   
                    <h5> <?php echo   $boost_reason1_heading; ?></h5>
                    <p><?php echo $boost_reason1_text; ?></p>
                </div>

                <div class="col-sm-6">
                        <h5><?php echo $boost_reason2_heading; ?></h5>
                        <p><?php echo $boost_reason2_text; ?></p>
                    
                    
                </div>
            </div>

        </div>
    </section>

   

    <!-- Course features -->

    <section id="features">
        <div class="container ">
            <div class="section-header">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-rocket.png" width="100px" height="100px" alt="rocket">
                <h3>Features</h3>
            </div>
            <div class="row">
                
                <?php 


// WP_Query arguments
$args = array (
	'post_type'              => 'features',
	
);

$services = new WP_Query( $args );
    if ( $services->have_posts() ) {
        while ( $services->have_posts() ) {
            $services->the_post();
        ?>            
    
    <div class="col-sm-3">
        <?php echo get_field('fontawesome_link');?>
        <h6><?php echo get_field('features_text');?></h6>
    </div>
    
    <?php    
    }
    } else {
	echo("nothing found ");
        }
    wp_reset_postdata();

?>
                
                
            </div>
        </div>
    </section>

    <!-- Testimonial -->

<section id="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-md-8 container">
                    <h3 class="text-center mb-5">Testimonials </h3>
                    
                    <?php
                    $testimonials = array (
	                'post_type'              => 'testimonails',
	
                        );

                    $testimonials = new WP_Query( $testimonials );
                    if ( $testimonials->have_posts() ) {
                        while ( $testimonials->have_posts() ) {
                            $testimonials->the_post();
                    ?> 
                    <div class="row">
                        <div class="col-md-4">
                                <img src="
                                
                                <?php echo the_field('client_photo'); ?>
                                
                                
                                ?>" width="175px" height="175px" alt="Client photo">
                            </div>

                            <div class="col-md-8">
                            <?php echo the_field('client_testimonial'); ?>
                                <hr>
                                <blockquote><?php echo the_field('client_name'); ?></blockquote>
                            </div>
                
                    </div>
                    

                    <?php    
                                    }
                                    } else {
                                    echo("nothing found ");
                                        }
                                    wp_reset_postdata();

                                ?>
                    <hr>
                    
            </div
        </div>
    </div>
</section>


   


    


     
<?php  get_footer(); ?>


