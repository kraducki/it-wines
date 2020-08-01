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
<div id="contant-contact-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                    <div class="sticky-top" style="top:50px;">
                    <?php dynamic_sidebar('about-us-sidebar');?>
                    </div>
            </div>

            <div class="col-lg-9">
                    <!-- PEOPLE -->
                    <div class="content-contact" id="content-contact-people">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <?php if(have_posts()) : while(have_posts()) : the_post() ;?>
                                    <?php echo '<div>' . get_field('about_us_people_text') . '</div>';?>
                                    <?php endwhile; else: endif; ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="grid-container">
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper">
                                                <!-- slider -->
                                                <?php  // print_r(get_field('about_us_people_gallery'));?>
                                                <?php foreach(get_field('about_us_people_gallery') as $image): ?>
                                                    <div class="swiper-slide">
                                                        <img  data-src="<?= $image['sizes']['large']; ?>" class="swiper-lazy" >
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- PLACE -->
                    <div class="content-contact" id="content-contact-place">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <?php if(have_posts()) : while(have_posts()) : the_post() ;?>
                                    <?php echo '<div>' . get_field('about_us_place_text') . '</div>';?>
                                    <?php endwhile; else: endif; ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="grid-container">
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper">
                                                <!-- slider -->
                                                <?php foreach(get_field('about_us_place_gallery') as $image): ?>
                                                    <div class="swiper-slide">
                                                        <img  data-src="<?= $image['sizes']['medium']; ?>" data-srcset="<?= $image['sizes']['medium']; ?>" class="swiper-lazy" >
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                            


                    <!-- CULTIVATION -->
                    <div class="content-contact" id="content-contact-cultivation">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <?php if(have_posts()) : while(have_posts()) : the_post() ;?>
                                    <?php echo '<div>' . get_field('about_us_cultivation_text') . '</div>';?>
                                    <?php endwhile; else: endif; ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="grid-container">
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper">
                                                <!-- slider -->
                                                <?php foreach(get_field('about_us_cultivation_gallery') as $image): ?>
                                                    <div class="swiper-slide">
                                                        <img  data-src="<?= $image['sizes']['medium']; ?>" data-srcset="<?= $image['sizes']['medium']; ?>" class="swiper-lazy" >
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- DISTRIBUTION -->
                    <div class="content-contact" id="content-contact-distribution">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <?php if(have_posts()) : while(have_posts()) : the_post() ;?>
                                    <?php echo '<div>' . get_field('about_us_distribution_text') . '</div>';?>
                                    <?php endwhile; else: endif; ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="grid-container">
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper">
                                                <!-- slider -->
                                                <?php foreach(get_field('about_us_distribution_gallery') as $image): ?>
                                                    <div class="swiper-slide">
                                                        <img  data-src="<?= $image['sizes']['medium']; ?>" data-srcset="<?= $image['sizes']['medium']; ?>" class="swiper-lazy" >
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        

                    <!-- WINE TASTING -->
                    <div class="content-contact" id="content-contact-wine-tasting">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <?php if(have_posts()) : while(have_posts()) : the_post() ;?>
                                    <?php echo '<div>' . get_field('about_us_wine_tasting_text') . '</div>';?>
                                    <?php endwhile; else: endif; ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="grid-container">
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper">
                                                <!-- slider -->
                                                <?php foreach(get_field('about_us_wine_tasting_gallery') as $image): ?>
                                                    <div class="swiper-slide">
                                                        <img  data-src="<?= $image['sizes']['medium']; ?>" data-srcset="<?= $image['sizes']['medium']; ?>" class="swiper-lazy" >
                                                        <div class="swiper-lazy-preloader"></div>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>    
        </div>
    </div>
</div>
</div>
<?php get_footer();?>