<head>
<meta name="viewport" content="width=device-width, initial-scale=1.4, maximum-scale=1.4, user-scalable=no" />
<meta name="viewport" content="initial-scale=1.4, maximum-scale=1.4" media="(device-height: 568px)" />
<link rel="stylesheet" type="text/css" href="/error_docs/style.css">
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Mr+Dafoe&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700&display=swap" rel="stylesheet">
</head>
<style>
body{
background-color: black;
}
.mrdafoe{
font-family: 'Mr Dafoe', cursive;
color: white;
}
.montserrat{
font-family: 'Montserrat', sans-serif;
color: white;
}
.label{
color: white;
font-size: 7pt;
}
.btnCheck {
width: 200px;
height: 50px;
background-color: purple;
border-width: 2px;
border-color: #36F5E5; 
color: white;
font-size: 11pt;
font-weight: 400;
}
</style>
<body onload="onload();">
<center>
<p class="mrdafoe" style="font-size: 30pt;margin-top: 30px;">Sean's<br>Birthday!</p>

<form action="invitation.php" >
<p class="label montserrat" style="margin-left: -97px;margin-bottom: 0px;"><b>NAME</b></p>
<input class="" style="margin-bottom: 10px;border: none;height: 25px;" name="name" required>
<p class="label montserrat" style="margin-left: -70px;margin-bottom: 0px;text-align:center;"><b>ID-Nummer</b></p>
<input class="idnumber" style="margin-bottom: 10px;margin-left: 6px;border: none;height: 25px;text-align: center;" type="tel" name="id"  maxlength="9" placeholder="- - - / - - -" required>
<br><br><br>
<button class="btnCheck" type="submit">Überprüfen 👀</button>
</form>
<script>
function onload(){
    $('.idnumber').on('keyup', function() {
  var foo = $(this).val().split(" - ").join(""); 
  if (foo.length > 0) {
    foo = foo.match(new RegExp('.{1,3}', 'g')).join(" - ");
  }
  $(this).val(foo);
});
}

</script>

</body>
