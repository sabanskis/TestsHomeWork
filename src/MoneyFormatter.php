<?php
/**
 * Created by PhpStorm.
 * User: tautvydas
 * Date: 18.12.2
 * Time: 17.49
 */

namespace App;


class MoneyFormatter
{
    /**
     * @var NumberFormatter
     */
    private $numberFormatter;

    /**
     * MoneyFormatter constructor.
     * @param $numberFormatter
     */
    public function __construct($numberFormatter)
    {
        $this->numberFormatter = $numberFormatter;
    }


    public function formatEur($number)
    {
        return $this->numberFormatter->format($number) . ' €';

    }

    public function formatUsd($number)
    {
        return '$' . $this->numberFormatter->format($number);
    }
}