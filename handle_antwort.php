<?php
if(isset($_SERVER['HTTP_REFERER'])){

$stockreferer = $_SERVER['HTTP_REFERER'];
header("Refresh:3; url=$stockreferer");

$antwort = $_POST["antwort"];

list($temp,$referer)=explode("invitation.php?",$stockreferer);
list($temp,$name)=explode("name=",$referer);
list($name,$id)=explode("&id=",$name);
list($id,$lang)=explode("&lang=",$id);

$id = str_replace("+-+","",$id);

if (file_exists("answers.json")){
//file 'answers.json' does exist

$data = file_get_contents('answers.json');
$json_arr = json_decode($data, true);

$key_exists = false;

foreach ($json_arr as $key => $value) {
    if ($value['name'] == $name) {
        $key_exists = true;
		}
}

if($key_exists == true){
//name is already in .json file
foreach ($json_arr as $key => $value) {
    if ($value['name'] == $name) {
        $json_arr[$key]['answer'] = $antwort;
		}
}
} else {
//name is not in .json file
$json_arr[] = array('name'=>$name, 'answer'=>$antwort);

}
file_put_contents('answers.json', json_encode($json_arr));

} else {
//file 'answers.json' does not exist

$json_arr[] = array('name'=>$name, 'answer'=>$antwort);

file_put_contents('answers.json', json_encode($json_arr));

}
}

?>
<head>
<link href="https://fonts.googleapis.com/css?family=Montserrat:700" rel="stylesheet">
</head>
<style>
body{
background-color: black;
}
.montserrat{
font-family: 'Montserrat', sans-serif;
color: white;
}
</style>
<body>
<center>
<br><br><br><br>
<?php
echo "<p style='font-size:80pt;'>🤗</p>";
echo "<p class=\"montserrat\" style=\"font-size: 50pt;\">";
if ($lang == "de" || $lang == ""){
echo "Antwort erfolgreich erhalten!<br><br>Einen Moment...";
} else if ($lang == "en"){
echo "Your submit was successful!<br><br>One second...";
}
echo "</p>"
?>
</p>
</body>
