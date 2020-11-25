<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderStatusTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_status_types')->insertOrIgnore([[
            'name' => 'В поиске исполнителя',
        ],
            [
                'name' => 'В работе',
            ],
            [
                'name' => 'Выполнен',
            ],
            [
                'name' => 'Отменён',
            ],

        ]);
    }
}
