<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LostFound extends Model
{
    use HasFactory;
    protected $table = 'lostandfound';
    protected $fillable = 
    [
        'itemName',
        'dateoflost',
        'description',
        'lostfoundimage',
    ];
}
