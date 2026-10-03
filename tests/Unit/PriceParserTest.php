<?php

namespace Tests\Unit;

use App\Support\PriceParser;
use PHPUnit\Framework\TestCase;

class PriceParserTest extends TestCase
{
    public function test_parses_usd_strings(): void
    {
        $this->assertSame(3450, PriceParser::toCents('$34.50'));
        $this->assertSame(123456, PriceParser::toCents('1,234.56'));
        $this->assertSame(0, PriceParser::toCents(null));
        $this->assertSame(0, PriceParser::toCents(''));
        $this->assertSame(0, PriceParser::toCents('—'));
    }

    public function test_parses_euro_and_ru_formats(): void
    {
        $this->assertSame(1299, PriceParser::toCents('12,99€'));
        $this->assertSame(123456, PriceParser::toCents('1.234,56€'));
        $this->assertSame(123456, PriceParser::toCents('1 234,56 руб'));
    }

    public function test_parses_plain_numbers(): void
    {
        $this->assertSame(100, PriceParser::toCents('1.00'));
        $this->assertSame(100, PriceParser::toCents('1'));
        $this->assertSame(5, PriceParser::toCents('0.05'));
    }
}
