<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package sjsmwebsite
 */
?>
    </div><!--#mainContent-->
    
    <footer id="theFooter" class="container-fluid" role="contentinfo">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    
                    <!--Contacts-->
                    <div class="container-fluid">
                         <div id="contactDetails" class="row">
                             <div class="col-lg-4 col-md-4">
                                 <header id="VisitUs">
                                     <h3>Our Location</h3>
                                 </header>                             
                             </div>
                             
                             <div class="col-lg-4 col-md-4">
                                 <header id="EmailUs">
                                     <h3>Email Us:</h3>
                                     <label>sjsofmactan@gmail.com</label>
                                 </header>                 
                             </div>
                             
                             <div class="col-lg-4 col-md-4">
                                 <header id="ContactUs">
                                     <h3>Contact Us:</h3>
                                     <label>340-5939/(Fax)341-2399</label>  
                                 </header>                             
                             </div>
                                                                                                                    
                         </div><!--end of row-->
                    </div><!--end of container-fluid--> 
                     
                    <!--Google Maps-->
                    <div class="container-fluid">
                        <div class="row">
                            <iframe class="col-lg-8 col-md-8" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3925.40007367002!2d124.00225599999999!3d10.309831999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a9976c9931de09%3A0xda8bf16a264dd4ee!2sSt.+Joseph+School!5e0!3m2!1sen!2sph!4v1430295234053"></iframe>
                        </div>
                    </div>
                </div>
                
                <div id="inquireHere" class="col-lg-4 col-md-4">
                    <header>
                        <h3>Drop Us a Message</h3>
                        <form id="urForm" class="container-fluid">
                            <fieldset class="row">
                                <input type="tex" id="urFullname" class="col-xs-12" placeholder="Name (Required)">
                                <input type="tex" id="urEmail" class="col-xs-12" placeholder="E-mail (Required)">
                                <input type="tex" id="urSubject" class="col-xs-12" placeholder="Subject">
                                <textarea id="urMessage" class="col-xs-12" placeholder="Message"></textarea>                                
                            </fieldset>                            
                            <!--<button class="col-lg-12 col-md-12 submitMessage" value="">Send Message</button>-->
                            <a class="col-lg-12 col-md-12 submitMessage" value="">Messaging not yet Available</a>                            
                        </form>
                    </header>
                </div>
            </div>
        </div>
    </footer>
    
   <footer id="infoFooter" class="container-fluid" role="contentinfo">
        <div class="container">
            <div class="row">
               
                <div class="col-lg-8 col-md-8">
                    <nav>
                        <ul id="footnav">
                            <li><a href="http://sjsm.edu.ph/">Home</a></li>
                            <li><a href="http://sjsm.edu.ph/blog">Events</a></li>
                            <li><a href="http://sjsm.edu.ph/about/history">About</a></li>
                            <li><a href="http://sjsm.edu.ph/academics">Academics</a></li>
                            <li><a href="http://sjsm.edu.ph/admissions">Admissions</a></li>                   
                            <li><a href="http://sjsm.edu.ph/photo-gallery">Photo Gallery</a></li>                   
                            <li><a href="http://sjsm.edu.ph/contact-us">Contact Us</a></li>                   
                            <li><a href="http://sjsm.edu.ph/sitemap">Sitemap</a></li>
                        </ul>
                    </nav>
                    
                    <div class="clearfix"></div>
                    
                    <div id="copyWright">
                        <ul>
                            <li><label>Copyright @ 2015</label> | </li>
                            <li><a href="javascript:void(0)">St. Joseph's School of Mactan</a> | </li>
                            <li><label>All Rights Reserved 2015</label></li>
                        </ul>                  
                    </div>
                </div>                
                
                <div class="col-lg-4 col-md-4">
                   <div id="FollowUs-footnav">
                       <h3>Follow and Connect with us:</h3>
                        <ul>
                            <li id="footnav-facebook"><a href="http://www.facebook.com/sjsofmactan/" target="_blank" alt="Facebook">Facebook</a></li>
                            <li id="footnav-twitter"><a href="javascript:void(0)" alt="Twitter">Twitter</a></li>
                            <li id="footnav-googlep"><a href="javascript:void(0)" alt="Google+">Google+</a></li>                            
                            <li id="footnav-instagram"><a href="javascript:void(0)" alt="Instagram">Instagram</a></li>
                        </ul>
                    </div>  
                </div>
            </div>
        </div>
    </footer>
    
    <!-- jQuery -->
    <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
    <!--<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>-->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script>window.jQuery || document.write('<script src="http://sjsm.edu.ph/wp-content/themes/sjsmwebsite/js/jquery-latest.js"><\/script>')</script><!-- \x3C -->
    
    <!-- bxSlider Easing JS file -->  
    <script type="text/javascript" src="http://sjsm.edu.ph/wp-content/themes/sjsmwebsite/jquery.bxslider/plugins/jquery.easing.1.3.js"></script>
    <!-- bxSlider Javascript file -->
    <script type="text/javascript" src="http://sjsm.edu.ph/wp-content/themes/sjsmwebsite/jquery.bxslider/jquery.bxslider.min.js"></script>    
    <!-- INFO Just include the font-smoothie script anywhere on your page and
	       you will have smooth fonts even on Windows XP. -->
    <script type="text/javascript" src="http://sjsm.edu.ph/wp-content/themes/sjsmwebsite/fontsmoothie.min.js" async></script> 
    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" src="http://sjsm.edu.ph/wp-content/themes/sjsmwebsite/js/bootstrap.min.js"></script> 
    <!--Parallax.js 1.3.1-->
    <script type="text/javascript" src="http://sjsm.edu.ph/wp-content/themes/sjsmwebsite/parallax/parallax.js"></script>
    <!--PACE Preloader JS-->
    <script type="text/javascript" src="http://sjsm.edu.ph/wp-content/themes/sjsmwebsite/js/pace.min.js"></script>
    <!--Custom JS-->
    <script type="text/javascript" src="http://sjsm.edu.ph/wp-content/themes/sjsmwebsite/js/sjsmScript.js"></script>

<?php wp_footer(); ?>

</body>
</html>
