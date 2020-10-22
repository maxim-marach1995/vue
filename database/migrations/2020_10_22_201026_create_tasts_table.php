<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTastsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('sort')->default('50')->comment('Сортировка');
            $table->string('name')->comment('Названия задачи');
            $table->text('text')->comment('Текст задачи');
            $table->boolean('check')->default(false)->comment('Статус');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasts');
    }
}
