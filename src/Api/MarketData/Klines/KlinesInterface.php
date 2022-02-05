<?php

namespace Kdabrow\ExchangeWebSocketContract\Api\MarketData\Klines;

use Kdabrow\ExchangeContract\Enums\Interval;

interface KlinesInterface
{
    public function kline(string $symbol, string|Interval $interval, KlinesHandlerInterface $handler): void;
}