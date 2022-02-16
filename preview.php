<?php

if (isset($_GET["url"])){
    $raw = str_replace("/blob", "", str_replace("https://github.com/","https://raw.githubusercontent.com/", $_GET["url"]));
    $s = explode("/", $raw);
    $base_url = str_replace($s[count($s) - 2]."/".$s[count($s) - 1],"", $raw);
    $html = file_get_contents($raw);

    //HTML IMAGES
    $htmlDom = new DOMDocument;
    @$htmlDom->loadHTML($html);
    $links = $htmlDom->getElementsByTagName('img');
    $extractedLinks = array();
    $newLinks = array();

    foreach($links as $link){
    $linkSrc = $link->getAttribute('src');
        if(array_search($linkSrc, $extractedLinks) == false){
        $extractedLinks[] = $linkSrc;
        $newLinks[] = $base_url . "master/" . $linkSrc;
        }
    }

    for ($i = 0; $i <= count($extractedLinks) - 1; $i++) {
        $html = str_replace($extractedLinks[$i], $newLinks[$i], $html);
    }

    //CSS
    $newLinks = [];
    $linkSrc = [];
    $links = $htmlDom->getElementsByTagName('link');
    $extractedLinks = array();
    $newLinks = array();

    foreach($links as $link){
    $linkSrc = $link->getAttribute('href');
    $extractedLinks[] = $linkSrc;
    $newLinks[] = $base_url . "master/" . $linkSrc;
    }

    $html = str_replace('</head>', '<style></style> </head>', $html);

    for ($i = 0; $i <= count($extractedLinks) - 1; $i++) {
        if (str_contains($extractedLinks[$i],"http://") or str_contains($extractedLinks[$i],"https://") or str_contains($extractedLinks[$i],"png"))  {

        }else{
            $css = file_get_contents($newLinks[$i]);
            $css = preg_replace('/(?:\.\.\/)+(.*?\))/', $base_url. "master/" . '$1', $css);
            $html = str_replace('</style>',$css.'</style>', $html);
            $html = str_replace($extractedLinks[$i],"#", $html);
        }
    }

    echo $html;
}

?>
