<?php
session_start();
include_once 'dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>HomePage</title>
<link href="bootstrap.min.css" rel="stylesheet" />
</head>

<style>
.row
{
	margin-top: 25px;
}
</style>

</head>
<body>

    <!-- NAVBAR
    ================================================== -->
    <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0px; border-radius: 10px;">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="homepage.php?homepage">ONLINE LIBRARY MANAGEMENT SYSTEM &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>

                </div>
				
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav ">
                        <li><a href="lib_index.php?index">Librarian Panel</a></li>
                        <li><a href="index.php?index">Member Panel</a></li>
                        <li><a href="homepage.php?homepage">About Us</a></li>
                        <li><a href="homepage.php?homepage">Contact Us</a></li>
						
						<form class="navbar-form navbar-right">
        				<input type="text" class="form-control" placeholder="Search...">
         				</form>
						
						</ul>
			
						</div>
					</div>
				</nav>
			</div>

    <!-- Use a container to wrap the slider, the purpose is to enable slider to always fit width of the wrapper while window resize -->
    <div class="container">

        <div id="slider1_container" style="display: none; position: relative; margin: 0 auto; width: 1140px; height: 442px; overflow: hidden;">

            <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;

                background-color: #000; top: 0px; left: 0px;width: 100%; height:100%;">
                </div>
                <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;

                top: 0px; left: 0px;width: 100%;height:100%;">
                </div>
            </div>

            <!-- Slides Container -->
            <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1140px; height: 442px; margin-top: 5px; border-radius: 15px;
            overflow: hidden;">
                <div>
                    <img u="image" src2="https://c1.staticflickr.com/1/130/376152628_249e3630c0_b.jpg" />
                </div>

                <div>
                    <img u="image" src2="http://nimsuniversity.org/main/wp-content/uploads/2013/07/library.jpg" />
                </div>

                <div>
                    <img u="image" src2="http://amyedelstein.com/wp-content/uploads/2014/03/Trinity-College-Library-Dublin.jpg" />
                </div>

				<div>
                    <img u="image" src2="http://synkroniciti.files.wordpress.com/2013/10/interior_view_of_stockholm_public_library-1.jpg" />
                </div>

                <div>
                    <img u="image" src2="http://25.media.tumblr.com/66afb6c63405855457f9720bdc232798/tumblr_miey6wd55T1r8b83ro2_1280.jpg" />
                </div>

				<div>
                    <img u="image" src2="http://www.miragebookmark.ch/images/bedales-memorial-library-by-george-wilson-240.jpg" />
                </div>
            </div>
            
            <style>
                .jssorb05 
				{
                    position: absolute;
                }
                
				.jssorb05 div, .jssorb05 div:hover, .jssorb05 .av 
				{
                    position: absolute;
                    width: 16px;
                    height: 16px;
                    background: url(../img/b05.png) no-repeat;
                    overflow: hidden;
                    cursor: pointer;
                }
                
				.jssorb05 div { background-position: -7px -7px; }
                .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
                .jssorb05 .av { background-position: -67px -7px; }
                .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }
            </style>
            
			<!-- bullet navigator container -->
            <div u="navigator" class="jssorb05" style="bottom: 16px; right: 6px;">
                <div u="prototype"></div>
            </div>
            <style>
                .jssora11l, .jssora11r 
				{
                    display: block;
                    position: absolute;
                    width: 37px;
                    height: 37px;
                    cursor: pointer;
                    background: url(../img/a11.png) no-repeat;
                    overflow: hidden;
                }
                
				.jssora11l { background-position: -11px -41px; }
                .jssora11r { background-position: -71px -41px; }
                .jssora11l:hover { background-position: -131px -41px; }
                .jssora11r:hover { background-position: -191px -41px; }
                .jssora11l.jssora11ldn { background-position: -251px -41px; }
                .jssora11r.jssora11rdn { background-position: -311px -41px; }
            </style>
            
			<!-- Arrow Left -->
            <span u="arrowleft" class="jssora11l" style="top: 123px; left: 8px;">
            </span>
            <!-- Arrow Right -->
            <span u="arrowright" class="jssora11r" style="top: 123px; right: 8px;">
            </span>
            <!--#endregion Arrow Navigator Skin End -->
            <a style="display: none" href="http://www.jssor.com">Bootstrap Slider</a>
        </div>
        <!-- Jssor Slider End -->
    </div>

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

 <div class="container marketing">
 <hr/>
 <h3><strong>MOST POPULAR</strong></h3>

      <!-- Three columns of text below the carousel -->
      <div class="row">

		<div class="col-lg-2">
          <img class="img-responsive" src="http://www.roger-federer-1.com/images/roger-federer/roger-federer_tennis-view-magazine.jpg" alt="Generic placeholder image" width="200" height="200">
		  <h6><strong>TENNIS VIEW</strong></h6>
		  <h6>BY JAMES MARTIN</h6>
		  
        </div><!-- /.col-lg-2 -->
	          
		<div class="col-lg-2">
          <img class="img-responsive" src="https://upload.wikimedia.org/wikipedia/en/a/a7/Harry_Potter_and_the_Chamber_of_Secrets_(US_cover).jpg" alt="Generic placeholder image" width="200" height="200">
		  
		<h6><strong>HARRY POTTER & THE CHAMBER OF SECRETS</strong></h6>
		<h6>BY J. K. ROWLING</h6>
        </div><!-- /.col-lg-2 -->
        
		<div class="col-lg-2">
          <img class="img-responsive" src="http://s.sidereel.com/tv_shows/36981/giant_2x/Vampire-Diaries-S5-vsc.jpg" alt="Generic placeholder image" width="200" height="200">
        <h6><strong>VAMPIRE DIARIES</strong></h6>
		<h6>BY L.J. SMITH</h6>
		</div><!-- /.col-lg-2 -->
        
		<div class="col-lg-2">
        <img class="img-responsive" src="http://www.controappuntoblog.org/wp-content/uploads/2013/06/Oliver-Twist-%E2%80%93-Charles-Dickens.jpg" alt="Generic placeholder image" width="200" height="200">
		<h6><strong>OLIVER TWIST</strong></h6>
		<h6>BY CHARLES DICKENS</h6>
        </div><!-- /.col-lg-2 -->
		
		<div class="col-lg-2">
        <img class="img-responsive" src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQ98gbz0wVQcIK58Ww-Sz7ITHo9HfM3uLjtLr2vg5xwiw0wlMsh" alt="Generic placeholder image" width="200" height="200">
		<h6><strong>THE TWILIGHT SAGA NEW MOON</strong></h6>
		<h6>BY STEPHENIE MEYER</h6>
        </div><!-- /.col-lg-2 -->


		<div class="col-lg-2">
        <img class="img-responsive" src="http://ecx.images-amazon.com/images/I/61415XTS9KL.jpg" alt="Generic placeholder image" width="200" height="200">
        <h6><strong>HISTORY OF THE WORLD</strong></h6>
		<h6>H. G. WELLS</h6>
		</div><!-- /.col-lg-2 -->

      </div><!-- /.row -->      

	<hr/>
	
	 <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
         <h3>WELCOME</h3>
          <p>Welcome to the Online Library Management System the place where you can get your desired books easily.<br/>
		  The library allows free and secure access to library catalogues.<br/>It provides Selective Dissemination of Information service<br/>
		  Memberships to the library are also available to the external community</p>
		<p><a class="btn btn-default" href="#" role="button">READ MORE &raquo;</a></p>		
		</div><!-- /.col-lg-4 -->
        
		<div class="col-lg-4">
          <h3>LIBRARY CATALOG</h3>
		  <ul>
		  <li>SEARCH BOOK</li>
		  <li>ADD BOOK</li>
		  <li>VIEW BOOK</li>
		  <li>ADD MEMBER</li>
		  <li>VIEW MEMBER</li>
		  <li>ISSUE BOOK</li>
		  <li>RETURN BOOK</li>
		  </ul>
          <p><a class="btn btn-default" href="#" role="button">READ MORE &raquo;</a></p>
        </div><!-- /.col-lg-4 -->

		<div class="col-lg-4">
          <h3>QUICK LINKS</h3>
          <p>we have different kind of books available for the readers and they can read any book they want.</p>
        <p><a class="btn btn-default" href="#" role="button">READ MORE &raquo;</a></p>
		</div><!-- /.col-lg-4 -->
        
      </div><!-- /.row -->

	<hr/>
	
			 <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-3">
         <h3>ASK A LIBRARIAN </h3>
          <p>Online consultation. <br/>If you face any kind of problem you can simply contact the librarian to get your issues resolved.</p>
		<p><a class="btn btn-default" href="#" role="button">READ MORE &raquo;</a></p>		
		</div><!-- /.col-lg-4 -->
        
		<div class="col-lg-3">
          <h3>INNOVATIONS</h3>
		  <p>Internet access and digital services</p>
          <p><a class="btn btn-default" href="#" role="button">READ MORE &raquo;</a></p>
        </div><!-- /.col-lg-4 -->

		<div class="col-lg-3">
          <h3>JOIN LIBRARY</h3>
          <p>How to get the library card? <br/>Become a member at any moment to access the facilities provided by the Library Management System.</p>
        <p><a class="btn btn-default" href="#" role="button">READ MORE &raquo;</a></p>
		</div><!-- /.col-lg-4 -->

   		 <div class="col-lg-3">
         <h3>HELP</h3>
         <p>Help with searching. <br/>Read the help manual to get familiar with the things so that you do not face any problem.</p>
		<p><a class="btn btn-default" href="#" role="button">READ MORE &raquo;</a></p>		
		</div><!-- /.col-lg-4 -->
		
      </div><!-- /.row -->

	<hr/>
	  
      </div>  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../js/jquery-1.9.1.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="ie10-viewport-bug-workaround.js"></script>

    <!-- jssor slider scripts-->
    <!-- use jssor.js + jssor.slider.js instead for development -->
    <!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
    <script type="text/javascript" src="../js/jssor.slider.mini.js"></script>
    <script>

        jQuery(document).ready(function ($) {
            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $AutoPlayInterval: 2000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
                $SlideDuration: 800,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Scale: false                                   //Scales bullets navigator or not while slider scale
                },

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 12,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 4,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1,                                //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                    $Scale: false                                   //Scales bullets navigator or not while slider scale
                }
            };

            //Make the element 'slider1_container' visible before initialize jssor slider.
            $("#slider1_container").css("display", "block");
            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth) {
                    jssor_slider1.$ScaleWidth(parentWidth - 30);
                }
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>

</body>
</html>
