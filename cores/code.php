<?php
function add_classmate(){
extract($_POST);
if (isset($send)) {
    $file = fopen("../_data/cores.dat", "a");

    $data_w = ". $nome ";
    $data_w .= "$matricula ";
    $data_w .= "$turma ";
    $data_w .= "$materia ";
    $data_w .= "$unidade ";
    $data_w .= "$n1 ";
    $data_w .= "$n2 ";
    $data_w .= "$n3 ";

    $media = ($n1 + $n2 + $n3) / 3;

    $data_w .= "$media ";

    fwrite($file, $data_w);

    fclose($file);

    if ($media >= 6) {
        $screen_out = "$nome foi aprovado com a média $media";
    } else {
        $screen_out = "$nome foi reprovado com a média $media";
    }

    echo $screen_out;
}
}