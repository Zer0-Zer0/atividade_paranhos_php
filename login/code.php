<?php
extract($_POST);

$correctusername = "admin";
$correctpassword = "1234";

if (isset($send)) {
    if ($username == $correctusername && $password == $correctpassword) {
        header("Location: ../correct/");
    } else {
        header("Location: ../incorrect/");
    }

    exit();
}
