<footer>
    <div class="container justify-content-center h-100" id="upper-footer">
        <div class="row" style="max-width:100%;">
         
           
           
            <div class="col-md-4 footer-column">
                <?php dynamic_sidebar('footer-menu');?>

                <div id="footer-socialmedia">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-instagram" aria-hidden="true"></i>
                    
                </div>
                    

            </div>
            <div class="col-md-4 footer-column">
                <img src="<?php bloginfo('template_directory');?>/images/logo350.png" style="width:220px; margin-bottom: 1em;">
            </div>
            <div class="col-md-4 footer-column" style="display: grid;">
                <?php dynamic_sidebar('footer-menu-2');?>
            </div>


        </div>
    </div>

    <!-- <div id="bottom-footer">
        <div class="footer-content">
             &copy; Zampol s.c. <?php echo date("Y"); ?>
        </div>
    </div> -->

</footer>


<?php wp_footer();?>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 2.1,
      preloadImages: false,
      lazy: true,
      watchSlidesVisibility: true,
      spaceBetween: 5,
      autoplay: {
        delay: 2000,
    },
    });
  </script>

  <script>
         (function($) {
            $('a[href*="#"]').on('click', function (e) {
            e.preventDefault()

            $('html, body').animate(
                {
                scrollTop: $($(this).attr('href')).offset().top,
                },
                500,
                'linear'
            )
            })
        })(jQuery);
  </script>

</body>
</html>