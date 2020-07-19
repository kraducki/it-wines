<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>

    <?php wp_head();?>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">


</head>
<body <?php body_class('test'); ?>>
<?php ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<header>
  <div id="upper-menu">
    <div class="container-fluid" >
      <div class="row ">
        <div class="col-sm-6 text-left">
         <a href="tel:+48531664473">+48 111 222 333</a> | email: <a href="mailto:mail@mail.com">email@itwines.shop</a>         
        </div>
        <div class="col-sm-6 text-right" id="lang-search">

          <div id="search-icon">
           <i class="fa fa-search" aria-hidden="true"></i> <span> | </span>
           <!-- <span> <?php //echo do_shortcode('[wcas-search-form]'); ?> </span> <span> | </span>  -->
          </div>

          <div id="languages">
            <span> place for languages </span>
          </div>

          <div id="search-fixed-block">
            <div id="search-input-block">
              <?php echo do_shortcode('[wcas-search-form]'); ?>
            </div>
        
          </div>
        </div>
      </div>
    </div>
  </div>
  

<div id="main-menu">
  <div class="container-fluid ">
      <div class="row ">
          <div class="col d-flex align-items-center justify-content-between">
          <a href="<?php bloginfo('url');?>">
          <img src="<?php bloginfo('template_directory');?>/images/logo350.png" class="imf-fluid logo">
          </a>
            <?php wp_nav_menu(

                array(
                    'theme_location' => 'top-menu',
                    'menu-class' => 'menu'
                  )
                ); 
            ?>

            <!--Mini cart woocommerce --> 
            <div id="mini-cart-container">
            <div id="zampol-mini-cart">
              <a href="<?php echo wc_get_cart_url(); ?>"><i class="fa fa-shopping-bag" aria-hidden="true"></i><span id="basket-caption"></span></a>
              
                <?php 
                echo '<div class="basket-item-count" style="display: inline;">';
                    echo '<span class="cart-items-count count">';
                        echo WC()->cart->get_cart_contents_count(); 
                    echo '</span>';
                echo '</div>';
                ?>
                
            </div>
            </div>

            <div id="menuToggle">
              <input type="checkbox" />
              <span></span>
              <span></span>
              <span></span>
            </div>
    

          </div>
      </div>
    
    </div>

</div>

</header>
