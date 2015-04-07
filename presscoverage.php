<div>
		<div class="xsysys_event_list" id="presscoveragelist">
			<ul>
				<li>Press Coverage - 2005 <br/> <br/>
					<ul>
						<li>
							<a id="TOI180305" style="cursor:pointer!important;" onclick="MM_openBrWindow(this,'images/presscoverage/TimesOfIndia180305.jpg','The Times of India - March 18th, 2005',800,540);return false;">Prince Philippe plants a fastagiata sapling from Belgium.</a>
							<br/>
							<span>The Times of India, March 18, 2005</span>		
						</li>	
						<li>
							<a id="NIE170305" style="cursor:pointer!important;" onclick="MM_openBrWindow(this, 'images/presscoverage/NewIndianExpress170305.jpg','New Indian Express- March 17th, 2005 ',800,540);return false;">Belgium for diversified trade relation.</a>
							<br/>
							<span>The Indian Express, March 17, 2005</span>		
						</li>
						<li>
							<a id="TET160305" style="cursor:pointer!important;" onclick="MM_openBrWindow(this, 'images/presscoverage/TheEconomicTimes160305.jpg','The Economic Times - March 16th, 2005',800,540);return false;">Indo Belgian IT gateway launched.</a>
							<br/>
							<span>The Economic Times, March 16, 2005</span>		
						</li>		
						<li>
							<a id="TH160305"  style="cursor:pointer!important;" onclick="MM_openBrWindow(this, 'images/presscoverage/TheHindu160305.jpg','The Hindu - March 16th, 2005',800,540);return false;">Belgian Prince to open <em class="xsysys_style">xsysys</em> Tech Center.</a>
							<br/>
							<span>The Hindu, March 16, 2005</span>		
						</li>		
						<li>
							<a id="TOI160305" style="cursor:pointer!important;" onclick="MM_openBrWindow(this, 'images/presscoverage/TimesOfIndia160305.jpg','The Times of India - March 16th, 2005',800,540);return false;"><em class="xsysys_style">xsysys</em> to up head count</a>
							<br/>
							<span>The Times of India, March 16, 2005</span>		
						</li>		
						
					</ul>
				</li>
			</ul>
		</div>
			<script>
				function MM_openBrWindow(id, bigurl, winName, width, height)
					{
						var thisID= $(id).attr('id');
						if($('#'+thisID).css('cursor') == 'pointer')
						{
							var newWindow = window.open("", winName, 
								"location=no, directories=no, fullscreen=no, " + 
								"menubar=no, status=no, toolbar=no, width=" + 
								width + ", height=" + height + ", scrollbars=no");
							if(newWindow){
								newWindow.focus();
							}							
							newWindow.document.writeln("<html>");
							newWindow.document.writeln("<head><title>"+winName+"</title></head>");
							newWindow.document.writeln("<body style='margin: 0 0 0 0;'>");
							newWindow.document.writeln("<a href='javascript:window.close();'>");
							newWindow.document.writeln("<img src='" + bigurl + 
														"' alt='Click to close' oncontextmenu='return false;' id='bigImage'/>");
							newWindow.document.writeln("</a>");
							newWindow.document.writeln("</body></html>");
							//$('#'+thisID).attr({'style':'cursor:pointer!important'});
							newWindow.document.close();
							//newWindow.onbeforeunload = function() {
									//return "Did you save your stuff?"
							//}
							newWindow.onunload=function() {
								$('#'+thisID).attr({'style':'cursor:pointer!important'});
							};
						}	
					}
			</script>
		
	<script>
		$(document).ready(function(){ 
			$('#presscoveragelist > ul > li> ul > li > a').on({
				mouseout: function() {$(this).closest('li').attr({'style':'list-style-image:url(images/bullet1.png);color:#999999;'})},
				mouseover: function(){$(this).closest('li').attr({'style':'list-style-image:url(images/bullet1_hover.png);color:#333333;'})},
				click: function() {$(this).closest('li').addClass('active_event');}
			});
		});
	</script>
		<span style="display:block; text-align:center;font-family:tahoma; color:#cccccc; letter-spacing:3px; word-spacing:5px;">inspiring human endeavour</span>
</div>

	





