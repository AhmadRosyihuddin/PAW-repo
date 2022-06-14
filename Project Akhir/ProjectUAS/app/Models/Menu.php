<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public static function index()
    {
        $menuFav = DB::table('menus')->select('nama_menu', 'harga_menu', 'foto_menu')->limit(4)->get();
        return $menuFav;
    }

    public function orderdetail()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
