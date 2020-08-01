<?php




//Add CSS
function load_stylesheets() {
    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', '', 1, 'all');
    wp_enqueue_style('stylesheet');

    wp_register_style('custom', get_template_directory_uri() . '/app.css', '', 1, 'all');
    wp_enqueue_style('custom');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');



//Add fonts
function custom_add_google_fonts() {
    wp_enqueue_style( 'google_web_fonts', 'https://fonts.googleapis.com/css2?family=Lustria&family=Raleway:wght@400;700',[], null  );
}
add_action('wp_enqueue_scripts', 'custom_add_google_fonts');

// function custom_add_google_fonts_Raleway() {
//     wp_enqueue_style( 'google_web_fonts', 'https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap', false );
// }
// add_action('wp_enqueue_scripts', 'custom_add_google_fonts_Raleway');


// //Add FA
// function wpb_load_fa() {
//     wp_enqueue_style( 'wpb-fa', get_stylesheet_directory_uri() . '/src/fonts/fontawesome.min.css' );
// }
// add_action( 'wp_enqueue_scripts', 'wpb_load_fa' );



//Add JS
function add_javascript() {
    wp_register_script('custom', get_template_directory_uri() . '/app.js', 'jquery', 1, true);
    wp_register_script('slick', get_template_directory_uri() . '/src/slick.js', 'jquery', 1, true);
    if ( is_front_page()) {
        wp_enqueue_script('slick');
     }
    wp_enqueue_script('custom');
         

}
add_action('wp_enqueue_scripts', 'add_javascript');





//Support for menus
add_theme_support('menus');
add_theme_support('post-thumbnails');
//Register menus
register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme')
    )
);


//Add image sizes
add_image_size('post_image', 1200, 628, false);
// set_post_thumbnail_size( 1200, 628, false ); 


//Add widget
//Page sidebar
register_sidebar(
    array(
        'name' => 'Page Sidebar',
        'id' => 'page-sidebar',
        'class' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
        
    )

);

//Page sidebar
register_sidebar(
    array(
        'name' => 'Blog Sidebar',
        'id' => 'blog-sidebar',
        'class' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
        
    )

);

//About Us sidebar
register_sidebar(
    array(
        'name' => 'About Us Sidebar',
        'id' => 'about-us-sidebar',
        'class' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
        
    )

);

//Woocommerce sidebar
register_sidebar(
    array(
        'name' => 'Woo Sidebar',
        'id' => 'woo-sidebar',
        'class' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
        
    )

);

//Footer sidebar
register_sidebar(
    array(
        'name' => 'Footer Menu',
        'id' => 'footer-menu',
        'class' => '',
        'before_title' => '<h5>',
        'after_title' => '</h5>',
        
    )

);

register_sidebar(
    array(
        'name' => 'Footer Menu 2',
        'id' => 'footer-menu-2',
        'class' => '',
        'before_title' => '<h5>',
        'after_title' => '</h5>',
        
    )

);


//Woocommerce
function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );



//Breadcrumbs
function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
                the_title();
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}


//Woocommerce gallery
add_action( 'after_setup_theme', 'yourtheme_setup' );
 
function yourtheme_setup() {
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}

//Woocommerce 3 columns
add_filter('loop_shop_columns', 'loop_columns', 999);
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 4; // 3 products per row
	}
}

//Woocommerce support for image sizes
add_filter( 'woocommerce_get_image_size_thumbnail', 'theme_override_woocommerce_image_size_thumbnail' );
function theme_override_woocommerce_image_size_thumbnail( $size ) {
    // Catalog images: specific size
    return array(
        'width'  => 500,
        'height' => 500,
        'crop'   => 0,
    );
}

//Woocommerce columns of related products
function woo_related_products_limit() {
    global $product;
      
      $args['posts_per_page'] = 6;
      return $args;
  }
  add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args', 20 );
    function jk_related_products_args( $args ) {
      $args['posts_per_page'] = 3; // 4 related products
      $args['columns'] = 3; // arranged in 2 columns
      return $args;
  }


 //Woocommerce custom container on archive 2 (image container)
 add_action( 'woocommerce_before_shop_loop_item', 'archive_custom_container_image' );
 function archive_custom_container_image() {
     echo '<div class="archive-custom-container-image">';
     echo '<span class="category-tick"></span>';
     
  }
 
 add_action( 'woocommerce_before_shop_loop_item_title', 'archive_custom_container_image_close' );
 function archive_custom_container_image_close() {
     echo '</div>';
  }
 

//Woocommerce custom container on archive
add_action( 'woocommerce_before_shop_loop_item_title', 'archive_custom_container' );
function archive_custom_container() {
    echo '<div class="archive-custom-container">';
 }

add_action( 'woocommerce_after_shop_loop_item', 'archive_custom_container_close' );
function archive_custom_container_close() {
    echo '</div>';
 }


add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 20 );


//Categories - first remove, then add but with nice wrapper
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );


add_action( 'woocommerce_after_single_product_summary', 'add_wrapper_to_category', 2 );
add_action( 'woocommerce_after_single_product_summary', 'woocommerce_template_single_meta', 3);
add_action( 'woocommerce_after_single_product_summary', 'close_wrapper_to_category', 2 );

function add_wrapper_to_category() {
    echo '<div class="meta-wrapper">';
 }
 function close_wrapper_to_category() {
    echo '</div">';
 }







//Woocommerce show form on out of stock product
add_action('woocommerce_single_product_summary', 'add_contact_form', 20);

function add_contact_form() {
    global $product;
    if(!$product->is_in_stock( )) {
       echo do_shortcode('[ninja_form id=1]');
    }
}

//Woocommerce display lowest price when product has multiple prices
function wc_varb_price_range( $wcv_price, $product ) {
 
    $prefix = sprintf('%s: ', __('Od', 'wcvp_range'));
 
    $wcv_reg_min_price = $product->get_variation_regular_price( 'min', true );
    $wcv_min_sale_price    = $product->get_variation_sale_price( 'min', true );
    $wcv_max_price = $product->get_variation_price( 'max', true );
    $wcv_min_price = $product->get_variation_price( 'min', true );
 
    $wcv_price = ( $wcv_min_sale_price == $wcv_reg_min_price ) ?
        wc_price( $wcv_reg_min_price ) :
        '<del>' . wc_price( $wcv_reg_min_price ) . '</del>' . '<ins>' . wc_price( $wcv_min_sale_price ) . '</ins>';
 
    return ( $wcv_min_price == $wcv_max_price ) ?
        $wcv_price :
        sprintf('%s%s', $prefix, $wcv_price);
}
 
add_filter( 'woocommerce_variable_sale_price_html', 'wc_varb_price_range', 10, 2 );
add_filter( 'woocommerce_variable_price_html', 'wc_varb_price_range', 10, 2 );


//Woocommerce quantity input
// 1. Show Buttons
  
add_action( 'woocommerce_before_add_to_cart_quantity', 'bbloomer_display_quantity_plus' );
  
function bbloomer_display_quantity_plus() {
   echo '<button type="button" class="plus" >+</button>';
}
  
add_action( 'woocommerce_after_add_to_cart_quantity', 'bbloomer_display_quantity_minus' );
  
function bbloomer_display_quantity_minus() {
   echo '<button type="button" class="minus" >-</button>';
}
 
// Note: to place minus @ left and plus @ right replace above add_actions with:
// add_action( 'woocommerce_before_add_to_cart_quantity', 'bbloomer_display_quantity_minus' );
// add_action( 'woocommerce_after_add_to_cart_quantity', 'bbloomer_display_quantity_plus' );
  
// -------------
// 2. Trigger jQuery script
  
add_action( 'wp_footer', 'bbloomer_add_cart_quantity_plus_minus' );
  
function bbloomer_add_cart_quantity_plus_minus() {
   // Only run this on the single product page
   if ( ! is_product() ) return;
   ?>
      <script type="text/javascript">
           
      jQuery(document).ready(function($){   
           
         $('form.cart').on( 'click', 'button.plus, button.minus', function() {
  
            // Get current quantity values
            var qty = $( this ).closest( 'form.cart' ).find( '.qty' );
            var val   = parseFloat(qty.val());
            var max = parseFloat(qty.attr( 'max' ));
            var min = parseFloat(qty.attr( 'min' ));
            var step = parseFloat(qty.attr( 'step' ));
  
            // Change the value if plus or minus
            if ( $( this ).is( '.plus' ) ) {
               if ( max && ( max <= val ) ) {
                  qty.val( max );
               } else {
                  qty.val( val + step );
               }
            } else {
               if ( min && ( min >= val ) ) {
                  qty.val( min );
               } else if ( val > 1 ) {
                  qty.val( val - step );
               }
            }
              
         });
           
      });
           
      </script>
   <?php
}


//WOOCOMMERCE ADD TEXT FIELD UNDER PRODUCT CATEGORY
//Najpierw dodajemy field w Adminie dla nowej kategorii
add_action( 'product_cat_add_form_fields', 'zampol_wp_editor_add', 10, 2 );
function zampol_wp_editor_add() {
    ?>
    <div class="form-field">
        <label for="seconddesc"><?php echo __( 'Opis pod produktami', 'woocommerce' ); ?></label>
       
      <?php
      $settings = array(
         'textarea_name' => 'seconddesc',
         'quicktags' => array( 'buttons' => 'em,strong,link' ),
         'tinymce' => array(
            'theme_advanced_buttons1' => 'bold,italic,strikethrough,separator,bullist,numlist,separator,blockquote,separator,justifyleft,justifycenter,justifyright,separator,link,unlink,separator,undo,redo,separator',
            'theme_advanced_buttons2' => '',
         ),
         'editor_css' => '<style>#wp-excerpt-editor-container .wp-editor-area{height:175px; width:100%;}</style>',
      );
 
      wp_editor( '', 'seconddesc', $settings );
      ?>
       
        <p class="description"><?php echo __( 'To jest blok tekstu ktory mozna umiescic POD produktami', 'woocommerce' ); ?></p>
    </div>
    <?php
}
 
// ---------------
// 2. To samo w Adminie dla edytowania kategorii
 
add_action( 'product_cat_edit_form_fields', 'zampol_wp_editor_edit', 10, 2 );
 
function zampol_wp_editor_edit( $term ) {
    $second_desc = htmlspecialchars_decode( get_woocommerce_term_meta( $term->term_id, 'seconddesc', true ) );
    ?>
    <tr class="form-field">
        <th scope="row" valign="top"><label for="second-desc"><?php echo __( 'Drugi opis', 'woocommerce' ); ?></label></th>
        <td>
            <?php
          
         $settings = array(
            'textarea_name' => 'seconddesc',
            'quicktags' => array( 'buttons' => 'em,strong,link' ),
            'tinymce' => array(
               'theme_advanced_buttons1' => 'bold,italic,strikethrough,separator,bullist,numlist,separator,blockquote,separator,justifyleft,justifycenter,justifyright,separator,link,unlink,separator,undo,redo,separator',
               'theme_advanced_buttons2' => '',
            ),
            'editor_css' => '<style>#wp-excerpt-editor-container .wp-editor-area{height:175px; width:100%;}</style>',
         );
 
         wp_editor( $second_desc, 'seconddesc', $settings );
         ?>
       
            <p class="description"><?php echo __( 'To jest blok tekstu ktory mozna umiescic POD produktami', 'woocommerce' ); ?></p>
        </td>
    </tr>
    <?php
}
 
// ---------------
// 3. Zapisywanie
 
add_action( 'edit_term', 'zampol_save_wp_editor', 10, 3 );
add_action( 'created_term', 'zampol_save_wp_editor', 10, 3 );
 
function zampol_save_wp_editor( $term_id, $tt_id = '', $taxonomy = '' ) {
   if ( isset( $_POST['seconddesc'] ) && 'product_cat' === $taxonomy ) {
      update_woocommerce_term_meta( $term_id, 'seconddesc', esc_attr( $_POST['seconddesc'] ) );
   }
}
 
// ---------------
// 4. Wyswietlaj to pole
 
add_action( 'woocommerce_after_shop_loop', 'zampol_display_wp_editor_content', 5 );
 
function zampol_display_wp_editor_content() {
   if ( is_product_taxonomy() ) {
      $term = get_queried_object();
      if ( $term && ! empty( get_woocommerce_term_meta( $term->term_id, 'seconddesc', true ) ) ) {
         echo '<p class="term-description">' . wc_format_content( htmlspecialchars_decode( get_woocommerce_term_meta( $term->term_id, 'seconddesc', true ) ) ) . '</p>';
      }
   }
}





add_action( 'woocommerce_single_product_summary', 'tabelka_produktowa_polska', 30 );
  
function tabelka_produktowa_polska() {
    if ( has_term( 'Traktorki', 'product_cat' ) ) {
echo'<table class="table">';
   echo'<tbody>';
       echo'<tr>';
           echo'<td>Moc</td>';
           echo '<td>' . get_field('moc') . '</td>';
       echo'</tr>';
       echo'<tr>';
            echo'<td>Napęd</td>';
            echo '<td>' . get_field('naped') . '</td>';
       echo'</tr>';
       echo'<tr>';
            echo'<td>Silnik</td>';
            echo '<td>' . get_field('silnik') . '</td>';
       echo'</tr>';
       echo'<tr>';
            echo'<td>Rozmiar opony przedniej</td>';
            echo '<td>' . get_field('rozmiar_opony_przedniej') . '</td>';
       echo'</tr>';
       echo'<tr>';
            echo'<td>Rozmiar opony tylnej</td>';
            echo '<td>' . get_field('rozmiar_opony_tylnej') . '</td>';
       echo'</tr>';
       echo'<tr>';
            echo'<td>Liczba biegów do przodu</td>';
            echo '<td>' . get_field('liczba_biegow_do_przodu') . '</td>';
       echo'</tr>';
       echo'<tr>';
            echo'<td>Liczba biegów do tyłu</td>';
            echo '<td>' . get_field('liczba_biegow_do_tylu') . '</td>';
        echo'</tr>';
        echo'<tr>';
            echo'<td>Liczba cylindrów</td>';
            echo '<td>' . get_field('liczba_cylindrow') . '</td>';
        echo'</tr>';
        echo'<tr>';
            echo'<td>Wałek mocy PTO</td>';
            echo '<td>' . get_field('walek_mocy_pto') . '</td>';
        echo'</tr>';
        echo'<tr>';
            echo'<td>Podnośnik</td>';
            echo '<td>' . get_field('podnosnik') . '</td>';
        echo'</tr>';
        echo'<tr>';
            echo'<td>Odłączany napęd przedniej osi</td>';
            echo '<td>' . get_field('odlaczany_naped_przedniej_osi') . '</td>';
        echo'</tr>';
        echo'<tr>';
            echo'<td>Blokada tylnego mostu</td>';
            echo '<td>' . get_field('blokada_tylnego_mostu') . '</td>';
        echo'</tr>';
        echo'<tr>';
        echo'<td>Inne</td>';
        echo '<td>' . get_field('inne') . '</td>';
    echo'</tr>';

        
   echo'</tbody>';
echo'</table>';
    }

}


//AJAX Woocommerce mini basket 
add_filter( 'woocommerce_add_to_cart_fragments', 'iconic_cart_count_fragments', 10, 1 );
 
function iconic_cart_count_fragments( $fragments ) {
    
    $fragments['span.cart-items-count'] = '<span class="cart-items-count">' . WC()->cart->get_cart_contents_count() . '</div>';
    
    return $fragments;
    
}


// //******************* */
// //TA PRZEKLETA TABELKA

// // Display Fields
// add_action('woocommerce_product_options_general_product_data', 'woocommerce_product_custom_fields');
// // Save Fields
// add_action('woocommerce_process_product_meta', 'woocommerce_product_custom_fields_save');
// function woocommerce_product_custom_fields()
// {
//     global $woocommerce, $post;
//     echo '<div class="product_custom_field">';
//     // Custom Product Text Field
//     woocommerce_wp_text_input(
//         array(
//             'id' => '_custom_product_text_field',
//             'placeholder' => 'Custom Product Text Field',
//             'label' => __('Custom Product Text Field', 'woocommerce'),
//             'desc_tip' => 'true'
//         )
//     );
//     //Custom Product Number Field
//     woocommerce_wp_text_input(
//         array(
//             'id' => '_custom_product_number_field',
//             'placeholder' => 'Custom Product Number Field',
//             'label' => __('Custom Product Number Field', 'woocommerce'),
//             'type' => 'number',
//             'custom_attributes' => array(
//                 'step' => 'any',
//                 'min' => '0'
//             )
//         )
//     );
//     //Custom Product  Textarea
//     woocommerce_wp_textarea_input(
//         array(
//             'id' => '_custom_product_textarea',
//             'placeholder' => 'Custom Product Textarea',
//             'label' => __('Custom Product Textarea', 'woocommerce')
//         )
//     );
//     echo '</div>';
// }


// function woocommerce_product_custom_fields_save($post_id)
// {
//     // Custom Product Text Field
//     $woocommerce_custom_product_text_field = $_POST['_custom_product_text_field'];
//     if (!empty($woocommerce_custom_product_text_field))
//         update_post_meta($post_id, '_custom_product_text_field', esc_attr($woocommerce_custom_product_text_field));
// // Custom Product Number Field
//     $woocommerce_custom_product_number_field = $_POST['_custom_product_number_field'];
//     if (!empty($woocommerce_custom_product_number_field))
//         update_post_meta($post_id, '_custom_product_number_field', esc_attr($woocommerce_custom_product_number_field));
// // Custom Product Textarea Field
//     $woocommerce_custom_procut_textarea = $_POST['_custom_product_textarea'];
//     if (!empty($woocommerce_custom_procut_textarea))
//         update_post_meta($post_id, '_custom_product_textarea', esc_html($woocommerce_custom_procut_textarea));
// }





// ?>
