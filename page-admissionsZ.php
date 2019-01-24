<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package sjsmwebsite
 */

/*
 * Template Name: Admissions
 */

get_template_part('header-pages');

//get_header(); ?>
<div class="container">
    <div class="row">
        <main id="main-content" class="col-lg-8 col-md-8" role="main">
        <!-- Start Page Content Here-->
        
        	<div class="entry-content">
                <div class="entry-page">
                    <header class="entry-header">
                        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                    </header><!-- .entry-header -->
                    
                   <div class="container-fluid">
                       <div class="row">
                           <div class="col-lg-12 col-md-12  code-of-conduct">
<!--=========================================================================================================================-->   
<!--=========================================================================================================================-->
<h3>Admission Procedure</h3><br>
<ul>
   <li><strong>New Students/Transferees:</strong>
       <ol type="1">
            <li>Secure Application Form at the Registrar’s Office located at 1st floor of the St. Francis Building.</li>    
            <li>Submit the accomplished form with complete requirements at the Registrar’s Office.
                <ul>
                    <li>Report Card (Certified True Copy)</li>
                    <li>Certificate of Good Moral Character</li>
                    <li>Birth Certificate (Photocopy)</li>
                    <li>Baptismal Certificate (Photocopy) for Catholics</li>
                    <li>Certificate of Confirmation (for 12 yrs and above) for Catholics</li>
                </ul>
            </li>    
            <li>(Grade 6 & 4th  Year Transferees / Foreign Students) See the Principal for the preliminary interview.</li>    
            <li>Pay testing fee at the Cashier’s Office. (300.00PhP)</li>    
            <li>Get test permit at the Registrar’s Office.</li>    
            <li>Present test permit at the Guidance Office, take the entrance test, and wait for test results.</li>    
            <li>For students with special cases, see the Officer of Student Affairs (OSA) for final interview and approval of admission.</li>
            <li>Present interview and approval forms to the Registrar.</li>    
            <li>Pay tuition fees/other fees at the Cashier’s Office.</li>    
        </ol>     
   </li>
   <br>
   <li><strong>Old Students:</strong>
       <ol>
           <li>Secure Registration Form at the Registrar’s Office.</li>
           <li>Submit the accomplished Registration Form and original card to the Registrar.</li>
           <li>Proceed to the Cahier’s Office for assessment and payment of fees.</li>
           <li>Leave the registration Form to the Cashier after payment.</li>
       </ol>
   </li> 
</ul>
                         
<!--=========================================================================================================================-->   
<!--=========================================================================================================================-->   
                        </div><!-- .code of conduct -->                        
                      </div><!-- .row -->
                    </div><!-- .admin-bot -->                    

                </div>
            </div>
        <!-- Stop Page Content Here--> 
        </main><!-- #main-content -->
        
        <?php get_template_part( 'connect/sidebar', 'contacts' ); ?>
        
    </div><!-- #row -->
</div><!-- #container -->
<?php get_footer(); ?>        