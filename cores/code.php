<?php
function add_classmate()
{
    extract($_POST);
    if (isset($send)) {
        $file = fopen("../_data/cores.dat", "a");
        /*
    $data_w = ". $nome ";
    $data_w .= "$matricula ";
    $data_w .= "$turma ";
    $data_w .= "$materia ";
    $data_w .= "$unidade ";
    $data_w .= "$n1 ";
    $data_w .= "$n2 ";
    $data_w .= "$n3 ";
*/
        $media = ($n1 + $n2 + $n3) / 3;

        //  $data_w .= "$media ";
        $data_w = "
    <div class='box'>
        <h1>$nome</h1>
        <div class='flex_row'>
            <p class='mono'>No de matrícula</p>
            <p class='mono'>$matricula</p>
        </div>
        <div class='flex_row'>
            <p class='mono'>Turma</p>
            <p class='mono'>$turma</p>
        </div>
        <div class='flex_row'>
            <p class='mono'>Materia</p>
            <p class='mono'>$materia</p>
        </div>
        <div class='flex_row'>
            <p class='mono'>Unidade</p>
            <p class='mono'>$unidade</p>
        </div>
        <div class='flex_row'>
            <p class='mono'>Média aritmetica </p>
            <p class='mono'>$media</p>
        </div>
        <div class='flex_row'>
            <p class='mono'>Nota 1</p>
            <p class='mono'>$n1</p>
        </div>
        <div class='flex_row'>
            <p class='mono'>Nota 2</p>
            <p class='mono'>$n2</p>
        </div>
        <div class='flex_row'>
            <p class='mono'>Nota 3</p>
            <p class='mono'>$n3</p>
        </div>
    </div>";

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
