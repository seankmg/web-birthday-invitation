<?php
if(isset($_REQUEST['name'])){
if(isset($_REQUEST['id'])){
if(!isset($_REQUEST['lang'])){

$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
header('Location: '.$actual_link.'&lang=de');

}

$name = $_REQUEST['name'];
$id = $_REQUEST['id'];
$id = str_replace(" - ","",$id);
$lang = $_REQUEST['lang'];


if (file_exists("eingeladen/".$name.",".$id.".csv")){

echo "<br>";

$is_invited = true;
$idname = $name."#".$id;

$data = file_get_contents('answers.json');
$json_arr = json_decode($data, true);

$answered = false;

foreach ($json_arr as $key => $value) {
    if ($value['name'] == $name) {
        $answered = true;
		}
}


if ($lang == "de" || $lang == ""){
$html = file_get_contents("invited.php");
} else if ($lang == "en"){
$html = file_get_contents("invited_en.php");
}

$html = str_replace("HIERDERNAMEUNDDIEID",$idname,$html);


if ($answered == false){

	if ($lang == "de" || $lang == ""){
	$html1 = str_replace("HIERDERSTATUSDERANTWORT","<p class=\"montserrat\" style=\"color: red;\">Noch nicht geantwortet ✘</p><p style='font-size:27pt;margin-top: -7px;margin-bottom: -35px;'>😱</p><br>",$html);
	$html2 = str_replace("HIERDERSTATUSDERANTWORT","<p class=\"montserrat\" style=\"color: red;\">Noch nicht geantwortet ✘</p><p style='font-size:27pt;margin-top: -7px;margin-bottom: -35px;'>🧐</p><br>",$html);
	$html3 = str_replace("HIERDERSTATUSDERANTWORT","<p class=\"montserrat\" style=\"color: red;\">Noch nicht geantwortet ✘</p><p style='font-size:27pt;margin-top: -7px;margin-bottom: -35px;'>🤔</p><br>",$html);
	$html4 = str_replace("HIERDERSTATUSDERANTWORT","<p class=\"montserrat\" style=\"color: red;\">Noch nicht geantwortet ✘</p><p style='font-size:27pt;margin-top: -7px;margin-bottom: -35px;'>😰</p><br>",$html);
	$html5 = str_replace("HIERDERSTATUSDERANTWORT","<p class=\"montserrat\" style=\"color: red;\">Noch nicht geantwortet ✘</p><p style='font-size:27pt;margin-top: -7px;margin-bottom: -35px;'>😐</p><br>",$html);
	$html6 = str_replace("HIERDERSTATUSDERANTWORT","<p class=\"montserrat\" style=\"color: red;\">Noch nicht geantwortet ✘</p><p style='font-size:27pt;margin-top: -7px;margin-bottom: -35px;'>😯</p><br>",$html);
	$html7 = str_replace("HIERDERSTATUSDERANTWORT","<p class=\"montserrat\" style=\"color: red;\">Noch nicht geantwortet ✘</p><p style='font-size:27pt;margin-top: -7px;margin-bottom: -35px;'>😩</p><br>",$html);
	$array = [$html1,$html2,$html3,$html4,$html5,$html6,$html7];
	$html = $array[rand(0, count($array) - 1)];
	} else if ($lang == "en"){
	$html1 = str_replace("HIERDERSTATUSDERANTWORT","<p class=\"montserrat\" style=\"color: red;\">Not answered ✘</p><p style='font-size:27pt;margin-top: -7px;margin-bottom: -35px;'>😱</p><br>",$html);
	$html2 = str_replace("HIERDERSTATUSDERANTWORT","<p class=\"montserrat\" style=\"color: red;\">Not answered ✘</p><p style='font-size:27pt;margin-top: -7px;margin-bottom: -35px;'>🧐</p><br>",$html);
	$html3 = str_replace("HIERDERSTATUSDERANTWORT","<p class=\"montserrat\" style=\"color: red;\">Not answered ✘</p><p style='font-size:27pt;margin-top: -7px;margin-bottom: -35px;'>🤔</p><br>",$html);
	$html4 = str_replace("HIERDERSTATUSDERANTWORT","<p class=\"montserrat\" style=\"color: red;\">Not answered ✘</p><p style='font-size:27pt;margin-top: -7px;margin-bottom: -35px;'>😰</p><br>",$html);
	$html5 = str_replace("HIERDERSTATUSDERANTWORT","<p class=\"montserrat\" style=\"color: red;\">Not answered ✘</p><p style='font-size:27pt;margin-top: -7px;margin-bottom: -35px;'>😐</p><br>",$html);
	$html6 = str_replace("HIERDERSTATUSDERANTWORT","<p class=\"montserrat\" style=\"color: red;\">Not answered ✘</p><p style='font-size:27pt;margin-top: -7px;margin-bottom: -35px;'>😯</p><br>",$html);
	$html7 = str_replace("HIERDERSTATUSDERANTWORT","<p class=\"montserrat\" style=\"color: red;\">Not answered ✘</p><p style='font-size:27pt;margin-top: -7px;margin-bottom: -35px;'>😩</p><br>",$html);
	$array = [$html1,$html2,$html3,$html4,$html5,$html6,$html7];
	$html = $array[rand(0, count($array) - 1)];
	}

} else {
	if ($lang == "de" || $lang == ""){
	$html1 = str_replace("HIERDERSTATUSDERANTWORT","<p class=\"montserrat\" style=\"color: green;\">Geantwortet ✔</p><p style='font-size:27pt;margin-top: -7px;margin-bottom: -35px;'>😎</p><br>",$html);
	$html2 = str_replace("HIERDERSTATUSDERANTWORT","<p class=\"montserrat\" style=\"color: green;\">Geantwortet ✔</p><p style='font-size:27pt;margin-top: -7px;margin-bottom: -35px;'>🤠</p><br>",$html);
	$html3 = str_replace("HIERDERSTATUSDERANTWORT","<p class=\"montserrat\" style=\"color: green;\">Geantwortet ✔</p><p style='font-size:27pt;margin-top: -7px;margin-bottom: -35px;'>🤩</p><br>",$html);
	$html4 = str_replace("HIERDERSTATUSDERANTWORT","<p class=\"montserrat\" style=\"color: green;\">Geantwortet ✔</p><p style='font-size:27pt;margin-top: -7px;margin-bottom: -35px;'>🥳</p><br>",$html);
	$html5 = str_replace("HIERDERSTATUSDERANTWORT","<p class=\"montserrat\" style=\"color: green;\">Geantwortet ✔</p><p style='font-size:27pt;margin-top: -7px;margin-bottom: -35px;'>🤪</p><br>",$html);
	$html6 = str_replace("HIERDERSTATUSDERANTWORT","<p class=\"montserrat\" style=\"color: green;\">Geantwortet ✔</p><p style='font-size:27pt;margin-top: -7px;margin-bottom: -35px;'>😛</p><br>",$html);
	$html7 = str_replace("HIERDERSTATUSDERANTWORT","<p class=\"montserrat\" style=\"color: green;\">Geantwortet ✔</p><p style='font-size:27pt;margin-top: -7px;margin-bottom: -35px;'>😏</p><br>",$html);
	$array = [$html1,$html2,$html3,$html4,$html5,$html6,$html7];
	$html = $array[rand(0, count($array) - 1)];
	} else if ($lang == "en"){
	$html1 = str_replace("HIERDERSTATUSDERANTWORT","<p class=\"montserrat\" style=\"color: green;\">Answered ✔</p><p style='font-size:27pt;margin-top: -7px;margin-bottom: -35px;'>😎</p><br>",$html);
	$html2 = str_replace("HIERDERSTATUSDERANTWORT","<p class=\"montserrat\" style=\"color: green;\">Answered ✔</p><p style='font-size:27pt;margin-top: -7px;margin-bottom: -35px;'>🤠</p><br>",$html);
	$html3 = str_replace("HIERDERSTATUSDERANTWORT","<p class=\"montserrat\" style=\"color: green;\">Answered ✔</p><p style='font-size:27pt;margin-top: -7px;margin-bottom: -35px;'>🤩</p><br>",$html);
	$html4 = str_replace("HIERDERSTATUSDERANTWORT","<p class=\"montserrat\" style=\"color: green;\">Answered ✔</p><p style='font-size:27pt;margin-top: -7px;margin-bottom: -35px;'>🥳</p><br>",$html);
	$html5 = str_replace("HIERDERSTATUSDERANTWORT","<p class=\"montserrat\" style=\"color: green;\">Answered ✔</p><p style='font-size:27pt;margin-top: -7px;margin-bottom: -35px;'>🤪</p><br>",$html);
	$html6 = str_replace("HIERDERSTATUSDERANTWORT","<p class=\"montserrat\" style=\"color: green;\">Answered ✔</p><p style='font-size:27pt;margin-top: -7px;margin-bottom: -35px;'>😛</p><br>",$html);
	$html7 = str_replace("HIERDERSTATUSDERANTWORT","<p class=\"montserrat\" style=\"color: green;\">Answered ✔</p><p style='font-size:27pt;margin-top: -7px;margin-bottom: -35px;'>😏</p><br>",$html);
	$array = [$html1,$html2,$html3,$html4,$html5,$html6,$html7];
	$html = $array[rand(0, count($array) - 1)];
	}
}

} else {

	if ($lang == "de" || $lang == ""){

	$html = file_get_contents("not_invited.php");
	$html1 = str_replace("HIERDERSTATUSDERANTWORT","<p class=\"montserrat\" style=\"color: red;\">Du bist nicht eingeladen ✘</p><p style='font-size:27pt;margin-top: -7px;margin-bottom: -35px;'>🤨</p><br>",$html);
	$html2 = str_replace("HIERDERSTATUSDERANTWORT","<p class=\"montserrat\" style=\"color: red;\">Du bist nicht eingeladen ✘</p><p style='font-size:27pt;margin-top: -7px;margin-bottom: -35px;'>🙄</p><br>",$html);
	$html3 = str_replace("HIERDERSTATUSDERANTWORT","<p class=\"montserrat\" style=\"color: red;\">Du bist nicht eingeladen ✘</p><p style='font-size:27pt;margin-top: -7px;margin-bottom: -35px;'>🤭</p><br>",$html);
	$array = [$html1,$html2,$html3];
	$html = $array[rand(0, count($array) - 1)];

	} else if ($lang == "en"){

	$html = file_get_contents("not_invited.php");
	$html1 = str_replace("HIERDERSTATUSDERANTWORT","<p class=\"montserrat\" style=\"color: red;\">You're not invited ✘</p><p style='font-size:27pt;margin-top: -7px;margin-bottom: -35px;'>🤨</p><br>",$html);
	$html2 = str_replace("HIERDERSTATUSDERANTWORT","<p class=\"montserrat\" style=\"color: red;\">You're not invited ✘</p><p style='font-size:27pt;margin-top: -7px;margin-bottom: -35px;'>🙄</p><br>",$html);
	$html3 = str_replace("HIERDERSTATUSDERANTWORT","<p class=\"montserrat\" style=\"color: red;\">You're not invited ✘</p><p style='font-size:27pt;margin-top: -7px;margin-bottom: -35px;'>🤭</p><br>",$html);
	$array = [$html1,$html2,$html3];
	$html = $array[rand(0, count($array) - 1)];

	}

}

echo $html;

}
}
?>
