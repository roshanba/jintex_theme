<?php
get_header();
echo("index loading");
?>

<section id="hero">
        <article>  
            <div class="container clearfix">
                <div class="row">
                    <div class="col-sm-5" id="hero">
                        <img src="assets/img/badge.png" alt="">
                    </div>

                    <div class="col-sm-7 hero-text">
                            <p class="main-text">Jintex is a web development company based on Nepal . It expertises on web development, 
                                search engiene optimization , web hosting and mobile app development. 
                            </p>
                            <div id="price-timeline">
                                <div class="price">
                                    <h5>Website Development </h5>
                                    <span>$129</span>
                                </div>
                                <div class="price">
                                    <h5>Android App Development </h5>
                                    <span>$200</span>
                                </div>
                                <div class="price">
                                    <h5>Search Optimization </h5>
                                    <span>$129</span>
                                </div>
                            </div><!-- End price-timeline -->

                            <p> <a class="btn btn-lg btn-danger">Learn More </a></p>

                    </div>
                </div>
            </div>
        </article>
    </section >
    <!-- Hero section -->
    <!-- Opt in section -->
    <section id="newsletter"> 
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                        <p>Subscribe to our newsletter. We will send something usefulllllll</p>
                </div>   
                <div class="col-sm-4">
                    <button class="btn btn-success btn-lg btn-block" data-toggle="modal"
                    data-target="#newsletter-modal">
                        Click here to Subscribe
                    </button>
                </div> 
            </div>
        </div>
    </section>
    
    <!-- Boost you Business -->
    <section id="boost-business">   
        <div class="container">
            <div class="section-header">
                <img src="assets/img/icon-boost.png" alt="Boost Business">
                <h3>How can you boost your business</h3>
            </div><!-- section header end  -->
            <p class="lead">
                Whether your already have a website or willing to make some website . There 
                are few things that abousultey make the difference !!
            </p>
            <div class="row">
                <div class="col-sm-6">
                    <h5>Make your website responsive</h5>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus aut expedita accusamus, perferendis ratione vero tempora in numquam odio doloribus unde odit reprehenderit. Explicabo provident adipisci commodi sed dolorum voluptatem.</p>
                </div>

                <div class="col-sm-6">
                        <h5>Search Engiene Optimization</h5>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus aut expedita accusamus, perferendis ratione vero tempora in numquam odio doloribus unde odit reprehenderit. Explicabo provident adipisci commodi sed dolorum voluptatem.</p>
                    
                    
                </div>
            </div>

        </div>
    </section>

   

    <!-- Course features -->

    <section id="features">
        <div class="container ">
            <div class="section-header">
                <img src="assets/img/icon-rocket.png" width="100px" height="100px" alt="rocket">
                <h3>Features</h3>
            </div>
            <div class="row">
                <div class="col-sm-3">
                        <i class="fas fa-wrench"></i>
                    <h6>30 days maintence service</h6>
                </div>
                <div class="col-sm-3">
                        <i class="far fas fa-clock"></i>
                        <h6>Delivered on time </h6>
                </div>
                <div class="col-sm-3">
                        <i class="fas fa-object-group"></i>
                        <h6>Community Centered </h6>
                </div>
                <div class="col-sm-3">
                        <i class="fas fa-calendar-alt"></i>
                        <h6>200 days Free web Hosting </h6>
                </div>

            </div>
        </div>
    </section>

    <!-- Testimonial -->

    <section id="testimonial">
        
        <div class="container">
            <div class="row">
                <div class="col-md-8 container">
                    <h3 class="text-center mb-5">Testimonials </h3>
                    <div class="row">
                        <div class="col-md-4">
                             <img src="assets/img/client1.jpg" width="175px" height="175px" alt="Client photo">
                        </div>

                        <div class="col-md-8">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis incidunt aliquid ea magni necessitatibus saepe eius, cum eveniet tempora numquam perferendis vel enim ad voluptatibus rerum sed. Eos, eaque voluptas.lorem Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet natus explicabo, totam dolore reprehenderit, iure assumenda 
                            <hr>
                            <blockquote>Parbat Thakur</blockquote>
                        </div>
            
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="assets/img/client2.jpg" width="175px" height="175px" alt="Client photo">
                        </div>
                
                        <div class="col-md-8">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis incidunt aliquid ea magni necessitatibus saepe eius, cum eveniet tempora numquam perferendis vel enim ad voluptatibus rerum sed. Eos, eaque voluptas.lorem Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta corrupti dolor, eligendi veritatis quibusdam praesentium 
                            <hr>
                            <blockquote>Nikesh  Shrestha</blockquote>
                        </div>
                    </div>
                </div
            </div>    
        </div>
       
    </section>


   


    


     <!-- Modal -->

     
     
     <div class="modal fade" id="newsletter-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
         <div class="modal-content">
           <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Subscribe to our mailinglist</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <div class="modal-body">
             <form>
               <div class="form-group">
                 <label for="recipient-name" class="col-form-label">Name:</label>
                 <input type="text" class="form-control" id="recipient-name">
               </div>
               <div class="form-group">
                 <label for="message-text" class="col-form-label">Email:</label>
                 <input type="email" class="form-control" id="recipient-email">
               </div>
             </form>
           </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
             <button type="button" class="btn btn-primary">Subscribe</button>
           </div>
         </div>
       </div>
       <hr>
       <p><small>By providing </small></p>
     </div>
<?php  get_footer(); ?>
?>

