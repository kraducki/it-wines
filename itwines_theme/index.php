<?php get_header();?>

<?php if(has_post_thumbnail()):?>
    <?php 
    ?>
    <div class="post-hero" style='background-image: url("<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id("11"), 'post_image' );  echo $image[0];  ?>"); height: 505px; background-position: center 0px; background-repeat: no-repeat;
        background-size: cover;' >
<!-- 
get_post_thumbnail_id($page_id), 'single-post-thumbnail' -->
        
        <div class="post-title-wrapper">
            <div class="post-title-inner">
                 <div class="post-title-grid">
                      <h1><?php single_post_title();?></h1>
                 </div>
            </div>      
        </div>      
    </div>
<?php endif;?>


<div class="content">
    <div class="content-blog">
    <div class="container">

        <div class="row">
            <div class="col-lg-3">
                <div class="sticky-top" style="top:50px;">
                 <?php dynamic_sidebar('blog-sidebar');?>
                </div>
               
            </div>

            <div class="col-lg-9">
                 <div class="blog-posts">
                
                 <?php if(have_posts()) : while(have_posts()) : the_post() ;?>
                 
                 
                    <div class="blog-post">
                        <?php if(has_post_thumbnail()):?>
                        <a href="<?php the_permalink();?>"><img src="<?php the_post_thumbnail_url('post_image');?>" class="img-fluid mb-5"></a>

                        <?php endif;?>
                            <h4><?php
                            foreach((get_the_category()) as $category) { 
                                echo $category->cat_name . ' '; 
                            } 
                            ?></h4>
                        <a href="<?php the_permalink();?>"><h1><?php the_title();?></h1></a>
                    
                        <?php the_excerpt();?>
                    </div>
                        <?php endwhile; else: endif; ?>
                    
               
                    <div class="pagination">
                        <?php
                            global $wp_query;

                            $big = 999999999; // need an unlikely integer

                            echo paginate_links( array(
                                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                'format' => '?paged=%#%',
                                'current' => max( 1, get_query_var('paged') ),
                                'total' => $wp_query->max_num_pages
                            ) );
                        ?>
                    
                    </div>
                   


                
                    </div>
            
            </div>
        
        </div>

        
        
    </div>
    </div>
</div>



<?php get_footer();?>