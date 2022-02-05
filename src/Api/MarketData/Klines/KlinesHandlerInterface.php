<?php

namespace Kdabrow\ExchangeWebSocketContract\Api\MarketData\Klines;

use Closure;
use Kdabrow\ExchangeContract\DataObjects\Kline;
use Kdabrow\ExchangeContract\Enums\Interval;

interface KlinesHandlerInterface
{
    public function handle(string $symbol, string|Interval $interval, Kline $kline): Closure;
}