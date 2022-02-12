<?php

if (isset($_GET["url"])){
    $raw = str_replace("/blob", "", str_replace("https://github.com/","https://raw.githubusercontent.com/", $_GET["url"]));
    $s = explode("/", $raw);
    $base_url = str_replace($s[count($s) - 2]."/".$s[count($s) - 1],"", $raw);
    $html = file_get_contents($raw);

    //IMG
    $htmlDom = new DOMDocument;
    @$htmlDom->loadHTML($html);
    $links = $htmlDom->getElementsByTagName('img');
    $extractedLinks = array();
    $newLinks = array();

    foreach($links as $link){
    $linkSrc = $link->getAttribute('src');
    $extractedLinks[] = $linkSrc;
    $newLinks[] = $base_url . "master/" . $linkSrc;
    }

    for ($i = 0; $i <= count($extractedLinks) - 1; $i++) {
        $html = str_replace($extractedLinks[$i], $newLinks[$i], $html);
    }
    
    //IMG
    $htmlDom = new DOMDocument;
    @$htmlDom->loadHTML($html);
    $links = $htmlDom->getElementsByTagName('link');
    $extractedLinks = array();
    $newLinks = array();

    foreach($links as $link){
    $linkSrc = $link->getAttribute('href');
    $extractedLinks[] = $linkSrc;
    $newLinks[] = $base_url . "master/" . $linkSrc;
    }

    for ($i = 0; $i <= count($extractedLinks) - 1; $i++) {
        if (str_contains($extractedLinks[$i],"http://") or str_contains($extractedLinks[$i],"https://"))  {
            continue;
        }
        $html = str_replace($extractedLinks[$i], $newLinks[$i], $html);
        echo "<style>".file_get_contents($newLinks[$i])."</style>";
    }

    echo $html;

}


?>
