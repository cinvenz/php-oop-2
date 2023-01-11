<?php

trait Size
{
    function doSize()
    {
        $size = 40;

        if ($size >= 40) {
            echo 'cane di taglia media';
        } elseif ($size >= 100) {
            echo 'cane di taglia grande';
        }
    }
}
