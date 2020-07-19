<?php get_header();?>




    <div id="hero">
    <?php echo do_shortcode('[smartslider3 slider="3"]');?>
        <!-- <div class="container d-flex align-items-center justify-content-center h-100">
            <h1>Welcome to my shop</h1>
        </div> -->
    </div>


    
<div class="front-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h6>IT WINES</h6>
                <h2>The most awarded wines </h2>
                <h4>Nusquam epicuri appellantur at sit. Mea alia etiam eu. Ei conceptam intellegat mel, ea veritus percipitur vix. Eam tritani scriptorem ei, sea persius recusabo ne, eu pri accusamus conclusionemque. Ocurreret scripserit ei vis. Eros iusto.</h4>
            </div>
        </div>
    </div>
</div>

<div class="front-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if(have_posts()) : while(have_posts()) : the_post() ;?>
                  <?php the_content();?>
                <?php endwhile; else: endif; ?>
            </div>
        </div>
    </div>
</div>
   



<?php get_footer();?>