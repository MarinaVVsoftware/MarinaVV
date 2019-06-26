<?php
    $_POST = json_decode(file_get_contents("php://input"), true);
    $lang = $_POST["lang"];
    setcookie("Lang", $lang, time() + 31556926, '/');
    echo json_encode($lang);
?>