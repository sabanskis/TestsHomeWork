<?php
/**
 * Created by PhpStorm.
 * User: tautvydas
 * Date: 18.12.2
 * Time: 17.55
 */

namespace App\Tests;


use App\MoneyFormatter;
use App\NumberFormatter;
use PHPUnit\Framework\TestCase;

class MoneyFormatterTest extends TestCase
{
    /**
     * @dataProvider EURdataProvider
     */
    public function testMoneyEUR($number, $formatnumber)
    {
        $stub = $this->createMock(NumberFormatter::class);
        $stub->method('format')
            ->willReturn($number);

        $eurformatter = new MoneyFormatter($stub);

        $this->assertEquals($formatnumber, $eurformatter->formatEur($number));

    }

    /**
     * @dataProvider USDdataProvider
     */
    public function testMoneyUSD($number, $formatnumber)
    {
        $stub = $this->createMock(NumberFormatter::class);
        $stub->method('format')
            ->willReturn($number);

        $usdformatter = new MoneyFormatter($stub);

        $this->assertEquals($formatnumber, $usdformatter->formatUsd($number));

    }

    public function USDdataProvider()
    {
        return [
            ['2.84M', '$2.84M'],
            ['pyrag', '$pyrag'],
        ];
    }

    public function EURdataProvider()
    {
        return [
            ['2.84M', '2.84M €'],
            ['pyrag', 'pyrag €'],
        ];
    }

}