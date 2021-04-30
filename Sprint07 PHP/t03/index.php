<?php
    echo "
    <h1>Charset</h1>
    <form action='index.php' method='post'>
    <p>Change charset:
        <input type='text' placeholder='Input string' name='string'>
    </p>
    <p>Select charset or several charsets:
        <select name='charsets[]' multiple>
            <option value='UTF-8'>UTF-8</option>
            <option value='ISO-8859-1'>ISO-8859-1</option>
            <option value='Windows-1252'>Windows-1252</option>
        </select>
        <input type='submit' value='Change charset' name='change'>
        <input type='submit' value='Clear' name='clear'>
    </p>
    </form>";

    $string = $_POST['string'];

    if (isset($_POST['change'])) {
        echo "Input string: <textarea cols='30' rows='4' placeholder='$ and € are currency'>$string</textarea> <br>";
        $charsets = $_POST['charsets'];
        foreach ($charsets as $value) {
            if ($value == 'UTF-8') {
                $str = mb_convert_encoding($string, 'UTF-8');
                echo "UTF-8: <textarea cols='30' rows='4' placeholder='$ and € are currency'>$str</textarea> <br>";
            }
            if ($value == 'ISO-8859-1') {
                $str = mb_convert_encoding($string, 'ISO-8859-1');
                echo "ISO-8859-1: <textarea cols='30' rows='4' placeholder='$ and EUR are currency'>$str</textarea> <br>";
            }
            if ($value == 'Windows-1252') {
                $str = mb_convert_encoding($string, 'Windows-1252');
                echo "Windows-1252: <textarea cols='30' rows='4' placeholder='$ and � are currency'>$str</textarea> <br>";
            }
        }
    }
?>
