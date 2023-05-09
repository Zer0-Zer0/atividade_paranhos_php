<?php
function add_classmate()
{
    extract($_POST);
    if (isset($send)) {
        $file = fopen("cores.dat", "a");

        $media = ($n1 + $n2 + $n3) / 3;
        $media = number_format((float)$media, 1, '.', '');

        $data_w = "
    <div class='box'>
        <h1>$nome</h1>
        <div class='flex-row'>
            <p class='mono'>N° de matrícula</p>
            <p class='mono'>$matricula</p>
        </div>
        <div class='flex-row'>
            <p class='mono'>Turma</p>
            <p class='mono'>$turma</p>
        </div>
        <div class='flex-row'>
            <p class='mono'>Materia</p>
            <p class='mono'>$materia</p>
        </div>
        <div class='flex-row'>
            <p class='mono'>Unidade</p>
            <p class='mono'>$unidade</p>
        </div>
        <div class='flex-row'>
            <p class='mono'>Média aritmetica </p>
            <p class='mono'>$media</p>
        </div>
        <div class='flex-row'>
            <p class='mono'>Nota 1</p>
            <p class='mono'>$n1</p>
        </div>
        <div class='flex-row'>
            <p class='mono'>Nota 2</p>
            <p class='mono'>$n2</p>
        </div>
        <div class='flex-row'>
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
    } else {
        echo "<p>Insira os dados de um(a) discente para mostrar o resultado da média dele(a)</p>";
    }
}
