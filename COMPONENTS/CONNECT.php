<?php
$db_name = 'mysql:host=localhost;dbname=lipstickshop_db';
$user_name = 'root';
$user_password = '';

try {
    $conn = new PDO($db_name, $user_name, $user_password);
    echo "";
} catch (PDOException $e) {
    echo "" . $e->getMessage();
}

function unique_id() {
    $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charsLength = strlen($chars);
    $randomString = '';

    for ($i = 0; $i < 20; $i++) {
        $randomString .= $chars[mt_rand(0, $charsLength - 1)];
    }
    return $randomString;
}

?>
