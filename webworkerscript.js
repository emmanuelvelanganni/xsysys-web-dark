var i=0;
var textArray = [
		"hr@xsysys thanks you all for participating in all hands meet 2014 Dec", 
		"hr@xsysys happy to announce company outgoing to chikamangaluru by the end of Feb 2015", 
		"emmanuel@xsysys wishes you all Merry Christmas & Prosperous New Year - 2015!", 
		"hr@xsysys invites you all to get ready for next 120 days &quot;All Hands Meet - April 2015 &quot;",
		"info@xsysys Carl Dujardin CEO says &quot; We will take a leap forward to become a Top Global Software Company..&quot;"
		]

function timedcount() {
	postMessage(textArray[i]);
	i=i+1;
	setTimeout("timedcount()", 7000);
	if(i>4){
		i=0;
	}
}
timedcount();


