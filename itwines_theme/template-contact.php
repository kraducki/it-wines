<?php
/*
Template Name: Kontakt
*/
get_header();?>



<div class="content">
    <div class="container">


        <!-- title-->
        <div class="row">
            <div class="col-sm-12">
            <h1><?php the_title();?></h1>
            </div>
        </div>

        <!-- address and form -->
        <div class="row">
            <div class="col-md-6">

                <?php if(have_rows('mail_i_telefon')): ?>
                    <?php while(have_rows('mail_i_telefon')): the_row(); 
                        $image = get_sub_field('ikona');
                        $picture = $image['sizes']['thumbnail'];
                        ?>
                        <div class="contact-info row">
                            <div class="contact-icon col-sm-1">
                                <img class="contact-icon-image" src="<?php echo $picture; ?>">
                            </div>
                            <div class="contact-text col-sm-11">
                                <p class="p-bold"><?php the_sub_field('wartosc'); ?></p>
                                <p><?php the_sub_field('opis'); ?></p>
                            </div>
                         </div>

                    <?php endwhile; ?>
                <?php endif; ?>


                <?php the_field("pole_tekstowe"); ?> 

                    
               
                    <!-- <div class="contact-info row">
                        <div class="contact-icon col-sm-1">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="contact-text col-sm-11">
                            <p class="p-bold">123-456-789</p>
                            <p>Zadzwon o kazdej porze</p>
                        </div>
                    </div>

                    <div class="contact-info row">
                    <div class="contact-icon col-sm-1">
                                        <i class="fa fa-phone"></i>
                                        </div>
                    <div class="contact-text col-sm-11">
                    <p class="p-bold">123-456-789</p>
                    <p>Zadzwon o kazdej porze</p>
                    <p></p></div>
                    <p></p></div>
                    <div class="contact-info row">
                    <div class="contact-icon col-sm-1">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                    <div class="contact-text col-sm-11">
                    <p class="p-bold">mail@mail.com</p>
                    <p>Zadzwon o kazdej porze</p>
                    <p></p></div>
                    <p></p></div>
                     -->





            </div>
            <div class="col-md-6">
                 <?php if(have_posts()) : while(have_posts()) : the_post() ;?>
                 <?php the_content();?>
                 <?php endwhile; else: endif; ?>
            </div>
        </div>
        
    </div>

    <div class="container-fluid">
        <div class="row">
                <!-- map-->
            <div class="col-sm-12" style="padding-left:0; padding-right:0;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25906.05547426469!2d17.03337904672723!3d51.25521887649012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470ff260cbc04871%3A0x4499dba71c22f7bc!2sZAMPOL%20-%20mini%20traktorki%20japo%C5%84skie!5e0!3m2!1spl!2spl!4v1571438367381!5m2!1spl!2spl" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>

</div>



<?php get_footer();?>