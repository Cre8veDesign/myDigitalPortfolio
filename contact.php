<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"

	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" >

<head>

	<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />

	<title>Cre{8}ve Design | Contact</title>

	<meta http-equiv="Content-Language" content="en-us" />

	

	<meta http-equiv="imagetoolbar" content="no" />

	<meta name="MSSmartTagsPreventParsing" content="true" />

	

	<meta name="description" content="" />

    

	<meta name="keywords" content="" />

    

    <style type="text/css" media="screen">

        @import url("style.css");	

	</style>

    <script src="js/jquery-1.2.6.pack.js" type="text/javascript"></script>

    <script src="js/submitform.js" type="text/javascript"></script>

    <!--[if lt IE 7]>

       <script type="text/javascript" src="js/supersleight-min.js"></script>

       <style type="text/css" media="screen">

       @import url("ie6.css");

           

    	</style>

        

	<![endif]--> 

    



</head>



<body>



	<div id="wrapper">

  

    	<div id="container">

      

            <!-- header -->

             <div id="header">

            

                <h1><a href="index.html">Cre(8}ve Design</a></h1>

                

                <ul class="contact">

                    <li><a class="rss" href="http://feeds.feedburner.com/DanielHughes">RSS Feed</a></li>

     <li><a class="email" href="mailto:daniel@cre8vedesign.com.com">daniel@cre8vedesign.com</a></li>

                </ul>     

                         

            	<ul id="main-menu">

                	<li><a href="index.html">home</a></li>                

                	<li><a href="portfolio.html">portfolio</a></li>

                	<li><a href="services.html">services</a></li>

                 

                    <li><a href="about.html">about {8}</a></li>

                    <li><a href="resume.html">resume</a></li>

                	<li><a id="current"  href="contact.php">contact {8}</a></li>

            	</ul>

              

   	  	  	</div>

            

   	    	<!-- end header -->

                    

            <div id="content" class="clearfix">

                  	

            	<div id="main">        

                              	

                   

                    

                    <div class="block">

                        <h2><a href="">Contact Form</a></h2>

                        

                        <!-- Verify the form in PHP -->

                        <?php include('verify.php'); ?>

                        

                        <!-- Check if any error and if the action is post, then display success message --> 

                    	<?php if(($_SERVER['REQUEST_METHOD'] == "POST") && (!isset($nameError) && !isset($emailFromError) && !isset($subjectError) && !isset($messageError))){ ?>

                        

                        <p>Your email was sent. We will get back to you soon.</p>

                        

                        <!-- Show the form --> 

                        <?php } else { ?>

                        

                        <form action="" method="post" id="sendEmail">

                            <p>Please fill the contact form below to communicate us.</p>

                            

                            <ol class="forms">

                                <li><label for="name"><span id="namel">&raquo; Name </span><?php if(isset($nameError)) echo '<span class="error">'.$nameError.'</span>'; ?></label><input type="text" name="name" id="name" value="<?= $_POST['name']; ?>" /></li>

                                <li><label for="emailFrom"><span id="emailFroml">&raquo; Email </span><?php if(isset($emailFromError)) echo '<span class="error">'.$emailFromError.'</span>'; ?></label><input type="text" name="emailFrom" id="emailFrom" value="<?= $_POST['emailFrom']; ?>" /></li>

                                <li><label for="subject"><span id="subjectl">&raquo; Subject </span><?php if(isset($subjectError)) echo '<span class="error">'.$subjectError.'</span>'; ?></label><input type="text" name="subject" id="subject" value="<?= $_POST['subject']; ?>" /></li>

                            </ol>

                                

                            <ol class="forms">

                                <li><label for="message"><span id="messagel">&raquo; Message </span><?php if(isset($messageError)) echo '<span class="error">'.$messageError.'</span>'; ?></label><textarea rows="10" cols="30" name="message" id="message"><?= $_POST['message']; ?></textarea></li>

                            </ol>

                            <div class="clear"></div>

                            <ol class="forms">

                                <li class="buttons"><button type="submit" id="submit">Send Email &raquo;</button><input type="hidden" name="submitted" id="submitted" value="true" /></li>

                            </ol>

                        </form>

                        

                        

                        <?php } ?>

                        

                        

                  </div>

  

				</div><!-- End Main-->

              	

                <div id="sidebar">

                	

                    <h2>Contact Info</h2>

                    

                    <p>Auburn, WA 98001<br />

                      <strong>tel: </strong>253 709 5026<br />

                    <strong>email: </strong>info@cre8vedesign.com</p>

<h2 class="margintop20">Services I Offer</h2>

                    <ul class="list">

                        <li><a href="">Web Design</a></li>

                        <li><a href="">Web Development</a></li>

                        <li><a href="">Web Hosting</a></li>

                        <li><a href="">Branding and Logo for business</a></li>

                        <li></li>

                    </ul>

                

                </div>

          	</div><!-- end content -->



    	</div><!-- end container -->

                    

	</div><!-- end wrapper -->

    

	<div id="footer">

     

     	<div class="footer-block">

        

        	<div id="news-footer" class="footer-inside">

            	

                   <h2>My Thoughts &raquo;</h2>

                    <ul>

                        <li><a href="http://cre8vedesign.com/blog/2011/02/best-link-strategies/" target="_blank">Best Link Strategies</a></li>

                        <li><a href="http://cre8vedesign.com/blog/2011/02/6-steps-to-deciding-on-content/" target="_blank">6 Steps to Deciding on Content</a></li>

                        <li><a href="http://cre8vedesign.com/blog/2011/02/introduction-to-dreamweaver-cs4/" target="_blank">Introduction to Dreamweaver CS4</a></li>

                        <li><a href="http://cre8vedesign.com/blog/2011/02/creating-and-editing-artboards-in-illustrator/" target="_blank">Creating and Editing Artboards in Illustrator CS4</a></li>

                        <li><a href="http://cre8vedesign.com/blog/2010/10/and-the-survey-says/" target="_blank">&quot;...and the Survey Says!&quot;</a></li>

                    </ul>

            

            

            </div>

            

            <div id="services-footer" class="footer-inside">

            	

                <h2>Services we offer &raquo;</h2>

                <ul>

                  <li><a href="">Web and Graphic Design </a></li>

                  <li><a href="">Branding &amp; Logo for business</a></li>

                  <li><a href="">Web Development</a></li>

                  <li><a href="">HTML, CSS and JQuery</a></li>

                  <li>W3C Standards Compliant</li>

                  <li></li>                    

                </ul>

            	

            </div>

            

            <div id="navigation-footer" class="footer-inside">

            	

                <h2>Site Map &raquo;</h2>

                <ul>

                  

                  <li><a href="index.html">Home - Overview of {8}</a></li>

                    <li><a href="services.html">Services - What I offer</a></li>

                    <li><a href="portfolio.html">Portfolio - Some of my stuff</a></li>

                    <li><a href="about.html">About  {8}</a> - My bio</li>

                    <li><a href="contact.php">Contact {8} - Get in touch </a></li>

                  <li></li>

                  <li></li>

                

                </ul>

                         

            </div>

           

            <div id="contact-footer" class="footer-inside">

            	

                <h2>Give me a buzz &raquo;</h2>

                <p>Auburn, Wa 98001<br />

Cell: (253) 709 5026<br />

Skype: Name here<br />

<a href="mailto: daniel@cre8vedesign.com">info@cre8vedesign.com</a><br />       

                </p>

                <p class="footer-icons"><a class="footer-rss" href="">RSS feed</a></p>

            	

            </div>

            

            <div class="clear"></div>

            

        </div><!-- end Footer-Block -->

     

     </div><!-- end Footer -->

     

</body>

</html>