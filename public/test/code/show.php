<?php

namespace hahahalib;

/*

use hahahalib\pdo as pdo;

 */

/*
 */
class show
{

    public static function hahaha()
    {
        echo "hahaha";
        ?>
        <script>
        alert(444);

        </script>
        <?php
    }

    public static function add($abc)
    {
        $abc["ccc"] = 6;
    }

    public static function add2(&$abc)
    {
        $abc["ccc"] = 6;
    }
}