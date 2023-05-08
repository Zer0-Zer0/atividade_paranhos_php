<?php
function read_data()
{
    $raw_data = file_get_contents("../_data/cores.dat");

    echo $raw_data;
}
