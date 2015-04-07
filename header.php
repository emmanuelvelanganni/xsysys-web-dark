				<script type="text/javascript" src="jQuery/searchscript.js"></script>
				<div class="toolbar">
					<ul role="toolbar" aria-label="Masthead Navigation">
						<li class="country" role="presentation">
							<a role="button" href="#" id="xsysys_geo">India</a>
						</li>
						<li class="sso_block" role="presentation">
							<span class="welcome_msg">
								Welcome
							</span>
							<span class="greeting_bracket">[</span>
							<a href="#" role="button" class="sso_link">
								xsysys Sign in 
							</a>
							<span class="greeting_spliter">/</span>
							<a href="#" role="button" class="sso_link">
								Register
							</a>
							<span class="greeting_bracket">]</span>
						</li>
					</ul>
				</div>
				<div class="banner_main">
					<div class="logo_block">
						<a href="index.php" aria-label="xsysys Home Page link" class="xsysys_home_link"><img class="xsysys_logo" src="images/xsysys_horizontal1.png"/></a>
					</div>
					<script>
						$(document).ready(function(){
						  $(".logo_block").on({
							mouseover:function(){$('.xsysys_logo').attr("src","images/xsysys_horizontal_small_hover.png");},  
							mouseout:function(){$(".xsysys_logo").attr("src","images/xsysys_horizontal1.png");}, 
							focus:function(){$('.xsysys_logo').attr("src","images/xsysys_horizontal_small_hover.png");}  
						  });
						});
					</script>
					<nav>
						<div id="xsysys_navigator" class="xsysys_navigator">
							<ul role="navigation" aria-label="Site map">
								<li role="presentation">
									<a id="aboutus" role="button" href="#">About us</a>
								</li>
								<li role="presentation">
									<a id="expertise" role="button" href="#">Expertise</a>
								</li>
								<li role="presentation">
									<a id="clients" role="button" href="#">Clients</a>
								</li>
								<li role="presentation">
									<a id="careers" role="button" href="#">Careers</a>
								</li>
								<li role="presentation">
									<a id="contactus" role="button" href="#">My <span class="xsysys_style">xsysys</span></a>
								</li>
							</ul>
						</div>
					</nav>
					<div class="search_block" aria-label="xsysys search">
						<form action="search.php" class="searchform" name="search_form_main" id="search_form_main" method="post">
							<label for="searchbox"></label><input type="search" class="xsysys_search_field" id="search_id" name="search_id" value="" placeholder="Search" maxlength="100" autocomplete="on"/>	
							<input id="xsysys_search" class="xsysys_search_btn" type="submit" value="Submit">
						</form>
						<script>
							/*$(document).ready(function(){
									var searchkeyval= $('#search_id').val();
									searchkeyval=taskid.toString();
									$.ajax({
											url: 'search.php',
										data: {
											'search_id' : searchkeyval
										},
										success:function(data) {
											console.log(data);
										},
										 error: function(errorThrown){
											console.log(errorThrown);
										}
									});
							});*/
						</script>
					</div>
				</div>
				<div id="xsysys_common_menu" class="xsysys_common_menu" style="display: none; height: 1px; overflow: hidden;">
						<script>
						$(document).ready(function(){
							$('#aboutus').on('click', function(e){
								e.preventDefault();
								if($('#xsysys_common_menu').css('display') == 'none')
								{	
									$('#xsysys_common_menu').animate({'height':'294px'}, 700, 'easeOutExpo');
									$('.xsysys_main_access_cntr').animate({'margin-top':'294px'}, 700, 'easeOutExpo');
									$('#xsysys_common_menu').css({'display':'block'});
									$('#xsysys_common_menu').load('viewpage/xsysys_common_menu.html', function(){
										//$('#xsysysweb_ribbon_2_scrollable').animate({'left':'0px'}, 'slow', 'linear');
										$('#xsysysweb_ribbon_2_scrollable').css({'display':'block', 'left':'0px'});
										$('#xsysysweb_ribbonSlide_7').find('ul > li > a').attr({'tabindex':'0'});
										$('#xsysysweb_ribbonSlide_7').siblings('div.xsysys_columns').find('ul > li > a').attr({'tabindex':'-1'});
									});
								}
									//$('#xsysysweb_ribbon_2_scrollable').animate({'left':'200px'},500, "swing");
									$('#xsysysweb_ribbon_2_scrollable').animate({'left':'0px'}, 500, 'easeInOutCirc');
									$('#xsysysweb_ribbonSlide_7').find('ul > li > a').attr({'tabindex':'0'});
									$('#xsysysweb_ribbonSlide_7').siblings('div.xsysys_columns').find('ul > li > a').attr({'tabindex':'-1'});
								
							});
							$('#expertise').on('click', function(e){
								e.preventDefault();
								if($('#xsysys_common_menu').css('display') == 'none')
								{
									$('#xsysys_common_menu').css({'display':'block'});
									$('#xsysys_common_menu').animate({'height':'294px'}, 700, 'easeOutExpo');
									$('.xsysys_main_access_cntr').animate({'margin-top':'294px'}, 700, 'easeOutExpo');
									$('#xsysys_common_menu').load('viewpage/xsysys_common_menu.html', function(){
										//$('#xsysysweb_ribbon_2_scrollable').animate({'left':'-980px'}, 'slow', 'linear');
										$('#xsysysweb_ribbon_2_scrollable').css({'display':'block', 'left':'-980px'});
										$('#xsysysweb_ribbonSlide_8').find('ul > li > a').attr({'tabindex':'0'});
										$('#xsysysweb_ribbonSlide_8').siblings('div.xsysys_columns').find('ul > li > a').attr({'tabindex':'-1'});
									});
								}
								//$('#xsysysweb_ribbon_2_scrollable').animate({'left':'-200px'},500, "swing");
								$('#xsysysweb_ribbon_2_scrollable').animate({'left':'-980px'}, 500, 'easeInOutCirc');
								$('#xsysysweb_ribbonSlide_8').find('ul > li > a').attr({'tabindex':'0'});
								$('#xsysysweb_ribbonSlide_8').siblings('div.xsysys_columns').find('ul > li > a').attr({'tabindex':'-1'});
							});
							$('#clients').on('click', function(e){
								e.preventDefault();
								if($('#xsysys_common_menu').css('display') == 'none')
								{
									$('#xsysys_common_menu').css({'display':'block'});
									$('#xsysys_common_menu').animate({'height':'294px'}, 700, 'easeOutExpo');
									$('.xsysys_main_access_cntr').animate({'margin-top':'294px'}, 700, 'easeOutExpo');
									$('#xsysys_common_menu').load('viewpage/xsysys_common_menu.html', function(){
										//$('#xsysysweb_ribbon_2_scrollable').animate({'left':'-1960px'}, 'slow', 'linear');
										$('#xsysysweb_ribbon_2_scrollable').css({'display':'block', 'left':'-1960px'});
										$('#xsysysweb_ribbonSlide_9').find('ul > li > a').attr({'tabindex':'0'});
										$('#xsysysweb_ribbonSlide_9').siblings('div.xsysys_columns').find('ul > li > a').attr({'tabindex':'-1'});
									});
								}
								//$('#xsysysweb_ribbon_2_scrollable').animate({'left':'-1180px'},500, "swing");
								$('#xsysysweb_ribbon_2_scrollable').animate({'left':'-1960px'}, 500, 'easeInOutCirc');
								$('#xsysysweb_ribbonSlide_9').find('ul > li > a').attr({'tabindex':'0'});
								$('#xsysysweb_ribbonSlide_9').siblings('div.xsysys_columns').find('ul > li > a').attr({'tabindex':'-1'});
							});
							$('#careers').on('click', function(e){
								e.preventDefault();
								if($('#xsysys_common_menu').css('display') == 'none')
								{
									$('#xsysys_common_menu').css({'display':'block'});
									$('#xsysys_common_menu').animate({'height':'294px'}, 700, 'easeOutExpo');
									$('.xsysys_main_access_cntr').animate({'margin-top':'294px'}, 700, 'easeOutExpo');
									$('#xsysys_common_menu').load('viewpage/xsysys_common_menu.html', function(){
										//$('#xsysysweb_ribbon_2_scrollable').animate({'left':'-2940px'}, 'slow', 'linear');
										$('#xsysysweb_ribbon_2_scrollable').css({'display':'block', 'left':'-2940px'});
										$('#xsysysweb_ribbonSlide_10').find('ul > li > a').attr({'tabindex':'0'});
										$('#xsysysweb_ribbonSlide_10').siblings('div.xsysys_columns').find('ul > li > a').attr({'tabindex':'-1'});
									});
								}
								//$('#xsysysweb_ribbon_2_scrollable').animate({'left':'-2160px'},500, "swing");
								$('#xsysysweb_ribbon_2_scrollable').animate({'left':'-2940px'}, 500, 'easeInOutCirc');
								$('#xsysysweb_ribbonSlide_10').find('ul > li > a').attr({'tabindex':'0'});
								$('#xsysysweb_ribbonSlide_10').siblings('div.xsysys_columns').find('ul > li > a').attr({'tabindex':'-1'});
							});
							$('#contactus').on('click', function(e){
								e.preventDefault();
								if($('#xsysys_common_menu').css('display') == 'none')
								{
									$('#xsysys_common_menu').css({'display':'block'});
									$('#xsysys_common_menu').animate({'height':'294px'}, 700, 'easeOutExpo');
									$('.xsysys_main_access_cntr').animate({'margin-top':'294px'}, 700, 'easeOutExpo');
									$('#xsysys_common_menu').load('viewpage/xsysys_common_menu.html', function(){
										//$('#xsysysweb_ribbon_2_scrollable').animate({'left':'-3920px'}, 'slow', 'linear');
										$('#xsysysweb_ribbon_2_scrollable').css({'display':'block', 'left':'-3920px'});
										$('#xsysysweb_ribbonSlide_11').find('ul > li > a').attr({'tabindex':'0'});
										$('#xsysysweb_ribbonSlide_11').siblings('div.xsysys_columns').find('ul > li > a').attr({'tabindex':'-1'});
									});
								}
								//$('#xsysysweb_ribbon_2_scrollable').animate({'left':'-3140px'},500, "swing");
								$('#xsysysweb_ribbon_2_scrollable').animate({'left':'-3920px'}, 500, 'easeInOutCirc');
								$('#xsysysweb_ribbonSlide_11').find('ul > li > a').attr({'tabindex':'0'});
								$('#xsysysweb_ribbonSlide_11').siblings('div.xsysys_columns').find('ul > li > a').attr({'tabindex':'-1'});
							});
							$('#xsysys_common_menu').on('click','#xsysys_mm_close', function(e){
									e.preventDefault();
									$('#xsysys_common_menu').animate({'height':'1px'}, 700, 'easeOutExpo');
									$('.xsysys_main_access_cntr').animate({'margin-top':'0px'}, 700, 'easeOutExpo', function(){
										setTimeout(function(){ 
											$('#xsysysweb_ribbon_2_scrollable').css({'display':'none'});	
											$('#xsysys_common_menu').css({'display':'none'});
										}, 50);
									});
							});
						});
					</script>
				</div>
				<script>
					//$("#search_id").keydown(function(){
						//var cursearchtext= $(this).val();
						//alert(cursearchtext);
						//$("#s").val(cursearchtext);
					//}); 
				</script>
				<script>
					$(document).ready(function(){
						jQuery.easing.def = "string";
					});
				</script>
				