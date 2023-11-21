<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'package',
        'amount',
        'wallet_address',
        'payment_coin',
        'contract',
    ];
}
