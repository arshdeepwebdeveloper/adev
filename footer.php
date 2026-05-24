 <!-- FOOTER START -->
        <footer class="site-footer footer-large  footer-light   footer-wide">
            
            <!-- FOOTER BLOCKES START -->  
            <div class="footer-top overlay-wraper">
                <div class="overlay-main"></div>
                <div class="container">
                    <div class="text-center">
                        <div class="footer-link">
                            <ul>
                                <li><a href="index.php" data-hover="Home">Home</a></li>
                                <li><a href="about.php" data-hover="About">About</a></li>
                                <!-- <li><a href="gallery.php" data-hover="Gallery">Gallery</a></li> -->
                                <li><a href="service.php" data-hover="Our Services">Our Services</a></li>
                                <li><a href="contact.php" data-hover="Contact Us">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <!-- ABOUT COMPANY -->

                        <div class="col-lg-4 col-md-4">  
                            <div class="widget text-center getin-touch">
                                <h4 class="widget-title">Get In Touch</h4>
                                <div class="widget-section">
                                    <ul>
                                        <li>
                                          <a href="tel:+919478447955">+91 94784-47955</br/></a>
                                          <a href="tel:+919417240657"> +91 94172-40657</a></li>
                                    </ul>
                                </div>
                            </div>
                     
                        </div> 

                        <!-- TAGS -->
                        <div class="col-lg-4 col-md-4">
                            <div class="widget text-center widget_address m-b20">
                                <h4 class="widget-title">Address</h4>
                                <div class="widget-section">
                                    <ul>
                                        <li>#19416, St No. 3, Bibi Wala Road, Dr. Bakshi Wali Gali, Bathinda-151001</li>
                                    </ul>
                                </div>
                                <div class="footer-social-icon">
                                    <ul class="social-icons f-social-link">
                                        <li><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                        <li><a href="https://telegram.me/share/url?url=https://adev.co.in/"><i class="fa-brands fa-telegram"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                                                
                        <!-- USEFUL LINKS -->
                        <div class="col-lg-4 col-md-4">
                            <div class="widget text-center">
                                <h4 class="widget-title">Email</h4>
                                <div class="widget-section">
                                    <ul>
                                        <li><a href="mailto:hardinesh@gmail.com">hardinesh@gmail.com</a></li>
                                    </ul>
                                </div>                                
                            </div>                           
                        </div>      

                        <!-- NEWSLETTER -->

                    </div>
                    
                </div>
            </div>
            <!-- FOOTER COPYRIGHT -->
            <div class="footer-bottom overlay-wraper">
                <div class="overlay-main"></div>
                <div class="container">
                    <div class="row">
                        <div class="wt-footer-bot-center">
                            <span class="copyright">© 2026 Adev Electronics. Designed By <a href="https://pacewalk.com/" target="_blank">Pacewalk</a></span>
                        </div>

                        <div class="whatsapp-link">
                            <a href="https://wa.link/f560ju" target="_blank">
                                <img src="images/whatsapp.png" alt="">
                            </a> 
                        </div> 
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->

        <!-- BUTTON TOP START -->
        <button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>
        
     
    </div>

<!-- LOADING AREA START ===== -->
<div class="loading-area">
    <div class="loading-box"></div>
    <div class="loading-pic">
        <div class="cssload-box-loading"></div>
    </div>
</div>
<!-- LOADING AREA  END ====== -->



<!-- JAVASCRIPT  FILES ========================================= --> 
<script  src="js/jquery-3.7.1.min.js"></script><!-- JQUERY.MIN JS -->
<script  src="js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script  src="js/magnific-popup.min.js"></script><!-- MAGNIFIC-POPUP JS -->
<script  src="js/waypoints.min.js"></script><!-- WAYPOINTS JS -->
<script  src="js/counterup.min.js"></script><!-- COUNTERUP JS -->
<script  src="js/waypoints-sticky.min.js"></script><!-- COUNTERUP JS -->
<script  src="js/imagesloaded.pkgd.min.js"></script><!-- MASONRY  -->
<script  src="js/isotope.pkgd.min.js"></script><!-- MASONRY  -->
<script  src="js/owl.carousel.min.js"></script><!-- OWL  SLIDER  -->
<script  src="js/jquery.owl-filter.js"></script>
<script  src="js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
<script  src="js/shortcode.js"></script><!-- SHORTCODE FUCTIONS  -->

<!-- lightbox js -->
<script  src="js/lightbox.js"></script><!-- SHORTCODE FUCTIONS  -->
<!-- <script  src="js/lightbox-plus-jquery.min.js"></script> -->


<!-- REVOLUTION JS FILES -->

<script  src="plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
<script  src="plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->    
<script  src="plugins/revolution/revolution/js/extensions/revolution-plugin.js"></script>
<script  src='plugins/revolution/revolution-addons/beforeafter/js/revolution.addon.beforeafter.min.js'></script>

<!-- REVOLUTION SLIDER SCRIPT FILES -->
<script  src="js/rev-script-2.js"></script>


<script>
$(document).ready(function() {

  var sync1 = $("#sync1");
  var sync2 = $("#sync2");
  var slidesPerPage = 4; //globaly define number of elements per page
  var syncedSecondary = true;

      sync1.owlCarousel({
        items : 1,
        slideSpeed : 2000,
        nav: true,
        autoplay: true,
        dots: false,
        loop: true,
        responsiveRefreshRate : 200,
        navText: ['<i class="flaticon-back"></i> Prev', 'Next <i class="flaticon-next"></i>'],
      }).on('changed.owl.carousel', syncPosition);

      sync2
        .on('initialized.owl.carousel', function () {
          sync2.find(".owl-item").eq(0).addClass("current");
        })
        .owlCarousel({
        items : slidesPerPage,
        dots: false,
        nav: false,
        margin:5,
        smartSpeed: 200,
        slideSpeed : 500,
        slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
        responsiveRefreshRate : 100
      }).on('changed.owl.carousel', syncPosition2);

  function syncPosition(el) {
    //if you set loop to false, you have to restore this next line
    //var current = el.item.index;
    
    //if you disable loop you have to comment this block
    var count = el.item.count-1;
    var current = Math.round(el.item.index - (el.item.count/2) - .5);
    
    if(current < 0) {
      current = count;
    }
    if(current > count) {
      current = 0;
    }
    
    //end block

    sync2
      .find(".owl-item")
      .removeClass("current")
      .eq(current)
      .addClass("current");
    var onscreen = sync2.find('.owl-item.active').length - 1;
    var start = sync2.find('.owl-item.active').first().index();
    var end = sync2.find('.owl-item.active').last().index();
    
    if (current > end) {
      sync2.data('owl.carousel').to(current, 100, true);
    }
    if (current < start) {
      sync2.data('owl.carousel').to(current - onscreen, 100, true);
    }
  }
  
  function syncPosition2(el) {
    if(syncedSecondary) {
      var number = el.item.index;
      sync1.data('owl.carousel').to(number, 100, true);
    }
  }
  
  sync2.on("click", ".owl-item", function(e){
    e.preventDefault();
    var number = $(this).index();
    sync1.data('owl.carousel').to(number, 300, true);
  });
});
</script>


<!-- lightbox code  -->
        <script>
    let slideIndex = 1;
    showSlide(slideIndex);
    
    function openLightbox() {
      document.getElementById('Lightbox').style.display = 'block';
    };
    
    function closeLightbox() {
      document.getElementById('Lightbox').style.display = 'none';
    };
    
    function changeSlide(n) {
      showSlide(slideIndex += n);
    };
    
    function toSlide(n) {
      showSlide(slideIndex = n);
    };
    
    function showSlide(n) {
      const slides = document.getElementsByClassName('slide');
      let modalPreviews = document.getElementsByClassName('modal-preview');
    
      if (n > slides.length) {
        slideIndex = 1; 
      };
      
      if (n < 1) {
        slideIndex = slides.length;
      };
    
      for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      };
      
      for (let i = 0; i < modalPreviews.length; i++) {
        modalPreviews[i].className = modalPreviews[i].className.replace(' active', '');
      };
      
      slides[slideIndex - 1].style.display = 'block';
      modalPreviews[slideIndex - 1].className += ' active';
    };
  </script>


</body>

</html>
