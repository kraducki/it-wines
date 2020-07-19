<?php get_header();?>
<!-- <?php if(has_post_thumbnail()):?>
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
<?php endif;?> -->

<div class="content">
    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                 <?php woocommerce_breadcrumb(); ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 widg">
                <?php dynamic_sidebar('woo-sidebar');?>
            
            </div>
       

            <div class="col-md-9">
                
            
                <?php woocommerce_content(); ?>
            
            </div>
        
        </div>

        
        
    </div>

</div>



<?php get_footer();?>