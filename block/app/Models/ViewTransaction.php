<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Mehradsadeghi\FilterQueryString\FilterQueryString;

class ViewTransaction extends Model
{
    use FilterQueryString;

    use HasFactory;

    protected $table = 'transactionviews';

    protected $filters =
    [
        'item_type',
        'order_ref',
        'created_at',
        'updated_at',
        'like',
        'order_details',
        'status_id'
    ];

}
