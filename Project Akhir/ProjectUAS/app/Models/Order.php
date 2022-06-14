<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function customers()
    {
        return $this->belongsTo(Customer::class, 'id_customer', 'id');
    }


    public function orderdetail()
    {
        return $this->hasMany(OrderDetail::class, 'id_order', 'id');
    }

    public function getOrder()
    {
        dd(User::customers());
    }
}
