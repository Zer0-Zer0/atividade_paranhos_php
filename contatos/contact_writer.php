<?php
extract($_POST);

if (isset($send)) {
    $data = array($name, $email, $tel, $zap);

    $contacts = unserialize(file_get_contents('/dbs/contatos.bin'));

    $out = ($contacts) ? array_merge(array_values($contacts), array($data)) : array($data);

    file_put_contents("/dbs/contatos.bin", serialize($out));
}