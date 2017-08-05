<?php

$directory  = 'C:\wamp64\resim';
$all_files  = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory));
$png_files = new RegexIterator($all_files, '/\.png$/');

foreach($png_files as $file) {
    echo $png_files->getSubPathname(), PHP_EOL;
}

?>
