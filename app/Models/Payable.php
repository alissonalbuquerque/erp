<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payable extends Model
{
    /** @use HasFactory<\Database\Factories\PayableFactory> */
    use HasFactory;

    protected $fillable = [
        'supplier_id',
        'category_id',
        'cost_center_id',
        'description',
        'document_number',
        'amount_original',
        'amount_current',
        'issue_date',
        'due_date',
        'payment_date',
        'status',
        'notes',
    ];
}
