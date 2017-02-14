<?php 
    get_header();
?>
    


    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                  
                  
                   <!--  Image won't display, need to use some php and 'echo' image to display. 
                   This looks like   
                   <img class="img-responsive" src="http://localhost:8888/wp-content/themes/WP_Bootstrap-FreelancerV3/img/profile.png" alt="">  
                   when served up -->
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/profile.png" alt="">
                    
                    <div class="intro-text">
                      
                      
                       <!-- Make the 'Site Title' text editable via WP  -->
                        <span class="name"><?php bloginfo('name'); ?></span>
                        
                        <!-- Make the tagline text editable via WP using bloginfo 'description'  -->
                        <hr class="star-light">
                        <span class="skills"><?php bloginfo('description'); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Portfolio</h2>
                    <hr class="star-primary">
                </div>
            </div>
            
            <div class="row">
            <!-- The 6 portfolio pictures used as blog pictures start here 
            They need to be in a loop for WP -->
            <?php 
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post(); 
            ?>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
                        <!-- <img src="img/portfolio/cabin.png" class="img-responsive" alt=""> -->
                    </a>
                </div>
                
             <?php endwhile; endif; ?>
                
                <!--  ***  comment out unused html *** -->
                <!--<div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/cake.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/circus.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/game.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/safe.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/submarine.png" class="img-responsive" alt="">
                    </a>
                </div>-->
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
           
           <?php 
            $args = array(
               'page_id' => '41',
            );
            
            $wp_query = new WP_Query( $args );
            
            if ( $wp_query -> have_posts() ) :
                    while ( $wp_query -> have_posts() ) : $wp_query -> the_post(); 
            ?>
            
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2><?php the_title(); ?></h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
               <?php the_content(); ?>
                <!--<div class="col-lg-4 col-lg-offset-2">
                    <p>Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.</p>
                </div>
                <div class="col-lg-4">
                    <p>Whether you're a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="#" class="btn btn-lg btn-outline">
                        <i class="fa fa-download"></i> Download Theme
                    </a>
                </div>-->
            </div>
            <?php endwhile; endif; ?>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contact Me</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    
                    <?php echo do_shortcode('[contact-form-7 id="45" title="Contact form 1"]'); ?>
                    
                    <!--<form name="sentMessage" id="contactForm" novalidate>
                        
                       <!--  This goes into 'Contact form 7' Plugins 'Form' field
                       make sure the Name, Email Address, Phone Number, Message sequence is in right order
                             
                             
                             from here --> 
                             
                        <!--<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Name</label>
                                
                                <!-- the < input > tag is replaced by the forms built in [text* your-name] tag 
                                <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        
                        
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        
                        
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        
                        
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        
                        <br>
                        
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Send</button>
                            </div>
                        </div>
                        
                        to here --> 
                    </form>
                    
                    
                </div>
            </div>
        </div>
    </section>
<?php 
    get_footer();
?>