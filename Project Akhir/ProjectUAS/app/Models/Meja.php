<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Meja extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function meja()
    {
        return $this->belongsTo(Order::class);
    }
}
