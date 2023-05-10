<?php
function arabic_to_roman()
{
    extract($_POST);
    if (isset($send)) {
        $length = $decimal !== 0 ? floor(log10($decimal) + 1) : 1;

        function number_builder($a, $b, $c)
        {
            return array(" ", $a, $a . $a, $a . $a . $a, $a . $b, $b, $b . $a, $b . $a . $a, $b . $a . $a . $a, $a . $c);
        }

        $roman_numbers = array(number_builder("I", "V", "X"), number_builder("X", "L", "C"), number_builder("C", "D", "M"), number_builder("M", "", ""));

        $decimal = strrev(strval($decimal));

        switch ($length) {
            case 4:
                $out = $roman_numbers[3][$decimal[3]] . $roman_numbers[2][$decimal[2]] . $roman_numbers[1][$decimal[1]] . $roman_numbers[0][$decimal[0]];
                break;
            case 3:
                $out = $roman_numbers[2][$decimal[2]] . $roman_numbers[1][$decimal[1]] . $roman_numbers[0][$decimal[0]];
                break;
            case 2:
                $out = $roman_numbers[1][$decimal[1]] . $roman_numbers[0][$decimal[0]];
                break;
            case 1:
                $out = $roman_numbers[0][$decimal[0]];
                break;
        }

        echo "<p>$out</p>";

        
    } else {
        echo "<p>Insira um número entre 1 e 3999 para converter</p>";
    }
}
