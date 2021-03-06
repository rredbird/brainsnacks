<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!--<link rel="icon" href="./favicon.png">-->
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div class="Card">
          <header>
            <!--<a href=".">--><img class="logo" src="./img/BrainsnacksLogo.png"><!--</a>-->
            <nav>
            	<ul>
              		<!--<a href="./about">--><li class="about">About</li><!--</a>-->
              		<!--<a href="./videos">--><li class="videos">Videos</li><!--</a>-->
              		<!--<a href="./contact">--><li class="contact">Contact</li><!--</a>-->
            	</ul>
            </nav>                         
          </header>
          <!--
          <?php
          /*
          $action=$_REQUEST['action'];
          if ($action=="")    // display the contact form 
          {
          printc('empty action');
          } 
          if ($action=="sendMessage")               // send the submitted data 
          {
          $name=$_REQUEST['name'];
          $email=$_REQUEST['email'];
          $message=$_REQUEST['message'];
          printc($name);
          if (($name=="")||($email=="")||($message==""))
          {
          echo "All fields are required, please fill <a href=\"\">the form</a> again.";
          }
          else
          {		
          $from="From: $name<$email>\r\nReturn-path: $email";
          $subject="Message sent using your contact form";
          printc($subject);
          //mail("robin.ruth.tub@gmail.com", $subject, $message, $from);
          printc('mail send');
          }
          }
          if ($action=='newsletterSubscribe') {
          	$email=$_REQUEST['email'];
          	$email .= "\r\n";
          	$filename = "../newsletter/newsletter.txt";
          	file_put_contents ( $filename , $email, FILE_APPEND);
          }
          
          function printc( $data ) {
          $output = $data;
          if ( is_array( $output ) )
          $output = implode( ',', $output);
          
          echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
          }
          */
          ?>
          -->
          <section>
          	<?php echo $content; ?>
          </section>
          <footer>
            <div class="Impressum">
              Impressum:<br>
              Clara Menzen<br>
              Bremer Stra&szlig;e 68<br>
              10551 Berlin              
            </div>
            <div class="SocialMediaWrapper">
        	    <div class="SocialMedia wiggle-me">
    	          <a href="https://www.facebook.com/brainsnacks.science/" target="_blank"><img src="./img/SocialMedia/facebook.png" class="SocialMedia"/></a>                            
	            </div>
            	<div class="SocialMedia wiggle-me">
        	      <a href="https://www.instagram.com/brainsnacks.science/" target="_blank"><img src="./img/SocialMedia/instagram.jpg" class="SocialMedia"/></a>                            
    	        </div>
	            <div class="SocialMedia wiggle-me">
            	  <a href="https://www.patreon.com/brainsnacks" target="_blank"><img src="./img/SocialMedia/patreon.png" class="SocialMedia"/></a>                            
        	    </div>
    	        <div class="SocialMedia wiggle-me">
	              <a href="https://www.youtube.com/brainsnacks" target="_blank"><img src="./img/SocialMedia/youtube.png" class="SocialMedia"/></a>                            
            	</div>
        	    <div class="SocialMedia wiggle-me">
    	          <a href="https://twitter.com/BrainSnacksNews" target="_blank"><img src="./img/SocialMedia/twitter.png" class="SocialMedia"/></a>                            
	            </div>
            </div>
          </footer>        
        </div>
        
        
        
        

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!--
        <script>
          /*
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
          */
        </script>
        -->
    </body>
</html>