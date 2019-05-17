<!DOCTYPE html>
  <html>
    <head>
		<!--Import Google Icon Font-->
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="home_src/css/materialize.min.css"  media="screen,projection"/>
		<style>
		    h3, h5 {
		        text-shadow: 2px 2px black;
		    }
            .slider {
                height:75vh !important;
            }
            .slides {
                height:80vh !important;
            }
            .slider .slides {
                background-color: black;
            }
            .slides > li > img {
                opacity: 0.8;
            }
            .slider .indicators .indicator-item {
                background-color: black;
                border: none;
                -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
                -moz-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
                box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
                height: 10px;
                width: 10px;
            }
            .slider .indicators .indicator-item.active {
                background-color: #ffffff;
            }
            .slider .indicators {
                bottom: 0;
                z-index: 100;
                /* text-align: left; */
            }
            body {
                display: flex;
                min-height: 100vh;
                flex-direction: column;
                background-color: black;
            }
            main {
                flex: 1 0 auto;
            }
        </style>
		<!--Let browser know website is optimized for mobile-->
		<link rel="icon" type="image/png" href="home_src/img/acode_min_black.png">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<!--Import jQuery before materialize.js-->
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="home_src/js/materialize.min.js"></script>
		<script>
            $(document).ready(function(){
                $('.slider').slider();
                $(".button-collapse").sideNav({
                    closeOnClick: true
                });
            });
		</script>
    </head>
    <body>
		<!-- MENU -->
		<header>
    		<div class="navbar-fixed">
        		<nav>
        			<div class="nav-wrapper grey darken-4">
        				<a href="#" data-activates="mobile-ver" class="button-collapse"><i class="material-icons">menu</i></a>
        				<a href="http://www.acode.cl" class="brand-logo" style="padding:10px 0 0 10px;"><img src="/home_src/img/acode_full_white.png" height="40px"></a>
        				<ul class="right hide-on-med-and-down">
        					<li style="text-align:center"><a href="index.php"><i class="small material-icons">home</i> Home</a></li>
        					<li style="text-align:center"><a href="http://inav.acode.cl"><i class="small material-icons">web</i> Projects</a></li>
        					<li style="text-align:center"><a href="http://arobert.acode.cl"><i class="small material-icons">contacts</i> Me</a></li>
        				</ul>
        			</div>
        		</nav>
    		</div>
    		<ul class="side-nav" id="mobile-ver">
			    <li><a href="index.php"><i class="small material-icons">home</i> Home</a></li>
				<li><a href="projects.php"><i class="small material-icons">web</i> Projects</a></li>
				<li><a href="http://arobert.acode.cl"><i class="small material-icons">contacts</i> Me</a></li>
			</ul>
    	</header>
    	<main>
    		<!-- CONTENT -->
    		<div class="slider">
                <ul class="slides">
                  <li>
                    <img src="/home_src/img/analize.jpg">
                    <div class="caption left-align">
                      <h3>Analyze</h3>
                      <h5 class="light grey-text text-lighten-3">We extract the core of your needs</h5>
                    </div>
                  </li>
                  <li>
                    <img src="/home_src/img/create.jpg">
                    <div class="caption left-align">
                      <h3>Create</h3>
                      <h5 class="light grey-text text-lighten-3">We build a prototype for you</h5>
                    </div>
                  </li>
                  <li>
                    <img src="/home_src/img/observe.jpg">
                    <div class="caption center-align">
                      <h3>Observe</h3>
                      <h5 class="light grey-text text-lighten-3">You are in charge of comparing the prototype with your ideas</h5>
                    </div>
                  </li>
                  <li>
                    <img src="/home_src/img/develop.jpg">
                    <div class="caption right-align">
                      <h3>Develop</h3>
                      <h5 class="light grey-text text-lighten-3">Together we reproduce the convergence of your dreams and our capabilities</h5>
                    </div>
                  </li>
                  <li>
                    <img src="/home_src/img/enjoy.jpg">
                    <div class="caption right-align">
                      <h3>Enjoy</h3>
                      <h5 class="light grey-text text-lighten-3">Get your product as you wished it was</h5>
                    </div>
                  </li>
                </ul>
            </div>
        <main>
		<!-- FOOTER -->
		<footer class="page-footer grey darken-4">
			<div class="footer-copyright black">
				<div class="container">
					<a class="grey-text text-lighten-4 right" href="http://www.acode.cl">Acode | Dev and Design as a service</a>
					<a class="grey-text text-lighten-4 right" href="people.app">IwiLink</a>
				</div>
			</div>
		</footer>
    </body>
  </html>