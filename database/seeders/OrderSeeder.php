<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('orders')->insertOrIgnore([[
            'name' => 'Приготовить пиццу',
            'description' => 'Вкусную, с грибочками',
            'status_id' => 1,
            'creator_id' => 1
        ],
            [
                'name' => 'Спеть песню',
                'description' => 'Звучную, с припевом',
                'status_id' => 3,
                'creator_id' => 2
            ]
        ]);

//        $table->id();
//        $table->softDeletes();
//        $table->timestamps();
//        $table->string('name');
//        $table->string('description')->default('');
//        $table->dateTime('necessary_execution_date')->nullable();
//        $table->float('percent_for_mediator')->default(0);
//        $table->integer('status_id')->default(1);
    }
}
