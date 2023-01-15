<?php

    $filename = "test.phar";
    $dir = "./";
    $regex = "/src\/|vendor\//";
    $main = "src/EntryPoint/main.php";
    $shebang = ''; // "#!/usr/bin/env php";
    $chmod = false;

    if ( file_exists( $filename ) )
        unlink( $filename );

    $phar = new Phar($filename);
    $files = $phar->buildFromDirectory( $dir, $regex );
    $phar->setStub( ( $shebang ? $shebang . PHP_EOL : "" ) . $phar->createDefaultStub( $main ) );
    if ($chmod) {
        chmod($filename, fileperms($phar) | 0700);
    }
