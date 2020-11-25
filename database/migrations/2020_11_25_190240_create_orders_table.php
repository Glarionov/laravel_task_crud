<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->softDeletes();
            $table->timestamps();
            $table->integer('creator_id');
            $table->string('name');
            $table->string('description')->default('');
            $table->dateTime('necessary_execution_date')->nullable();
            $table->float('percent_for_mediator')->default(0);
            $table->integer('status_id')->default(1);
            $table->boolean('canceled')->default(false);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}

/*
 * Заказ
создание (название, описание, дата когда выполнить, % посредника) - статус автоматом “В поиске исполнителя”
отменить (номер заказа) - нельзя отметить выполненный заказ
список заказов - получить список всех заказов в статусах “В поиске исполнителя”, “В работе”, “Выполнен”, “Отменен”.

 */
