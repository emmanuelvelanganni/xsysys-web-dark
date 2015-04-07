<?php
	/*$status = isset($_REQUEST['emman'])?1:0;
	if($status) {
		$recipient="emmanuel@xsysys.com";
		$subject=$_POST["subject"];
		$sender=$_POST["sender"];
		$senderEmail=$_POST["senderEmail"];
		$message=$_POST["message"];
		$content=$_POST["content"];
		$design=$_POST["design"];
		$usability=$_POST["usability"];
		$overall=$_POST["overall"];
		$expectation=$_POST["expectation"];
		$improveMessage=$_POST["improveMessage"];
		$thankYou="<p>Thank you! Your message has been sent.</p>";
		$mailBody="Name: $sender\nEmail: $senderEmail\n\n$message\n\nratings:\nContent:$content  Design:$design Usability:$usability Overall:$overall Expectation:$expectation\n\nImprovement Message: $improveMessage";
		mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");
	}*/
?>
<!DOCTYPE html>
<html lang="en-IN" xml:lang="en-IN" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<meta content="xsysys Technologies is working with our alliance to focus on delivering world class customer specific solutions." name="Abstract">
<meta content="software solutions, innovation, explore, software services, mobile applications, desktop applications, design, intelligent technologies, systematic change" name="Keywords">
<meta content="xsysys Technologies is working with our alliance to focus on delivering world class customer specific solutions." name="Description">
<meta content="index, follow" name="Robots">
<meta content="Public" name="Security">
<meta content="IN" name="xsysys.Country">
<meta content="xsysys Technologies Pvt Ltd" name="Publisher">
<meta content="© Copyright xsysys Technologies 2014" name="CopyRights">
<meta content="Carl Dujardin/India/xsysys Technologies" name="Owner">
<meta content="3" name="menu_max_cycles">
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
<link rel="stylesheet" media="screen, projection" href="stylesheets/print.css">
<link rel="stylesheet" media="screen, projection" href="css_browser_selector/css_browser_selector.css">
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
	<body aria-busy="false">
		<div class="main">
			<header role="banner" class="xsysys_masthead noborderborder">
				<script>
					$(document).ready(function(){
						$(".xsysys_masthead").load("header.php");
					});
				</script>
			</header>
			<div class="xsysys_main_access_cntr" role="main">
				<div id="leadspacehead" class="lead_space_head page_space_head">
					<div id="alliance_page_top"></div>
					<div class="xsysys_page_space_body feedbackBG">
						<div class="header">
							<span class="glyphicon glyphicon-th"></span>&nbsp;Feedback
						</div>
						<div class="session">
							<h1><span class="glyphicon glyphicon-hand-right"></span>&nbsp;Your feedback is very important to us</h1>
							<h2>We value your input.</h2>
						</div>
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
							<div class="session_page">
								<h1>Send in your feedback or queries</h1>
								<form name="xsysys_feedback" id="xsysys_feedback" action="feedback.php" method="post" onsubmit="return validateForm()">
									<fieldset>
									<?php
										if(isset($_POST["emman"])){
										// Checking For Blank Fields..
										if($_POST["sender"]==""||$_POST["senderEmail"]==""||$_POST["subject"]==""||$_POST["message"]==""){
										echo "Fill All Fields..";
										}else{
										// Check if the "Sender's Email" input field is filled out
										$email=$_POST['senderEmail'];
										// Sanitize E-mail Address
										$email =filter_var($email, FILTER_SANITIZE_EMAIL);
										// Validate E-mail Address
										$email= filter_var($email, FILTER_VALIDATE_EMAIL);
										if (!$email){
										echo "Invalid Sender's Email";
										}
										else{
										$recipient="emmanuel@xsysys.com";
										$subject=$_POST["subject"];
										$sender=$_POST["sender"];
										$senderEmail=$_POST["senderEmail"];
										$message=$_POST["message"];
										$content=$_POST["content"];
										$design=$_POST["design"];
										$usability=$_POST["usability"];
										$overall=$_POST["overall"];
										$expectation=$_POST["expectation"];
										$improveMessage=$_POST["improveMessage"];
										$headers = 'From:'. $email . "\r\n"; // Sender's Email
										// Message lines should not exceed 70 characters (PHP rule), so wrap it
										$message = wordwrap($message, 70);
										// Send Mail By PHP Mail Function
										$mailBody="Name: $sender\nEmail: $senderEmail\n\n$message\n\nratings:\nContent:$content  Design:$design Usability:$usability Overall:$overall Expectation:$expectation\n\nImprovement Message: $improveMessage";
										mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");
										echo "Your mail has been sent successfuly ! Thank you for your feedback";
										}
										}
										}
									?>
										<?/*=$thankYou*/?>
										<legend>Enter your details here.</legend>
										<table> 
											<tr>
												<td>
													<label for="to">To:</label>
												</td>
												<td class="add_border_right">
													<input tabindex="1" name="recipient" id="recipient" type="text" value="emmanuel@xsysys.com"/>
												</td>
												<td colspan="3" class="lable_title_color1">
													<strong>Please rate the <span class="xsysys_style">xsysys</span>.com home page</strong> <br/>
												</td>
											</tr>
											<tr>
												<td>
													<label for="name">Name:</label>
												</td>
												<td class="add_border_right">
													<input tabindex="2" name="sender" id="sender" type="text" value="" placeholder="Please enter your name"/>
												</td>
												<td style="width:100px;">
													<label for="content">Content:</label>
												</td>
												<td colspan="2">
													<input tabindex="6" id="con_minmin"  type="radio" name="content"/>&nbsp;<input tabindex="7" id="con_min" type="radio" name="content"/>&nbsp;<input tabindex="8" id="con_plusmin"  type="radio" name="content"/>&nbsp;<input tabindex="9" id="con_plus"  type="radio" name="content"/>&nbsp;<input tabindex="10" id="con_plusplus"  type="radio" name="content"/><br/>
													<strong class="radiolabel">--</strong><strong class="radiolabel">-</strong><strong class="radiolabel">+-</strong><strong class="radiolabel">+</strong><strong class="radiolabel">++</strong>
												</td>
											</tr>
											<tr>
												<td>
													<label for="email">Email:</label>
												</td>
												<td class="add_border_right">
													<input tabindex="3" type="email" value="" name="senderEmail" placeholder="Please enter your email address"/>
												</td>
												<td style="width:100px;">
													<label for="design">Design:</label>
												</td>
												<td colspan="2">
													<input tabindex="11" id="dsgn_minmin"  type="radio" name="design"/>&nbsp;<input tabindex="12" id="dsgn_min"   type="radio" name="design"/>&nbsp;<input tabindex="13" id="dsgn_plusmin"  type="radio" name="design"/>&nbsp;<input tabindex="14" id="dsgn_plus"  type="radio" name="design"/>&nbsp;<input tabindex="15" id="dsgn_plusplus"  type="radio" name="design"/><br/>
													<strong class="radiolabel">--</strong><strong class="radiolabel">-</strong><strong class="radiolabel">+-</strong><strong class="radiolabel">+</strong><strong class="radiolabel">++</strong>
												</td>
											</tr>
											<tr>
												<td>
													<label for="subject">Subject:</label>
												</td>
												<td class="add_border_right">
													<input tabindex="4" type="text" value="" name="subject" placeholder="Please enter subject"/>
												</td>
												<td style="width:100px;">
													<label for="usability">Usability:</label>
												</td>
												<td colspan="2">
													<input tabindex="16" id="usb_minmin"  type="radio" name="usability"/>&nbsp;<input tabindex="17" id="usb_min"   type="radio" name="usability"/>&nbsp;<input tabindex="18" id="usb_plusmin"  type="radio" name="usability"/>&nbsp;<input tabindex="19" id="usb_plus"  type="radio" name="usability"/>&nbsp;<input tabindex="20" id="usb_plusplus"  type="radio" name="usability"/><br/>
													<strong class="radiolabel">--</strong><strong class="radiolabel">-</strong><strong class="radiolabel">+-</strong><strong class="radiolabel">+</strong><strong class="radiolabel">++</strong>
												</td>
											</tr>
											<tr>
												<td colspan="2" rowspan="4" class="add_border_right" style="border-bottom:1px solid #d1d1d1;">
													<label for="remarks">Write your feedback here:</label><br/>
													<textarea tabindex="5" name="message" style="height:258px;" rows="8" cols="20" placeholder="input your comments / queries here."></textarea>
												</td>
												<td style="width:100px;">
													<label for="overall">Overall:</label>
												</td>
												<td colspan="2">
													<input tabindex="21" id="ovral_minmin"  type="radio" name="overall"/>&nbsp;<input tabindex="22" id="ovral_min" type="radio" name="overall"/>&nbsp;<input tabindex="23" id="ovral_plusmin"  type="radio" name="overall"/>&nbsp;<input tabindex="24" id="ovral_plus"  type="radio" name="overall"/>&nbsp;<input tabindex="25" id="ovral_plusplus"  type="radio" name="overall"/><br/>
													<strong class="radiolabel">--</strong><strong class="radiolabel">-</strong><strong class="radiolabel">+-</strong><strong class="radiolabel">+</strong><strong class="radiolabel">++</strong>
												</td>
											</tr>
											<tr>
												<td colspan="3" class="lable_title_color2">
													<strong>Please also tell us...</strong>
												</td>
											</tr>
											<tr>
												<td colspan="3">
													<label for="expectation">How well does this web site meet your expectations?</label><br/>
													<input tabindex="26" id="exp_minmin"  type="radio" name="expectation"/>&nbsp;<input tabindex="27" id="exp_min"   type="radio" name="expectation"/>&nbsp;<input tabindex="28" id="exp_plusmin"  type="radio" name="expectation"/>&nbsp;<input tabindex="29" id="exp_plus"  type="radio" name="expectation"/>&nbsp;<input tabindex="30" id="exp_plusplus"  type="radio" name="expectation"/><br/>
													<strong class="radiolabel">--</strong><strong class="radiolabel">-</strong><strong class="radiolabel">+-</strong><strong class="radiolabel">+</strong><strong class="radiolabel">++</strong>
												</td>
											</tr>
											<tr>
												<td colspan="3" style="border-bottom:1px solid #d1d1d1;">
													<label for="improvement">What change could we make, if any, to improve your experience?</label><br/>
													<textarea tabindex="31" name="improveMessage" cols="5" rows="2" style="width:100%;"></textarea>
												</td>
											</tr>
											<tr>
												<td colspan="2"></td>
												<td colspan="3" class="button_sytle">
													<input tabindex="32" type="submit" value="Submit" name="emman" class="btn btn-success"/>&nbsp;&nbsp;
													<input tabindex="33" type="button" value="cancel" class="btn btn-primary"/>
												</td>
											</tr>
										</table>
									</fieldset>
								</form>	
								<script>
									function validateForm(){
										var recipient = document.forms["xsysys_feedback"]["recipient"].value;
										var sender = document.forms["xsysys_feedback"]["sender"].value;
										var senderemail = document.forms["xsysys_feedback"]["senderEmail"].value;
										var subject = document.forms["xsysys_feedback"]["subject"].value;
										var message = document.forms["xsysys_feedback"]["message"].value;
										var content = document.forms["xsysys_feedback"]["content"].value;
										var design = document.forms["xsysys_feedback"]["design"].value;
										var usability = document.forms["xsysys_feedback"]["usability"].value;
										var overall = document.forms["xsysys_feedback"]["overall"].value;
										var expectation = document.forms["xsysys_feedback"]["expectation"].value;
										var improvemessage = document.forms["xsysys_feedback"]["improveMessage"].value;
										
											if (recipient == null || recipient == "") {
												alert("Please fill in the recipient's email id ");
												return false;
											}
											if (sender == null || sender == "") {
												alert("Please fill in your Name");
												return false;
											}
											if (senderemail == null || senderemail == "") {
												alert("Please fill in your mail id");
												return false;
											}
											if (subject == null || subject == "") {
												alert("Please fill in the subject");
												return false;
											}
											if (message == null || message == "") {
												alert("Please fill in your Message");
												return false;
											}
											if (content == null || content == "") {
												alert("Please rate the content");
												return false;
											}
											if (design == null || design == "") {
												alert("Please rate the design");
												return false;
											}
											if (usability == null || usability == "") {
												alert("Please rate the usability");
												return false;
											}
											if (overall == null || overall == "") {
												alert("Please rate overall");
												return false;
											}
											if (expectation == null || expectation == "") {
												alert("Please rate how does our site met your expectations so far!");
												return false;
											}
											if (improvemessage == null || improvemessage == "") {
												alert("Please tell us how we can imporve our xsysys site.");
												return false;
											}	
									}
								</script>
								<span style="display:block; text-align:center;font-family:tahoma; color:#cccccc; letter-spacing:3px; word-spacing:5px;">inspiring human endeavour</span>
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
							<a href="#">Feedback</a>
						</li>
					</ul>
				</div>
				<div class="copyrights">Copyright &copy; 2015 - <span class="xsysys_style">xsysys</span> Technologies Pvt. Ltd. All Rights Reserved.</div>
			</footer>
		</div>
	</body>
</html>
