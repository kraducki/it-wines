<?php 
/*
Template Name: Page Fullwidth
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

            <div class="col-lg-12">
        
                 <?php if(have_posts()) : while(have_posts()) : the_post() ;?>
                 <?php the_content();?>
                 <?php endwhile; else: endif; ?>
            
            </div>
        
        </div>

        
        
    </div>

</div>



<?php get_footer();?>