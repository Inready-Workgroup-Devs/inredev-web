<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonaturPerson extends Model
{
    use HasFactory;
    protected $table = 'donaturs';
    protected $fillable = [
        'auth_id',
        'status',
        'total_price'
    ];
}