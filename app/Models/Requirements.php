<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requirements extends Model
{
    use HasFactory;
    protected $table = "requirements";

    public function findData($id)
    {
        return static::find($id);
    }
}
