<?php

namespace hahahalib;

/*

use hahahalib\pdo as pdo;

*/

/*
*/
class config
{
    use \hahahalib\instance;

    public $rrr;

    public function Initial()
    {
        $this->rrr = [
            1,2,3,4,5
        ];

        return $this;

    }
}