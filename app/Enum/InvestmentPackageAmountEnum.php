<?php

namespace App\Enum;

enum InvestmentPackageAmountEnum: string
{
    case BRONZE_MIN_AMOUNT  = '200';
    case BRONZE_MAX_AMOUNT  = '1999';
    case SILVER_MIN_AMOUNT  = '2000';
    case SILVER_MAX_AMOUNT  = '20000';
    case GOLD_MIN_AMOUNT  = '29999';
    case GOLD_MAX_AMOUNT  = '200000';
    case DIAMOND_MIN_AMOUNT  = '2000000';
    case DIAMOND_MAX_AMOUNT  = '2000000000';
}
