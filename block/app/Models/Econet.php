<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Econet extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_ref','phone_number','creayed_at','updated_at'
     ];
}
