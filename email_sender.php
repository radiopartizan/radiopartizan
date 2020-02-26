<?php
/*
Package: OnAir2
Description: EMAIL SENDER
Version: 0.0.0
Author: QantumThemes
Author URI: http://qantumthemes.com
*/
?>
<?php  

/**======================================================
*
*
*
*	THIS IS THE PART TO CUSTOMIZE
*	TO SEND THE EMAIL CORRECTLY
*
*
*
* 
======================================================*/


$to      = 'your_email_here@your_provider.com'; // REPLACE WITH YOUR EMAIL ADDRESS WHERE YOU WANT TO RECEIVE THE MESSAGES
$subject = 'NEW MESSAGE FROM YOUR WEBSITE'; // CUSTOMIZE THE SUBJECT OF THE EMAIL


/////////////////////////////////////////////////////////

?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ONAIR2</title>
        <meta name="description" content="Radio station HTML template">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        
        <!-- icons -->
        <link href='fonts/dripicons/webfont.css' rel='stylesheet' type='text/css'>
        <link href='fonts/qticons/qticons.css' rel='stylesheet' type='text/css'>
        
        <!-- slick slider -->
        <link href='components/slick/slick.css' rel='stylesheet' type='text/css'>
        
        <!-- swipebox -->
        <link href='components/swipebox/src/css/swipebox.min.css' rel='stylesheet' type='text/css'>
        
        <!-- countdown component -->
        <link rel="stylesheet" type="text/css" href="components/countdown/css/jquery.classycountdown.css" />

        <!-- QT 360 PLAYER component -->
        <link rel="stylesheet" type="text/css" href="components/soundmanager/templates/qtradio-player/css/flashblock.css" />
        <link rel="stylesheet" type="text/css" href="components/soundmanager/templates/qtradio-player/css/qt-360player-volume.css" />

        
        <!-- Main css file -->
        <link rel="stylesheet" href="css/qt-main.css"><!-- INCLUDES THE CHOSEN FRAMEWORK VIA #IMPORT AND SASS -->
        
        <!-- Custom typography settings and google fonts -->
        <link rel="stylesheet" href="css/qt-typography.css">
    </head>
    <body>
    <!-- QT HEADER END ================================ -->
    <div class="qt-parentcontainer">
    <?php  
    /**
     * This is the menu ==============================================================
     */
    ?>


	<!-- QT MENUBAR TOP ================================ -->
	<div class="qt-menubar-top  qt-content-primary hide-on-large-and-down">
	    <ul>
	        <li><a href="#"><i class="dripicons-chevron-right"></i>About US</a></li>
	        <li><a href="#"><i class="dripicons-chevron-right"></i>Advertisement</a></li>
	        <li><a href="page-contacts.html"><i class="dripicons-chevron-right"></i>Contacts</a></li>
	        <li><a href="#"><i class="dripicons-chevron-right"></i>Privacy</a></li>
	        <li class="right"><a href="#"><i class="qticon-beatport qt-socialicon"></i></a></li>
	        <li class="right"><a href="#"><i class="qticon-facebook qt-socialicon"></i></a></li>
	        <li class="right"><a href="#"><i class="qticon-twitter qt-socialicon"></i></a></li>
	        <li class="right"><a href="#"><i class="qticon-youtube qt-socialicon"></i></a></li>
	        <li class="right"><a href="#"><i class="qticon-soundcloud qt-socialicon"></i></a></li>
	    </ul>
	</div>

	<!-- QT MENUBAR  ================================ -->
	<nav class="qt-menubar nav-wrapper qt-content-primary " >
	    <!-- desktop menu  HIDDEN IN MOBILE AND TABLETS -->
	    <ul class="qt-desktopmenu hide-on-xl-and-down">
	        <li class="qt-logo-link"><a href="./" class="brand-logo qt-logo-text">ONAIR<span>2</span></a></li>

	        <li><a href="page-schedule.html">Schedule</a>
	            <ul>
	                <li><a href="page-schedule.html">Archive</a></li>
	                <li><a href="single-show.html">Single show page</a></li>
	            </ul>
	        </li>
	        <li><a href="archive-podcast.html">Podcast</a>
	            <ul>
	                <li><a href="archive-podcast.html">Archive</a></li>
	                <li><a href="single-podcast.html">Single podcast page</a></li>
	            </ul>
	        </li>
	        <li><a href="archive-members.html">Team</a>
	             <ul>
	                <li><a href="archive-members.html">Archive</a></li>
	                <li><a href="single-member.html">Single member page</a></li>
	            </ul>
	        </li>
	        <li><a href="archive.html">Blog</a>
	             <ul>
	                <li><a href="archive.html">Blog archive</a></li>
	                <li><a href="single-post.html">Single post</a></li>
	            </ul>
	        </li>
	        <li><a href="archive-chart.html">Charts</a>
	            <ul>
	                <li><a href="archive-chart.html">Charts archive</a></li>
	                <li><a href="single-chart.html">Single chart</a></li>
	            </ul>
	        </li>
	        <li><a href="archive-events.html">Events</a>
	             <ul>
	                <li><a href="archive-events.html">Events archive</a></li>
	                <li><a href="single-event.html">Single event</a></li>
	            </ul>
	        </li>

	        <li><a href="page-contacts.html">Contacts</a></li>

	        <li class="right"><a href="#!" data-expandable="#qtsearchbar" class="qt-btn qt-btn-l qt-scrolltop"><i class="icon dripicons-search"></i></a></li>
	        <li class="right"><a href="page-popup.html" class="qt-popupwindow" data-name="Music Player" data-width="320" data-height="500"><i class="icon dripicons-duplicate"></i> Popup</a></li>
	        <li class="right"><a href="#!" class="button-playlistswitch" data-activates="channelslist"><i class="icon dripicons-media-play"></i> Listen</a></li>

	    </ul>
	    
	    <!-- mobile menu icon and logo VISIBLE ONLY TABLET AND MOBILE-->
	    <ul class="qt-desktopmenu hide-on-xl-only ">
	        <li><a href="#" data-activates="qt-mobile-menu" class="button-collapse qt-menu-switch qt-btn qt-btn-primary qt-btn-m"><i class="dripicons-menu"></i></a></li>
	        <li><a href="#!" class="brand-logo qt-logo-text">ONAIR2</a></li>
	    </ul>
	</nav>


	<!-- mobile menu -->
	<div id="qt-mobile-menu" class="side-nav qt-content-primary">
	       
	     <ul class=" qt-side-nav">
	        <li><a href="index.html">Home</a></li>
	        <li class="menu-item-has-children"><a href="page-schedule.html">Schedule</a>
	            <ul>
	                <li><a href="page-schedule.html">Archive</a></li>
	                <li><a href="single-show.html">Single show page</a></li>
	            </ul>
	        </li>
	        <li class="menu-item-has-children"><a href="archive-podcast.html">Podcast</a>
	            <ul>
	                <li><a href="archive-podcast.html">Archive</a></li>
	                <li><a href="single-podcast.html">Single podcast page</a></li>
	            </ul>
	        </li>
	        <li class="menu-item-has-children"><a href="archive-members.html">Team</a>
	             <ul>
	                <li><a href="archive-members.html">Archive</a></li>
	                <li><a href="single-member.html">Single member page</a></li>
	            </ul>
	        </li>
	        <li class="menu-item-has-children"><a href="archive.html">Blog</a>
	             <ul>
	                <li><a href="archive.html">Blog archive</a></li>
	                <li><a href="single-post.html">Single post</a></li>
	            </ul>
	        </li>
	        <li class="menu-item-has-children"><a href="archive-chart.html">Charts</a>
	            <ul>
	                <li><a href="archive-chart.html">Charts archive</a></li>
	                <li><a href="single-chart.html">Single chart</a></li>
	            </ul>
	        </li>
	        <li class="menu-item-has-children"><a href="archive-events.html">Events</a>
	             <ul>
	                <li><a href="archive-events.html">Events archive</a></li>
	                <li><a href="single-event.html">Single event</a></li>
	            </ul>
	        </li>

	        <li><a href="page-contacts.html">Contacts</a></li>
	    </ul>
	     
	</div>

	<!-- mobile toolbar -->
	<ul class="qt-mobile-toolbar qt-content-primary-dark qt-content-aside hide-on-large-only">
	    <li><a href="#!" data-expandable="#qtsearchbar" class="qt-scrolltop"><i class="icon dripicons-search"></i></a></li>
	    <li><a href="page-popup.html" class="qt-popupwindow" data-name="Music Player" data-width="320" data-height="500"><i class="icon dripicons-duplicate"></i></a></li>
	    <li><a href="#!" class="button-playlistswitch" data-activates="channelslist"><i class="icon dripicons-media-play"></i></a></li>
	</ul>

	 <?php  
    /**
     * Menu end ==============================================================
     */
    ?>

    <?php  
    /**
     * Search bar ==============================================================
     */
    ?>
    <!-- SEARCH FORM ========================= -->
	<div id="qtsearchbar"  class="qt-searchbar qt-content-primary qt-expandable">
		<div class="qt-expandable-inner">
			<form method="post" action="#search" class="qt-inline-form">
				<div class="row qt-nopadding">
					<div class="col s12 m8 l9">
						<input placeholder="Search" value="" id="searchtex" type="text" class="validate qt-input-l">
					</div>
					<div class="col s12 m3 l2">
						<input type="button" value="Search" class="qt-btn qt-btn-primary qt-btn-l qt-fullwidth">
					</div>
					<div class="col s12 m1 l1">
						<a href="#!" class="qt-btn qt-btn-l qt-btn-secondary qt-fullwidth aligncenter" data-expandable="#qtsearchbar"><i class="dripicons-cross"></i></a>
					</div>
				</div>
			</form>
		</div>
	</div>
	<!-- SEARCH FORM END ========================= -->

 	<?php  
    /**
     * Search bar end ==============================================================
     */
    ?>

	<div id="maincontent" class="qt-main">
		
		<div class="qt-container qt-vertical-padding-l">


			<?php  
			/*======================================================
			
			DYNAMIC EMAIL SENDING CODE

			======================================================*/
			$fields = array('privacy','first_name','last_name','email','message'); // LIST OF THE FIELDS
			$errors = ''; // ERROR MESSAGE
			// FOR EVERY FIELD WE CHECK IF IT'S COMPILED, OTHERWISE DISPLAY THE ERROR
			foreach($fields as $fieldname){
				if(!array_key_exists($fieldname, $_POST)) { // FIELD NOT EXISTING
					$errors .= $fieldname.'[#]';
				} else {
					if($_POST[$fieldname] == ''){ // OR FIELD EMPTY
						$errors .= $fieldname.'[#]';
					}
				}
			}


			if($errors != '') { // IF WE HAVE ERRORS, DISPLAY THE ERROR MESSAGE
				?>
				<div class="thankyou">
					<h2 class="qt-section-title">ERROR<i class="deco"></i></h2>
					<h4>Some fields are missing,<br>please check the data and try again</h4>
					<a href="#" onclick="goBack()" class="btn">Go Back</a>
				</div>
				<?php  
			} else { // IF ALL FIELDS ARE COMPILED LET'S GO ON
				
				$privacy = $_POST['privacy'];
				$first_name = $_POST['first_name'];
				$last_name = $_POST['last_name'];
				$email = $_POST['email'];
				$message = str_replace("\n.", "\n..",$_POST['message']);

				$headers = 'From: ' . $email . "\r\n" .
					'Reply-To: '. $email . "\r\n" .
					'X-Mailer: PHP/' . phpversion();
				mail($to, $subject, $message, $headers);
				?>
				<div class="thankyou">
					<h2 class="qt-section-title">MESSAGE SENT<i class="deco"></i></h2>
					<h4>Thank you, we will answer as soon as possible</h4>
					<a href="#"  onclick="goBack();class="btn">Go Back</a>
				</div>
				<?php  

			}

			?>

		</div>
	</div>
	<?php
	/*
	FOOTER.PHP

	Package: OnAir2
	Description: Footer of the html
	Version: 0.0.0
	Author: QantumThemes
	Author URI: http://qantumthemes.com
	*/
	?>            

        </div><?php /* Parent container open in header*/  ?>
        
        <!-- QT BODY END ================================ -->



        <!-- QT FOOTER SCRIPTS ================================ -->
        <script src="js/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script src="js/jquery.js"></script><!--  JQUERY VERSION MUST MATCH WORDPRESS ACTUAL VERSION (NOW 1.12) -->
        <script src="js/jquery-migrate.min.js"></script><!--  JQUERY VERSION MUST MATCH WORDPRESS ACTUAL VERSION (NOW 1.12) -->
       
        <!-- Framework -->
        <script src="js/materializecss/bin/materialize.min.js"></script>

        <!-- Cookies for player -->
        <script src="js/jquerycookie.js"></script>

         <!-- Slick carousel and skrollr -->
        <script src="components/slick/slick.min.js"></script>
        <script src="components/skrollr/skrollr.min.js"></script>
        
        <!-- Swipebox -->
        <script src="components/swipebox/lib/ios-orientationchange-fix.js"></script>
        <script src="components/swipebox/src/js/jquery.swipebox.min.js"></script>

        <!-- Countdown -->
        <script src="components/countdown/js/jquery.knob.js"></script>
        <script src="components/countdown/js/jquery.throttle.js"></script>
        <script src="components/countdown/js/jquery.classycountdown.min.js"></script>

        <!-- Soundmanager2 -->
        <!--[if IE]><script src="components/soundmanager/script/excanvas.js"></script><![endif]-->
        <script src="components/soundmanager/script/berniecode-animator.js"></script>
        <script src="components/soundmanager/script/soundmanager2-nodebug.js"></script>
        <script src="components/soundmanager/script/shoutcast.js"></script>
        <script src="components/soundmanager/templates/qtradio-player/script/qt-360player-volumecontroller.js"></script>

        <!-- Popup -->
        <script src="components/popup/popup.js"></script>


        <!-- MAIN JAVASCRIPT FILE ================================ -->
        <script src="js/qt-main.js"></script>

    </body>
</html>
