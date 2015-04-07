							<div>
								<div class="xsysys_event_list" id="pressreleaseslist">
									<ul>
										<li>Press Release - 2005 <br/> <br/>
											<span class="xsysys_style">xsysys</span> forming gateway to Belgium and India in facilitating IT services <br/> <br/>
											<ul>
												<li>
													<a id="press_release_id1" style="cursor:pointer!important;" onclick="openPressReleaseWin(this,'pdf/press_release_15032005.pdf','Press Release 15th Mar, 2005',800,540);return false;">Press Release (PDF)</a>
												</li>	
												<li>
													<a id="press_release_id2" style="cursor:pointer!important;" onclick="openPressReleaseWin(this,'http://www.businesswireindia.com/PressRelease.asp?b2mid=6883','About xsysys in Business Wire India',800,540);return false;">Businesswireindia.com</a>
												</li>
												<li>
													<a id="press_release_id3" style="cursor:pointer!important;" onclick="openPressReleaseWin(this,'http://www.ciol.com/content/news/patal/2005/105031503.asp','About xsysys in CIOL',800,540);return false;">Ciol.com</a>
												</li>
											</ul>
										</li>
									</ul>
								</div>
								<script>
									function openPressReleaseWin(id, bigurl, winName, width, height)
										{
											var thisID= $(id).attr('id');
											if($('#'+thisID).css('cursor') == 'pointer')
											{
												
												var newWindow = window.open('', winName, 
													"location=no, directories=no, fullscreen=no, " + 
													"menubar=no, status=no, toolbar=no, width=" + 
													width + ", height=" + height + ", scrollbars=yes");
												if(newWindow){
													newWindow.focus();
												}	
												newWindow.document.writeln("<!doctype HTML>");
												newWindow.document.writeln("<html>");
												newWindow.document.writeln("<head>");
												newWindow.document.writeln("<title>"+winName+"</title>");
												newWindow.document.writeln('<script src="jQuery/jquery-1.11.1.min.js"></scr'+'ipt>');
												newWindow.document.writeln('<script src="jQuery/newsscript.js"></scr'+'ipt>');
												newWindow.document.writeln("</head>");
												newWindow.document.writeln("<body onload='loadPressNewsPage()' style='margin: 0 0 0 0;'>");
												newWindow.document.writeln("<a href='javascript:window.close();'>");
												newWindow.document.writeln("<script>");
												newWindow.document.writeln("function loadPressNewsPage() {");
												newWindow.document.writeln("location.assign('"+bigurl+"');");
												//newWindow.document.writeln("window.open('"+bigurl+"', '_self');");
												newWindow.document.writeln("}");
												newWindow.document.writeln("</scr"+"ipt>");
												newWindow.document.writeln("</a>");
												newWindow.document.writeln("</body></html>");
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
											$('#pressreleaseslist > ul > li> ul > li > a').on({
												mouseout: function() {$(this).closest('li').attr({'style':'list-style-image:url(images/bullet1.png);color:#999999;'})},
												mouseover: function(){$(this).closest('li').attr({'style':'list-style-image:url(images/bullet1_hover.png);color:#333333;'})},
												click: function() {$(this).closest('li').addClass('active_event');}
											});
										});
									</script>
								<span style="display:block; text-align:center;font-family:tahoma; color:#cccccc; letter-spacing:3px; word-spacing:5px;">inspiring human endeavour</span>
							</div>
						