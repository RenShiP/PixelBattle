<?php
//echo '<script>alert(1);</script>';

$showsqlcolor = new mysqli ("localhost", "root", "", "threads");
$showsqlcolor->query("SET NAMES 'utf8'");

$sqlcolor = $showsqlcolor->query("SELECT `Color` FROM `colors`");
$ind = 1;

while ($rowcolor = mysqli_fetch_row($sqlcolor)) {
    for ($j = 0 ; $j < 1 ; ++$j){

        $myperem = '"#';
        $myperem .= $rowcolor[$j];
        $myperem .= '"';

        $local = '<script>$("#p_';
        $local .= $ind;
        $local .= '").css({"backgroundColor":';
        $local .= $myperem;
        $local .= '});</script>';
            
        echo $local;
    }
    $ind = $ind + 1;
}
?>