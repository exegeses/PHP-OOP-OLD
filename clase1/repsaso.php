<?php

    $x = 5;

    function foo()
    {
        $x = 10;
        return $x;
    }

    echo foo();