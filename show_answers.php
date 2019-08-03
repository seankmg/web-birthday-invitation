<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.2, maximum-scale=1.2, user-scalable=no" />
  <meta name="viewport" content="initial-scale=1.2, maximum-scale=1.2" media="(device-height: 568px)" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="/error_docs/style.css">
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <link href="https://fonts.googleapis.com/css?family=Mr+Dafoe&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700&display=swap" rel="stylesheet">
</head>
<style>
body{
font-family: 'Montserrat', sans-serif;
background-color: black;
display: block;
}
.montserrat{
font-family: 'Montserrat', sans-serif;
color: white;
font-weight: 700;
}
table {
width: 300px;
align-content: center;
}

table, th, td {
  border: 1px solid black;
  text-align: center;
  vertical-align: middle;
}
td {
  font-weight: 400;
}
</style>
<body>
<center>
<br><br><br><br>
<?php
if(file_exists('answers.json')){
$data = file_get_contents('answers.json');
$json_arr = json_decode($data, true);

echo "<p class'montserrat' style='color:white!important;font-size: 20pt;margin-top: -30px;'><b>Antworten</b></p>";
echo "<table class='montserrat' style='font-size: 9pt;border-collapse: collapse;color: black;background-color: white;border: 1px solid black;'>";
echo "<tr>";
echo "<th>Name</th>";
echo "<th>Antwort</th>";
echo "</tr>";

$zusagen;
$absagen;

foreach ($json_arr as $key => $value) {

$answer = $value['answer'];
if($answer == "yes" || $answer == "yes+1"){
  $zusagen++;
  echo "<tr>";
  echo "<td>".$value['name']."</td>";
  echo "<td><div><p style='color: rgb(50,205,50);margin-bottom: -18px;'><b>".$value['answer']."</b></p><p align='right' style='margin-top: -18px;'>✅</p></div></td>";
  echo "</tr>";
} else {
  $absagen++;
  echo "<tr>";
  echo "<td>".$value['name']."</td>";
  echo "<td><div><p style='color: rgb(179,0,12);margin-bottom: -18px;'><b>".$value['answer']."</b></p><p align='right' style='margin-top: -18px;'>❌</p></div></td>";
  echo "</tr>";

}

}

echo "<p class='montserrat' style='color: white;margin-left: -110px;'>👍🏼:  <p style='color: rgb(50,205,50);float:left;margin-left: 115px;margin-top: -37px;'><b>".$zusagen."</b></p></p>";
echo "<p class='montserrat' style='color: white;margin-left: 100px;margin-top: -41px;'>👎🏼:  <p style='color: rgb(179,0,12);float:left;margin-left: 220px;margin-top: -38px;'><b>".$absagen."</b></p></p>";

}

?>
</p>
</body>
