<?php
    function firstUpper($str) {
        $str = ltrim($str);
        $str = rtrim($str);
        $str = mb_strtolower($str);
        $str = ucfirst($str);
        
        return $str;
    }
    echo('"testing String" : ' . firstUpper("testing String")) . "\n";echo('"   testing   String" : ' . firstUpper("   testing   String")) . "\n";echo('"07" : ' . firstUpper("07")) . "\n";echo('"" : ' . firstUpper("")) . "\n";echo('true : ' . firstUpper(true)) . "\n";echo('NULL : ' . firstUpper(NULL)) . "\n";echo(firstUpper("   ...I Will Rebuild Krypton Atop His Bones.")) . "\n";echo(firstUpper(" 300room FOR yoUr   DESTiny   ")) . "\n"
?>