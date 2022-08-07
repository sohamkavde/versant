<?php
if(isset($_GET['q'])){
    $f = trim(str_replace('?',' ',strtolower($_GET['q'])));
    $s = trim(str_replace('?',' ',strtolower($_GET['r'])));
    similar_text($f,$s,$p);
    echo round($p);
}
?>