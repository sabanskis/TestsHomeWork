<?php
/**
 * Created by PhpStorm.
 * User: tautvydas
 * Date: 18.12.2
 * Time: 16.52
 */

namespace App;


class NumberFormatter
{
    public function format($number)
    {

        if ($number >= 999500) {
            return number_format(round(($number / 1000000), 2), 2) . 'M';
        } elseif ($number >= 99500) {
            return number_format(round(($number / 1000), 0), 0) . 'K';
        } elseif ($number < 99950 && $number > 1000) {
            return number_format($number, 0, '', ' ');
        } elseif ($number < 1000 && $number > 0) {
            if (fmod($number, 1) == 0) {
                return number_format($number, 0, '.', '');
            }
            return number_format($number, 2, '.', '');
        } elseif ($number < 0 && $number > -1000) {
            var_dump($number);
            if (fmod($number, 1) == 0) {
                return number_format($number, 0, '.', '');
            }
            return number_format($number, 2, '.', '');
        } elseif ($number < -1000 && $number > -99950) {
            return number_format($number, 0, '', ' ');
        } elseif ($number <= -99500 && $number > -999500) {
            return number_format(round(($number / 1000), 0), 0) . 'K';
        } elseif ($number <= -999500) {
            return number_format(round(($number / 1000000), 2), 2) . 'M';
        }
        return $number;
    }
}