<?php

namespace Kdabrow\ExchangeWebSocketContract\Api;

use Kdabrow\ExchangeWebSocketContract\Api\MarketData\Klines\KlinesInterface;

interface MarketDataInterface
{
    public function continuousKlines(): KlinesInterface;
}