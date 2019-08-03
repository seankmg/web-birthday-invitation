<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=0.9, maximum-scale=0.9, user-scalable=no" />
<meta name="viewport" content="initial-scale=0.9, maximum-scale=0.9" media="(device-height: 568px)" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="/error_docs/style.css">
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<link href="https://fonts.googleapis.com/css?family=Mr+Dafoe&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700&display=swap" rel="stylesheet">
</head>
<style>
html, body {
    max-width: 100%;
    overflow-x: hidden;
}
body {
background-color: rgb(1,1,1);
}
.btn1, .btn2, .btn3 {
display:inline-block;
}
.montserrat{
font-family: 'Montserrat', sans-serif;
color: white;
}
.mrdafoe{
font-family: 'Mr Dafoe', cursive;
color: white;
}

.blue-line{
width: 330px;
height: 5px;
background-color: #36F5E5;
}
.purple-line{
width: 330px;
height: 5px;
background-color: purple;
}
.purpleBG{
background-color: #65C7F2;
width: 110px;
height: 18px;  
}

.btnZusagenAbsagen{
width: 200px;
height: 50px;
background-color: purple;
border-width: 2px;
border-color: #36F5E5; 
color: white;
font-size: 11pt;
font-weight: 400;
}

.btnEinreichen{
width: 200px;
height: 50px;
border: none;
background-color: #32cd32;
color: white;
font-size: 11pt;
font-weight: 400;
}
.lang-btn{
height: 25px;
width: 40px;
background-color: purple;
margin-right: -320px;
border-radius: 2px;
}

</style>
<body onload="onLoad();">
<center>
<div class="lang-btn montserrat" style="color: black;padding-top: 3px;" onclick="refen();"><b>EN</b></div>
<p class="mrdafoe" style="font-size: 65pt;transform: rotate(-12deg);margin-top:5px;margin-left: -30px;">Du bist<br>eingeladen!</p>
<p class="purpleBG montserrat" style="color: black;font-size: 9pt;margin-top: -75px;">HIERDERNAMEUNDDIEID</p>
<div id="info" style="visibility: visible;">
HIERDERSTATUSDERANTWORT
<br>
<p class="montserrat" style="font-weight: 300;font-size: 13pt;">HERZLICHE EINLADUNG ZU MEINEM</p>
<div class="blue-line" style="margin-bottom: -20px;"></div>
<p class="montserrat" style="font-weight: 700;font-size: 30pt;">18. GEBURTSTAG</p>
<div class="blue-line" style="margin-top: -20px;"></div>
<p class="montserrat" style="font-weight: 300;font-size: 13pt;">Samstag, den 21. September 2019 ab 19:30 Uhr</p>
<p class="montserrat" style="font-weight: 300;font-size: 13pt;margin-top: -10px;">Venloer Wall 17, 50672, K&oumlln</p>
<p style="color: white;font-size: 20pt;">⇣</p>
</div>



<div id="antwort" style="margin-bottom: 20px;visibility: hidden;">
<br>
<p class="montserrat" style="font-weight: 400;font-size: 13pt;margin-top: -12px;">Deine Antwort</p>
<div class="blue-line" style="margin-top: 0px;"></div>
<form action="handle_antwort.php" method="post">
<select name="antwort" style="margin-top: 20px;">
  <option value="yes">Ja, ich komme (ohne Begleitung)</option>
  <option value="yes+1">Ja, ich komme (mit einer Begleitung)</option>
  <option value="no">Nein, ich kann nicht kommen</option>
</select>
<br><br>
    <button id="einreichen" class="btnEinreichen montserrat" type="submit" name="absenden">Bestätigen ✔</button>
</form>
<p class="montserrat" style="font-size:5pt;font-weight: 300;margin-top: 30px;"><i>Bitte versuche vor dem 1. September 2019 zu antworten,<br>damit wir noch planen können.</i></p>
<p class="montserrat" style="font-weight: 300;margin-top: 30px;"><i>PS: Du darfst gerne eine Begleitung mitbringen.</i></p>
<br><br>
<div class="blue-line" style="margin-top: -30px;"></div>
</div>
<button id="antwortBtn" onclick="toggleInfo();" class="btnZusagenAbsagen montserrat">⇡ Deine Antwort ⇡</button>
<br><br><br><br>
<div id="anfahrt">
<div class="purple-line" style="margin-top: -10px;margin-bottom: 20px;"></div>
<p class="montserrat" style="font-weight: 400;font-size: 13pt;"><b>Anfahrt</b></p>

<p class="montserrat" style="font-weight: 300;font-size: 13pt;">Öffentliche Verkehrsmittel</p>
<p class="montserrat" style="font-weight: 300;font-size: 13pt;">U-Bahn 3, 4, 5</p>
<p class="montserrat" style="font-weight: 300;font-size: 13pt;">Haltestelle: <b>Hanns-Böckler Platz</b></p>

<div style='height:250px;width:500px;margin-bottom: 50px;margin-top: 30px;'><iframe width="500" height="250" src=https://maps.google.de/maps?hl=de&q=Rom+e.V.%20%20Venloer+Wall+17%20Köln&t=&z=14&ie=utf8&iwloc=b&output=embed frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style='height:250px;width:500px;'></iframe></div>
</div>
</center>
</body>
<script>
function onLoad(){
$("#antwort").hide();
}
</script>
<script async>
function toggleInfo(){
	if ($("#info").is(":visible")){
		$("#info").slideUp('fast');
		$("#antwort").css("visibility", "visible");
		$("#anfahrt").css("visibility", "hidden");
		$("#anfahrt").fadeOut('fast');
		$("#antwort").show();
		$("#antwort").fadeIn('fast');
		$("#antwortBtn").html("⇣ Deine Antwort ⇣");
	} else {
		$("#antwort").hide();
		$("#antwort").css("visibility", "hidden");
		$("#anfahrt").css("visibility", "visible");
		$("#info").fadeIn('fast');
		$("#anfahrt").fadeIn('fast');
		
		$("#antwortBtn").html("⇡ Deine Antwort ⇡");
    }
}
function refen(){

var baseURL = window.location.href;
var newURL = baseURL.replace("lang=de", "lang=en");
window.location.href = newURL;


}
</script>

</html>
