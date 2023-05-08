<?php
extract($_POST);

if (isset($send)) {
    $data = array($name, $email, $tel, $zap);

    $contacts = unserialize(file_get_contents('/dbs/contatos.bin'));

    $out = ($contacts) ? array_merge(array_values($contacts), array($data)) : array($data);

    file_put_contents("/dbs/contatos.bin", serialize($out));


    $db_hostname = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'register';

    $password = md5($password);

    $db_connection = new mysqli($db_hostname, $db_user, $db_pass, $db_name);
    $sql_query = mysqli_query($db_connection, "INSERT INTO records VALUES (DEFAULT, '$user', '$email', '$password')");

    if($db_connection->connect_errno) {
        echo 'Não foi possivel estabelecer uma conexão com o banco de dados';
    }
}