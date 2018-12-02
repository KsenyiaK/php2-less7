<?php
/**
 * Created by PhpStorm.
 * User: ksenia
 * Date: 02.12.2018
 * Time: 20:57
 */

class Math
{
    public function factorial($n) {
        if( $n == 0) {
            return 1;
        }

        return $n * $this->factorial($n-1 );
    }
}