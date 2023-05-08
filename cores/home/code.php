<?php
extract($_POST);
if (isset($send)){
    $file = fopen("../data/cores.dat", "w");
    $data_w = ". $nome ";
    $data_w .= "$matricula ";
    $data_w .= "$turma ";
    $data_w .= "$materia ";
    $data_w .= "$unidade ";
    $data_w .= "$n1 ";
    $data_w .= "$n2 ";
    $data_w .= "$n3 ";
}