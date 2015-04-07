<!DOCTYPE html>
<html lang="en-IN" xml:lang="en-IN" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<meta content="xsysys Technologies is working with our clients to focus on delivering world class customer specific solutions." name="Abstract">
<meta content="software solutions, innovation, explore, software services, mobile applications, desktop applications, design, intelligent technologies, systematic change" name="Keywords">
<meta content="xsysys Technologies is working with our clients to focus on delivering world class customer specific solutions." name="Description">
<meta content="index, follow" name="Robots">
<meta content="Public" name="Security">
<meta content="IN" name="xsysys.Country">
<meta content="xsysys Technologies Pvt Ltd" name="Publisher">
<meta content="© Copyright xsysys Technologies 2014" name="CopyRights">
<meta content="Carl Dujardin/India/xsysys Technologies" name="Owner">
<meta content="3" name="menu_max_cycles">
<meta name="author" content="Emmanuel V">
<link rel="SHORTCUT ICON" href="images/xsysys_favico.png">
<!--script type="text/javascript" src="jQuery/jquery-2.1.1.min.js"></script-->
<script type="text/javascript" src="jQuery/jquery-1.11.1.min.js"></script>
<!--script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script-->
<script type="text/javascript" src="jQuery/jquery.cycle.all.js"></script>
<script type="text/javascript" src="jQuery/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="css_browser_selector/css_browser_selector.js"></script>
<link rel="stylesheet" href="bootstrap_3.2.0/dist/css/bootstrap.min.css">
<script src="bootstrap_3.2.0/dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" media="screen, projection" href="stylesheets/mystyle.css">
<link rel="stylesheet" media="screen, projection" href="stylesheets/print.css">
<link rel="stylesheet" media="screen, projection" href="css_browser_selector/css_browser_selector.css">
<!--script src="http://ie.microsoft.com/testdrive/HTML5/CompatInspector/inspector.js"></script-->
<!--
<script type="text/javascript" src="Jssor.Slider.FullPack/js/jssor.core.js"></script>
<script type="text/javascript" src="Jssor.Slider.FullPack/js/jssor.utils.js"></script>
<script type="text/javascript" src="Jssor.Slider.FullPack/js/jssor.slider.js"></script>
-->
<!--[if lt IE 9]>
		<script src="htmlshiv/dist/html5shiv.min.js"></script>
<![endif]-->
<!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
	</style>
<![endif]-->

<!--[if (gte IE 6)&(lte IE 8)]>
	<script type="text/javascript" src="jQuery/selectivizr-1.0.2/selectivizr-min.js"></script>
<![endif]--> 
<!--[if lt IE 9]>
    <link rel="stylesheet" media="screen, projection" href="stylesheets/ie.css">
 <![endif]--> 
<title>XSYSYS Technologies Pvt. Ltd.</title>
</head>
	<body aria-busy="false">
		<div class="main">
			<header role="banner" class="xsysys_masthead">
				<script>
					$(document).ready(function(){
						$(".xsysys_masthead").load("header.php");
					});
				</script>
			</header>
			<div class="xsysys_main_access_cntr" role="main">
				<div id="leadspacehead" class="lead_space_head"></div>
				<div class="content_block">
					<div class="content">
							<div id="xsysys_news_feed" class="xsysys_news_feed">
								<div id="xsysys_news_feed_inner" class="xsysys_news_feed_inner">
									<p><span>xsysys</span> News:
										<a id="xsysys_twitt" href="#"></a>
									</p>
								</div>
							</div>
							<script>
								function startworker() {
										if(typeof(Worker)!=="undefined")
										{
											if(typeof(w)=="undefined") {
												w=new Worker("webworkerscript.js");
											}
											w.onmessage=function(event) {
												document.getElementById("xsysys_twitt").innerHTML=event.data;
											};
										}
										else
										{
											document.getElementById("xsysys_twitt").innerHTML="Sorry! No Twitts...";
										}
								}
								function stopworker() {
									w.terminate();
								}
								$(document).ready(function(){
									setInterval("startworker()", 3000);
								});
							</script>
							<!--
							<article>
								<section>
									<h1>about us</h1>
									<p>Content goes here....</p>
								</section>
							</article>
							<aside>
								<section>
									<h1>some header</h1>
									<p>Content goes here....</p>
								</section>
							</aside>
							-->
						<div class="xsysys_container_body">
							<a class="xsysys_prev" href="#" style="display:none;"></a>
							<div class="xsysys_ribbon_pane">
								<div id="xsysysweb_ribbon_scrollable" class="xsysys_ribbon_section">
									<div id="xsyysy_ribbon_slide" class="xsysys_columns">
										<div class="column1 xysys_ribbon_expandable">
											<a href="publications.php">
												<img src="images/publications.png" height="98" width="318" alt="PUBLICATIONS"/>
											</a>
										</div>
									</div>
									<div id="xsyysy_ribbon_slide" class="xsysys_columns">
										<div class="column2 xysys_ribbon_expandable">
											<a href="clients.php">
												<img src="images/clients.png" height="98" width="318" alt="CLIENTS"/>
											</a>
										</div>
									</div>
									<div id="xsyysy_ribbon_slide" class="xsysys_columns">
										<div class="column3 xysys_ribbon_expandable">
											<a id="xsysys_careers_jobs">
												<img src="images/career.png" height="98" width="318" alt="CAREERS"/>
											</a>
											<script>
												$(document).ready(function(){
													$('#xsysys_careers_jobs, #xsysys_expand_careers_jobs').on({
														mouseout:function(){$("#xsysys_expand_careers_jobs").attr({'style':'display:none; opacity:0; right:0px; bottom:5px; z-index: 2000;'});},
														mouseover:function(){$("#xsysys_expand_careers_jobs").attr({'style':'display:block; opacity:0.9; right:0px; bottom:5px; z-index: 2000;'});},
														focus:function(){$("#xsysys_expand_careers_jobs").attr({'style':'display:block; opacity:0.9; right:0px; bottom:5px;z-index: 2000;'});}
													});
												});
											</script>
										</div>
									</div>
									<div id="xsyysy_ribbon_slide" class="xsysys_columns">
										<div class="column3 xysys_ribbon_expandable">
											<a href="alliances.php">
												<img src="images/alliances.png" height="98" width="318" alt="ALLIANCES"/>
											</a>
										</div>
									</div>
								</div>
							</div>
							<a class="xsysys_next" href="#"></a>
							<script>
								$(document).ready(function(){
									$('.xsysys_next').click(function(){
										$(this).css({'display':'none'});
										$('.xsysys_prev').css({'display':'block'});
										$('#xsysysweb_ribbon_scrollable').animate({'left':'-330px'},'slow','jswing');
									});
									$('.xsysys_prev').click(function(){
										$(this).css({'display':'none'});
										$('.xsysys_next').css({'display':'block'});
										$('#xsysysweb_ribbon_scrollable').animate({'left':'0px'},'slow','jswing');
									});
								});
							</script>
							<div id="xsysys_expand_careers_jobs" class="xsysys_expand_overlay" style="bottom: 5px; z-index: 2000; right: 0px; display: hidden; opacity: 0;"></div>
										<script>
											$(document).ready(function(){
												$(".xsysys_expand_overlay").load('viewpage/xsysys_jobs.php');
											});
										</script>
						</div>
					</div>
				</div>
			</div>
			<footer class="footer">
				<div id="xsysys_links" class="xsysys_links">
					<script>
						$(document).ready(function(){
							$("#xsysys_links").load('viewpage/xsysys_links.html');
						});
					</script>
				</div>
				<div id="xsysys_footer_access" class="xsysys_footer_access" role="contentinfo" aria-label="Footer">
					<ul>
						<li>
							<a href="contact.php">Contact</a>
						</li>
						<li>
							<a href="">Privacy</a>
						</li>
						<li>
							<a href="">Terms of use</a>
						</li>
						<li>
							<img title="Feedback" src="images/oo_icon.gif">
							<a href="feedback.php">Feedback</a>
						</li>
					</ul>
				</div>
				<div class="copyrights">Copyright &copy; 2015 - <span class="xsysys_style">xsysys</span> Technologies Pvt. Ltd. All Rights Reserved.</div>
			</footer>
		</div>
	</body>
</html>
<script>
	$(document).ready(function(){
		//$("#leadspacehead").load("Jssor.Slider.FullPack/demos-jquery/full-width-slider.source.html");
		$("#leadspacehead").load("controllers/slider2.html");
	});
</script>

<script>
$(document).ready(function(){
	jQuery.easing.def = "string";
});
</script>

<!--[if lt IE 9]>
<script>
/*
	$(document).ready(function(){
		//$("#leadspacehead").load("Jssor.Slider.FullPack/demos-jquery/full-width-slider.source.html");
	});
	*/
</script>
<![endif]-->


