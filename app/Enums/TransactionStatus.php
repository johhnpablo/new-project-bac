<?php

namespace App\Enums;

enum TransactionStatus: int
{
    case PAID = 1;
    case PEDING = 2;
    case FAILED = 3;
    case CANCELED = 0;
}
