<?php
function read_data()
{
    $data = file_get_contents("cores.dat");

    echo $data? $data : "<p class='box'>Não há nenhum aluno no banco de dados </p>";
}
