<?php
/**
 * Created by PhpStorm.
 * User: tautvydas
 * Date: 18.12.2
 * Time: 16.49
 */


namespace App\Tests;

use App\NumberFormatter;
use PHPUnit\Framework\TestCase;

class NumberFormatterTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testFormatter($number, $formatnumber)
    {
        $formatter = new NumberFormatter();
        $this->assertEquals($formatnumber, $formatter->format($number));
    }

    public function dataProvider()
    {
        return [
            [2835779, '2.84M'],
            [999500, "1.00M"],
            [535216, "535K"],
            [99950, "100K"],
            [27533.78, "27 534"],
            [533.1, "533.10"],
            [66.6666, "66.67"],
            [12.00, "12"],
            [13.01, "13.01"],
            [-2835779, '-2.84M'],
            [-999500, "-1.00M"],
            [-535216, "-535K"],
            [-99950, "-100K"],
            [-27533.78, "-27 534"],
            [-533.1, "-533.10"],
            [-66.6666, "-66.67"],

            [-12.00, "-12"],
            [-13.01, "-13.01"]
        ];
    }
}



