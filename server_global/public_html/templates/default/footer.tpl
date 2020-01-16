{include file="container.stop.tpl"}
<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="span12">
				<div class="extrafooter">
					<div class="row footer-widgets">
						<div class="span12" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-1">
							<h3>Statystyki</h3>
							
							<p><span class="glyphicon glyphicon-stats" aria-hidden="true"></span><font style="font-size:17px;"> Posiadamy {$user->allUsers} zarejestrowanych użytkowników. Ostatnio zarejestrował się <a href="{$engine->domain}/profile/{$user->lastUser["username"]}" style="color:{$engine->rank[$user->lastUser["rank"]]["color"]}!important">{$user->lastUser["username"]}</a>.</font></p>
							<p style="line-height:10px;"><span class="glyphicon glyphicon-user" aria-hidden="true"></span><font style="font-size:17px;"> Użytkownicy aktywni przez ostatnie 5 minut:</font></p>
								
								
								
							</b>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="span9"> 
						<div id="footer-text" style="margin: 32px 0 26px 0px;" class="footer-text"> {$engine->sitename}  © 2015 - {date(Y)} <span class="linetxt">|</span> <a href="#" title="Privacy Policy">Regulamin strony</a> </div>
					</div>
					<div class="span3">
						<div class="social-nets-wrapper">
							<ul class="social">
								<li><a href="https://www.facebook.com/serweryServ4u" title="{$engine->sitename} on Facebook"><i class="icon-facebook"></i></a></li>
								<li><a href="http://steamcommunity.com/groups/net4um" title="{$engine->sitename} on Steam"><i class="icon-steam"></i></a></li>
								<li><a href="https://www.youtube.com/c/Net4umNetOfficial" title="{$engine->sitename} on YouTube"><i class="icon-youtube"></i></a></li>
								<li><a href="https://plus.google.com/+Net4umNetOfficial" title="{$engine->sitename} on Google+"><i class="icon-google-plus"></i></a></li>
							</ul> 
						</div>
					</div>
				</div> 
			</div>
		</div>
	</div>
</footer>
 
</div>
<div id="back-top-wrapper" class="visible-desktop">
	<p id="back-top"><a href="#top"><span></span></a></p>
</div>






<script async type='text/javascript' src='{$template}/js/comment-reply.min.js?ver=4.1.8'></script>
<script async type='text/javascript' src='{$template}/js/jquery.form.min.js?ver=3.51.0-2014.06.20'></script>

<script async type="text/javascript" src="{$engine->domain}/plugins/SCEditor/minified/jquery.sceditor.bbcode.min.js"></script>


<script async type='text/javascript' src='{$template}/js/scripts-z.js?ver=4.1'></script>
<script async type='text/javascript' src='{$template}/js/superfish.js?ver=1.5.3'></script>
<script async type='text/javascript' src='{$template}/js/jquery.mobilemenu.js?ver=1.0'></script>
<script async type='text/javascript' src='{$template}/js/jquery.magnific-popup.min.js?ver=0.9.3'></script>
<script async type='text/javascript' src='{$template}/js/FlexSlider/jquery.flexslider-min.js?ver=2.2.2'></script>
<script async type='text/javascript' src='{$template}/js/jplayer.playlist.min.js?ver=2.3.0'></script>
<script async type='text/javascript' src='{$template}/js/jquery.jplayer.min.js?ver=2.6.0'></script>
<script async type='text/javascript' src='{$template}/js/device.min.js?ver=1.0.0'></script>
<script async type='text/javascript' src='{$template}/js/jquery.zaccordion.min.js?ver=2.1.0'></script>
<script async type='text/javascript' src='{$template}/js/jquery.debouncedresize.js?ver=1.0'></script>
<script async type='text/javascript' src='{$template}/js/jquery.isotope.js?ver=1.5.25'></script>
<script async type='text/javascript' src='{$template}/js/cherry-plugin.js?ver=1.2.6'></script>

<!-- Script from head -->
<script async type='text/javascript' src='{$template}/js/swfobject.js?ver=2.2-20120417'></script>
<script async type='text/javascript' src='{$template}/js/modernizr.js?ver=2.0.6'></script>
<script async type='text/javascript' src='{$template}/js/jflickrfeed.js?ver=1.0'></script>
<script async type='text/javascript' src='{$template}/js/jquery.easing.1.3.js?ver=1.3'></script>
<script async type='text/javascript' src='{$template}/js/custom.js?ver=1.0'></script>
<script async type='text/javascript' src='{$template}/js/bootstrap.min.js?ver=2.3.0'></script>
<script async type='text/javascript' src='{$template}/js/elasti-carousel/jquery.elastislide.js?ver=1.2.6'></script>
<script async type="text/javascript" src="{$template}/js/jquery.mobile.customized.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.2.0/socket.io.js"></script>
<script async type="text/javascript" src="{$config->domain}/js/client.js"></script>
{literal}

<script type="text/javascript">
	// Init navigation menu
	jQuery(function(){
	// main navigation init
		jQuery('ul.sf-menu').superfish({
			delay: 1000, // the delay in milliseconds that the mouse can remain outside a sub-menu without it closing
			animation: {
				opacity: "show",
				height: "show"
			}, // used to animate the sub-menu open
			speed: "normal", // animation speed
			autoArrows: false, // generation of arrow mark-up (for submenu)
			disableHI: true // to disable hoverIntent detection
		});

	//Zoom fix
	//IPad/IPhone
		var viewportmeta = document.querySelector && document.querySelector('meta[name="viewport"]'),
			ua = navigator.userAgent,
			gestureStart = function () {
				viewportmeta.content = "width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0";
			},
			scaleFix = function () {
				if (viewportmeta && /iPhone|iPad/.test(ua) && !/Opera Mini/.test(ua)) {
					viewportmeta.content = "width=device-width, minimum-scale=1.0, maximum-scale=1.0";
					document.addEventListener("gesturestart", gestureStart, false);
				}
			};
		scaleFix();
	})
</script>

<script>
	/* ----- HRV MOVE BACKGROUND: START ----- */
	
  	$(document).on("ready", function() {
		var i = 1;
		hrv_backgroundMove(7500000, 100000*i);
		setInterval(function() {
			i++;
			hrv_backgroundMove(7500000, 100000*i);
		}, 7500000);
	});

	function hrv_backgroundMove(time, distance) {
		$('header').animate({
			'background-position-x': distance+'px',
		}, time, 'linear');
      	return true;
	}
  
	/* ----- HRV MOVE BACKGROUND: END ----- */
</script> 
{/literal}
<!-- Scripts -->


 
	<link rel="stylesheet" href="{$engine->domain}/plugins/SCEditor/minified/themes/default.min.css" type="text/css" media="all" />
	<link rel="stylesheet" type="text/css" media="all" href="{$template}/css/camera.css"/>
	<link rel='stylesheet' id='flexslider-css' href='{$template}/css/flexslider.min.css?ver=2.2.0' type='text/css' media='all'/>
	<link rel='stylesheet' id='owl-carousel-css' href='{$template}/css/owl.carousel.css?ver=1.24' type='text/css' media='all'/>
	<link rel='stylesheet' id='owl-theme-css' href='{$template}/css/owl.theme.css?ver=1.24' type='text/css' media='all'/>
	<link rel='stylesheet' id='font-awesome-css' href='{$template}/css/font-awesome.min.css?ver=3.2.1' type='text/css' media='all'/>
	<link rel='stylesheet' id='cherry-plugin-css' href='{$template}/css/cherry-plugin.min.css?ver=1.2.6' type='text/css' media='all'/>
	<link rel='stylesheet' id='contact-form-7-css' href='{$template}/css/styles.css?ver=4.1' type='text/css' media='all'/>
	<link rel='stylesheet' id='theme52906-css' href='{$template}/css/main-style.min.css' type='text/css' media='all'/>
	<link rel='stylesheet' id='magnific-popup-css' href='{$template}/css/magnific-popup.css?ver=0.9.3' type='text/css' media='all'/>
	<link rel='stylesheet' id='options_typography_Open+Sans-css' href='//fonts.googleapis.com/css?family=Open+Sans&#038;subset=latin' type='text/css' media='all'/>
	
</html>