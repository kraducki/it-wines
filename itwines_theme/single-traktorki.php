<?php get_header();?>


<div class="content">
    <div class="container">

        <div class="row">
            <div class="col-lg-3">
                <!-- <div class="sticky-top" style="top:50px;">
                <?php dynamic_sidebar('blog-sidebar');?> 
                </div> -->
               
               <div class="card">
                    <div class="card-body">
                        Kod produktu: <?php the_field('kod_produktu');?>
                        Marka: <?php the_field('marka');?>
                        Model: <?php the_field('model');?>
                    </div>
               </div>
            </div>

            <div class="col-lg-9">
            <h1>TEST</h1>
            
                <?php if(has_post_thumbnail()):?>
                <img src="<?php the_post_thumbnail_url('post_image');?>" class="img-fluid mb-5">

                <?php endif;?>

                 <h1><?php the_title();?></h1>
                 <?php if(have_posts()) : while(have_posts()) : the_post() ;?>
                 <?php the_content();?>
                 <?php endwhile; else: endif; ?>


                 <?php 

$images = get_field('galeria');
$size = 'full'; // (thumbnail, medium, large, full or custom size)

if( $images ): ?>
    <ul>
        <?php foreach( $images as $image ): ?>
            <li>
            	<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

                 <?php the_tags();?>
            
            </div>
        
        </div>

        
        
    </div>

</div>



<?php get_footer();?>