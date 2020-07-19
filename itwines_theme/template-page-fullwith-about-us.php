<?php 
/*
Template Name: Page Fullwidth About Us
*/
get_header();?>

<?php if(has_post_thumbnail()):?>
    <div class="post-hero" style='background-image: url("<?php the_post_thumbnail_url('post_image');?>"); height: 505px; background-position: center 0px; background-repeat: no-repeat; background-size: cover;' >
        
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

            <div class="col-lg-12">
        
                 <?php if(have_posts()) : while(have_posts()) : the_post() ;?>
                 <?php the_content();?>
                 <?php endwhile; else: endif; ?>
            
            </div>

            <div class="grid-container">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <!-- slider -->
<!--
                        <?php
                        print_r(get_field('about_us_gallery'));
                        
                        ?>
-->

                        <?php foreach(get_field('about_us_gallery')as $image): ?>
                            <img class="slider-slide" src="<?= $image['sizes']['medium']; ?>" />
                        <?php endforeach; ?>


                    </div>
                        <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                </div>
            </div>
        
        </div>

        
        
    </div>

</div>



<?php get_footer();?>