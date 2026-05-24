<?php require_once("header.php");  ?>
          <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper bg-center"  style="background-image:url(images/banner-4.jpg);">
                <div class="overlay-main bg-black opacity-07"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <div class="banner-title-outer">
                            <div class="banner-title-name">
                                <h2 class="text-white">Contact Us</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="index.php">Home</a></li>
                                    <li>Contact Us</li>
                                </ul>
                            </div>
                        
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->

          <!-- SECTION CONTENTG START -->
            <div class="section-full small-device  p-tb80">
                <!-- LOCATION BLOCK-->
              
                
                <div class="section-content m-b50">
          <div class="container">
                    
                        <!-- TITLE START -->
                        <div class="section-head text-center">
                            <div class="wt-separator-outer separator-center">
                                <div class="wt-separator">
                                    <span class="site-text-primary text-uppercase sep-line-one ">Trust and recommend</span>
                                </div>
                            </div>
                            <h2>Contact Us</h2>
                        </div>                                            
                        <!-- TITLE END -->                    
                      <div class="row contact-info-section">
                            <div class="col-md-4 col-sm-12 m-b30">
                                <div class="wt-icon-box-wraper center p-lr30 p-tb50 bdr-1 bdr-gray">
                                    <div class="icon-md m-b10"><i class="flaticon-smartphone"></i></div>
                                    <div class="icon-content">
                                        <h4>Phone number</h4>
                                        <h5><a href="tel:+919478447955">+91 94784-47955</a>
                                        </br><a href="tel:+919478447955"> +91 94784-47955</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 m-b30">
                                <div class="wt-icon-box-wraper center p-lr30 p-tb50  block-shadow">
                                    <div class="icon-md  m-b10"><i class="flaticon-email"></i></div>
                                    <div class="icon-content">
                                        <h4>Email address</h4>
                                        <h5><a href="mailto:hardinesh@gmail.com">hardinesh@gmail.com</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 m-b30">
                                <div class="wt-icon-box-wraper center p-lr30 p-tb50">
                                    <div class="icon-md  m-b10"><i class="flaticon-placeholder"></i></div>
                                    <div class="icon-content">
                                        <h4>Address info</h4>
                                        <h5>#19416, St No. 3, Bibi Wala Road,Dr. Bakshi Wali Gali, Bathinda-151001</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
          </div>                    
                </div>                                  
                    <!-- GOOGLE MAP & CONTACT FORM -->
                <div class="section-content overlay-wraper ">
                    <div class="container">
                            <!-- TITLE START -->
                            <div class="section-head text-center">
                                <div class="wt-separator-outer separator-center">
                                    <div class="wt-separator">
                                        <span class="site-text-primary text-uppercase sep-line-one ">Contact Form</span>
                                    </div>
                                </div>
                                <h2>Get In Touch</h2>
                            </div>                                            
                            <!-- TITLE END -->                        
                            <form action="contact-exe.php" method="POST"  >
                                <?php if(isset($_GET['er'])==1){ echo getError($_GET['er']);}?>
                                <div class="contact-one">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input name="name" type="text" required class="form-control" placeholder="Name">
                                                <span class="spin"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input name="email" type="email" class="form-control" required placeholder="Email">
                                                <span class="spin"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input  type="text" name="phone" required class="form-control" placeholder="Phone">
                                                <span class="spin"></span>
                                            </div>
                                        </div>
                                          <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input name="subject" type="text" required class="form-control" placeholder="subject">
                                                <span class="spin"></span>
                                            </div>
                                        </div>

                                        <div class="col-md-12"> 
                                            <div class="form-group">
                                                <textarea name="message" rows="4" class="form-control " required placeholder="Message"></textarea>
                                                <span class="spin"></span>
                                            </div>
                                        </div>
                                        <div class="text-left col-md-12">
                                            <button name="submit" type="submit" value="Submit" class="site-button site-btn-effect">
                                                    Submit
                                            </button>
                                        </div>
                                    </div>
                               </div>     
                            </form>
                    </div>
               </div>
         
            <!-- SECTION CONTENT END -->
            
            </div>
        <!-- CONTENT END -->
    </div>

        <div class="">
            <div class="gmap-outline">
                <div  class="google-map-gray google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3447.794824508662!2d74.9493506!3d30.214402899999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391732bcb006b98b%3A0xf8d930f4812a4018!2sAdev%20Electronics!5e0!3m2!1sen!2sin!4v1773639612256!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3432.9325266896676!2d76.75781357426105!3d30.635859090310316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390febd52c6372bf%3A0x96b7600b9d1ab0f1!2sMohali%20City%20Centre%202!5e0!3m2!1sen!2sin!4v1722509470402!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                </div>
            </div>
        </div>
        
       <?php require_once("footer.php");  ?>