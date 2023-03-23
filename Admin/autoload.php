<?php
spl_autoload_register('AutoloadClasses');
function AutoloadClasses($classname){
    $path = "application/";
    $extension = ".php";
    $fullpath = $path.$classname.$extension;
    require $fullpath;
}
