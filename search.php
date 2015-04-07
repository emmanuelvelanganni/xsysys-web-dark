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
<!--<script type="text/javascript" src="jQuery/jquery-2.1.1.min.js"></script>-->
<script type="text/javascript" src="jQuery/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="jQuery/jquery.cycle.all.js"></script>
<script type="text/javascript" src="jQuery/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="css_browser_selector/css_browser_selector.js"></script>
<link rel="stylesheet" href="bootstrap_3.2.0/dist/css/bootstrap.min.css">
<script src="bootstrap_3.2.0/dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" media="screen, projection" href="stylesheets/mystyle.css">
<link rel="stylesheet" media="screen, projection" href="stylesheets/searchstyle.css">
<link rel="stylesheet" media="screen, projection" href="stylesheets/print.css">
<link rel="stylesheet" media="screen, projection" href="css_browser_selector/css_browser_selector.css">

<!--script type="text/javascript" src="jQuery/messi/messi.min.js"></script>
<link rel="stylesheet" media="screen, projection" href="jQuery/messi/messi.min.css" /-->

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
<!--[if lt IE 9]>
    <link rel="stylesheet" media="screen, projection" href="stylesheets/ie.css">
 <![endif]--> 
<title>XSYSYS Technologies Pvt. Ltd.</title>
</head>
	<body aria-busy="false" onload="searchcall()">
		<div class="main">
			<header role="banner" class="xsysys_masthead noborderborder">
				<script>
					$(document).ready(function(){
						$(".xsysys_masthead").load("header.php");
					});
				</script>
			</header>
			<div class="xsysys_main_access_cntr" role="main">
				<div id="leadspacehead" class="lead_space_head page_space_head news">
					<div class="xsysys_page_space_body news newsBG">
							<div class="header">
								<span class="glyphicon glyphicon-th"></span>&nbsp;Search
							</div>
							<div class="session">
								<h1><span class="glyphicon glyphicon-hand-right"></span>&nbsp;<span id="searched_key" style="text-transform:capitalize;"></span></h1>
							</div>
					</div>
				</div>
				<div id="xsysys_content_nav" class="xsysys_content_nav">
					<div id="xsysys_primary_tabs" class="xsysys_primary_tabs" role="navigation" aria-label="Tab Navigation">
					<!-- <span class="xsysys_access">Primary tab navigation</span> -->
					</div>
				</div>
				<div class="xsysys_social_media">
					<script>
						$(document).ready(function(){
							$('.xsysys_social_media').load('viewpage/xsysys_social_media.html');
						});
					</script>
				</div>
				<div class="feedback_float">
					<a class="feedback_link" href="feedback.php"><img src="images/ol_tab_icon_white.gif"/>&nbsp;&nbsp;&nbsp;Feedback</a>
				<script>
					$(document).ready(function(){
						$('.feedback_float .feedback_link').on({
							   mouseover: function(){$(this).closest('.feedback_float').css({'background-color':'#222222'})},
							   mouseout: function(){$(this).closest('.feedback_float').css({'background-color':'#000000'})},
							   click: function(){$(this).closest('.feedback_float').css({'background-color':'#222222'})},
						});
					});
				</script>
				</div>
				<div class="content_block">
					<div class="content pagecontent">
						<div class="xsysys_container_body">
							<div class="session_page search_session_page">
								<div id="session_body" class="search_session_body">
									<div id="page">
										<div class="search_page_body">
										<h1>Google Powered Site Search</h1>
										<form id="searchForm" name="searchForm" method="post">
											<fieldset>
												<div class="searchfield_column1">
													<input id="s" type="text" value="<?php 
																if (isset($_POST['search_id'])) {
																	$skey= $_POST['search_id']; 
																	echo $skey;
																}
																else {
																	$skey = '';
																	echo $skey;
																} ?>"/>
													<input type="submit" value="Submit" id="submitButton"/>
												</div>
												<div class="searchfield_column2">
													<div id="searchInContainer">
															<input type="radio" name="check" value="site" id="searchSite" checked />
															<label for="searchSite" id="siteNameLabel">Search</label>
															<input type="radio" name="check" value="web" id="searchWeb" />
															<label for="searchWeb">Search The Web</label>
													</div>
													<ul class="icons">
														<li class="web" title="Web Search" data-searchType="web">Web</li>
														<li class="images" title="Image Search" data-searchType="images">Images</li>
														<li class="news" title="News Search" data-searchType="news">News</li>
														<li class="videos" title="Video Search" data-searchType="video">Videos</li>
													</ul>
												</div>
											</fieldset>
										</form>
											<div id="search_results_div"></div>
										</div>
									</div>
								</div>
							</div>
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
	function searchcall() {
		var searchkey= $("#searchForm #s").val();
		if(searchkey !== "")
		{
			//new Messi('You searched for '+searchkey+'.', {title: 'Search Box', modal: true});
			//alert("You searched for "+searchkey);
			setTimeout(
			  function() 
			  {
				$("#searched_key").text(searchkey);
					$("#searchForm #s").keyup(function(){
						searchkey= $(this).val();
						$("#searched_key").text(searchkey);
					});
				$("#searchForm").trigger("submit");
			  }, 1000);
			setTimeout(
			  function() 
			  {
				$("#searchForm #s").val("");
			  }, 3000);
			/*var searchkeyval= $("#searchForm #s").val();
			searchkeyval=searchkeyval.toString();
		 	$.ajax({
				url: 'search.php',
				data: {
					'skey' : searchkeyval
				},
					success:function(data) {
					console.log(data);
				},
					error: function(errorThrown){
					console.log(errorThrown);
				}
			}); */
		}
		else {
			//new Messi('Empty', {title: 'Search Box', modal: true});
			alert("You searched for Nothing!");
		}
	}
</script>




