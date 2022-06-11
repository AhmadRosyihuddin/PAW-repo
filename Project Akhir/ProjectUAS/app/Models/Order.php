<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function OrderView()
    {
        DB::select('nama');
    }

    public function customers()
    {
        return $this->belongsToMany(Customer::class, 'id_customer', 'id');
    }
}
