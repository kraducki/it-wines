require('bootstrap');

(function($) {

    //   //Search in header
    //     var $findIcon = $('.dgwt-wcas-sf-wrapp');
    //     var $input = $('.dgwt-wcas-sf-wrapp input[type=search].dgwt-wcas-search-input');

    //     $findIcon.click(function(){
    //         console.log(1111);
    //         $input.css("width", "250px");
    //     });

 
    //Hamburger menu
    var menu = $('.menu');
    var button = $('#menuToggle');
    button.on('click', function(){
      menu.toggleClass('active');
    
    });

    var searchFixedBlock = $('#search-fixed-block');
    var searchIcon = $('#search-icon');
    searchIcon.on('click', function(){
        searchFixedBlock.addClass('active');
    });
    $('#search-fixed-block').on('click', function(){
        searchFixedBlock.removeClass('active');
    });
    $("#search-fixed-block input").click(function(e) {
        e.stopPropagation();
   });

    $('.front-content .woocommerce ul li.product_cat-promocje .archive-custom-container-image span.category-tick').each(function() {
        $(this).text("Promocje ");
    });
    $('.front-content .woocommerce ul li.product_cat-nowosci .archive-custom-container-image span.category-tick').each(function() {
        $(this).text("Nowości ");
    });

    // $('.product_cat-promocje').text("dasd");


    //Logos carousel
    $('.producers').slick({
      slidesToShow: 6,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 1500,
      arrows: false,
      dots: false,
      pauseOnHover: false,
      responsive: [{
          breakpoint: 768,
          settings: {
              slidesToShow: 4
          }
      }, {
          breakpoint: 520,
          settings: {
              slidesToShow: 3
          }
      }]
  });



})(jQuery);