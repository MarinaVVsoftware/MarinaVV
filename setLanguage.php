<?php
    $_POST = json_decode(file_get_contents("php://input"), true);

    $lang = $_POST["language"];
    setcookie("Language", $lang, time() + 31556926, '/');
    echo "Language chenged to" . $lang;
?>