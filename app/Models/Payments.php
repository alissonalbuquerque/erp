<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    /** @use HasFactory<\Database\Factories\PaymentsFactory> */
    use HasFactory;

    protected $fillable = [
        'payable_id',
        'bank_account_id',
        'payment_date',
        'amount_paid',
        'payment_method',
        'transaction_ref',
        'notes',
    ];

}
