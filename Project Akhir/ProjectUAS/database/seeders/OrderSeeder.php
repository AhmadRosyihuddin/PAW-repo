<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::create([
            'id_user' => '1',
            'id_customer' => '2',
            'jml_order' => '0'
        ]);
        Order::create([
            'id_user' => '1',
            'id_customer' => '1',
            'jml_order' => '0'
        ]);
        Order::create([
            'id_user' => '1',
            'id_customer' => '3',
            'jml_order' => '0'
        ]);
        Order::create([
            'id_user' => '1',
            'id_customer' => '5',
            'jml_order' => '0'
        ]);
        Order::create([
            'id_user' => '1',
            'id_customer' => '6',
            'jml_order' => '0'
        ]);
        Order::create([
            'id_user' => '1',
            'id_customer' => '7',
            'jml_order' => '0'
        ]);
        Order::create([
            'id_user' => '1',
            'id_customer' => '8',
            'jml_order' => '0'
        ]);
    }
}
