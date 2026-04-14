<?php

$secretKey = "6LcHOHgsAAAAABXUZJIsVP747Qegl12lJJ5FVFCt";
$token = $_POST['token'];

$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$token");
$responseKeys = json_decode($response, true);

if($responseKeys["success"] && $responseKeys["score"] >= 0.5){
    echo "ok";
} else {
    echo "blocked";
}

?>