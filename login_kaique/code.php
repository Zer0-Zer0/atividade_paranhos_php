<?php
extract($_POST);

$correctusername = "admin";
$correctpassword = "81dc9bdb52d04dc20036dbd8313ed055";

if (isset($send)) {
    if ($username == $correctusername && md5($password) == $correctpassword) {
        header("Location: correct.php");
    } else {
        header("Location: incorrect.php");
    }

    exit();
}
