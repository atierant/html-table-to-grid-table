#!/usr/bin/env php
<?php

if( $argc<2 ) {
    echo "\nUsage: {$argv[0]} file\n\n";
    exit(1);
}

$file = $argv[1];

if ( !file_exists($file) ) {
    echo "\nCould not open input file: $file\n\n";
    exit(1);
}
