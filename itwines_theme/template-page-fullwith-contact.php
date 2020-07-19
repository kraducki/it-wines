<?php 
/*
Template Name: Page Fullwidth Contact
*/
get_header();?>

<?php if(has_post_thumbnail()):?>
    <div class="post-hero" style='background-image: url("<?php the_post_thumbnail_url('post_image');?>"); height: 505px; background-position: center 0px; background-repeat: no-repeat;
        background-size: cover;' >
        
        <div class="post-title-wrapper">
            <div class="post-title-inner">
                 <div class="post-title-grid">
                      <h1><?php the_title();?></h1>
                 </div>
            </div>      
        </div>      
    </div>
<?php endif;?>

<div class="content">
    <div class="container">

        <div class="row">

            <div class="col-sm-12">
                <div id="contact-content">
                        <div class="contact-content-intro">
                            <h6>Information </h6>
                            <h2>Address and Contact</h2>
                            <h4>Nus quam epicuri appel lantur at sit. Mea alia etiam eu. Ei su ienctetarium fueliorum conce ptam intel.</h4>
                        </div>

                        <div class="contact-content-icons">
                            <div class="row">
                                 <div class="col-lg-6">
                                     <i class="fas fa-map-marker-alt"></i>
                                     <h6>ADDRESS</h6>
                                     <p>01 Street</p>
                                     <p>City in Spain</p>
                                     <p>another line of address</p>
                                 </div>
                                 <div class="col-lg-6">
                                     <i class="fas fa-envelope"></i>
                                     <h6>CONTACT</h6>
                                     <p>Phone : 111 222 333</p>
                                     <p>Another phone if needed</p>
                                     <p>mail@itwines.shop</p>
                                 </div>
                            </div>
                        </div>

                        
                </div>
        
                 <!-- <?php if(have_posts()) : while(have_posts()) : the_post() ;?>
                 <?php the_content();?>
                 <?php endwhile; else: endif; ?> -->
            
            </div>
        </div>
    </div>

        <div class="">
                        <div class="parallax"></div>

                        <div>
           
                        </div>
        </div>
    
    <div class="container">



        <div class="row">
            <div class="col-sm-12">
                    <div class="form-content">
                        <h6>Contact form</h6>
                        <h2>Get in touch with us</h2>
                    </div>
            </div>
        </div>

        <div class="row">
             <div class="col-sm-12">
                <div class="form">
                    <div class="form-form">
                        <?php Ninja_Forms()->display( 1 ); ?>   
                    </div>
                </div>
             </div>
        </div>
    </div>

</div>



<?php get_footer();?>