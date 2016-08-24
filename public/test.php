<?php

function getfiles($path)
{
    $fs = glob($path);

    foreach ($fs as $file) {
        if (is_dir($file)) {
            echo("<p>$file/</p>");
        } else {
            echo("<p>$file</p>");
        }

    }
}

echo(__DIR__);
getfiles("*");
