<?php
/**
 * Template Name: contact_us
 * The template for the business inquiry/contact page
 *
 * @package taiso
 */

get_header(); ?>
<link rel="stylesheet" type="text/css" href="/wp-content/themes/sho_child/css/contact_us.css">


<body>
<?php include 'navbar.php';?>
    <section class="contact" id="contact">
    
        <div class="container">
            <div class="row">
                <h1>contact</h1>
            </div>
            <div class="row">
                <div class="sub-text-line"></div>
            </div>
            <div class="row">
                <div class="sub-text link-svgline">Let us work with you to achieve <a href="#" data-gal="m_PageScroll2id" data-ps2id-offset="65">your goals<svg class="link-svgline"><use xlink:href="#svg_line"></use></svg></a> </div>
            </div>
            <div class="clear"></div>
            <div class="row">
                <h4>for questions, feel free to contact us</h4>
            </div>      
            <div class="clear"></div>
            <form name="ajax-form" id="ajax-form" action="/wp-content/themes/sho_child/mail-it.php" method="post">
               <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6  col-xs-12 data">
                    <label for="name"> 
                        <span class="error" id="err-name">please enter name</span>
                    </label>
                    <input name="name" id="name" type="text"   placeholder="Your Name: *"/>
                </div>
                
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 data">
                    <label for="email"> 
                        <span class="error" id="err-email">please enter e-mail</span>
                        <span class="error" id="err-emailvld">e-mail is not a valid format</span>
                    </label>
                    <input name="email" id="email" type="text"  placeholder="E-Mail: *"/>
                </div>
           
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 data">
                    <label for="subject"> 
                        <span class="error" id="err-subject">please enter subject</span>
                        <span class="error" id="err-subject">subject is not a valid format</span>
                    </label>
                    <input name="subject" id="subject" type="text"  placeholder="Subject: *"/>
                </div>    

            </div>


            



                 <div class="row">
                            <div class="col-lg-12 col-md-12 col-xs-12 data">
                                <label for="message"></label>
                                <textarea name="message" id="message" placeholder="Tell Us Everything"></textarea>
                            </div>

               </div>
               

                <div class="row">
                
                    <div id="button-con"><button class="send_message" id="send"><span data-hover="submit">submit</span></button></div>
                
                </div>

                <div class="clear"></div>   
                <div class="error text-align-center" id="err-form">There was a problem validating the form please check!</div>
                <div class="error text-align-center" id="err-timedout">The connection to the server timed out!</div>
                <div class="error" id="err-state"></div>
            </form> 



            <div class="clear"></div>
            <div id="ajaxsuccess">Successfully sent!!</div> 
        </div>
        
        <div class="clear"></div>

        <div class="con-detal-wrapper">
            <div class="container">
                <div class="row">
                           
                            <!-- <div class="one-third column" data-scroll-reveal="enter left move 200px over 1s after 0.2s"> -->
                            <div class="col-lg-4 col-md-4 col-sm-4  col-xs-12 data">
                                <h5>office:</h5>
                                <p>coming soon!</p>
                            </div>
                            
                            <!-- <div class="one-third column" data-scroll-reveal="enter top move 200px over 1s after 0.1s"> -->
                            <div class="col-lg-4 col-md-4 col-sm-4  col-xs-12 data ">
                                <h5>phone:</h5>
                                <p>+415 777 77 77</p>
                            </div>
                            
                           <!--  <div class="one-third column" data-scroll-reveal="enter right move 200px over 1s after 0.2s"> -->
                           <div class="col-lg-4 col-md-4 col-sm-4  col-xs-12 data">
                                <h5>e-mail:</h5>
                                <p>tt@totaltaiso.com</p>
                            </div>

                </div>
            </div>
        </div>
        
        <div class="clear"></div>
        
        
        
        
        
        
    </section>  


    <!-- end contact -->
   


<?php include 'footer.php';?>

<script>
$(document).ready(function(){
    $('.nav_link').removeClass('active');
});
</script>
    </body>
</html>

