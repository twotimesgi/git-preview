<?php

if (isset($_GET["url"])){
    $raw = str_replace("/blob", "", str_replace("https://github.com/","https://raw.githubusercontent.com/", $_GET["url"]));
    // $base_url = preg_match('/https:\/\/github.com\/.*\/.*\//', $raw);
    $s = explode("/", $raw);
    $base_url = str_replace($s[count($s) - 2]."/".$s[count($s) - 1],"", $raw);
    $source = file_get_contents($raw);
    
    $source = str_replace("src=\"","src=\"".$base_url."master/",$source);
    $source = str_replace("href=\"","href=\"".$base_url."master/",$source);

    echo $base_url;
    echo "https://raw.githubusercontent.com/twotimesgi/EsercizioLim/main/style.css";

    echo $source;
}
?>
