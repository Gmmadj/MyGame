<?php 
$url = parse_url($_SERVER['REQUEST_URI']);

if ($url != '/') {
    parse_str($url['query']);
    echo $id;
    echo $othervar;
}