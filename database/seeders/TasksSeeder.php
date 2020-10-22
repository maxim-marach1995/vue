<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TasksSeeder extends Seeder
{
    /**
     * Запуск сида
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            [
                'name' => 'Задача от руководителя',
                'text' => 'Нужно сделать задачи на завтра!'
            ],
            [
                'name' => 'Проверить отчет',
                'text' => 'Нужно обязательно проверить отчеты на завтра.'
            ],
            [
                'name' => 'Баг 21',
                'text' => 'Не выводятся комментарии'
            ],
            [
                'name' => 'Лимит на цены',
                'text' => 'Добавить лимит для цен, на товары молочки.'
            ],
            [
                'name' => 'Раздел одежды',
                'text' => 'Сделать переучет в разделе одежды'
            ],
            [
                'name' => 'Премия',
                'text' => 'Выплатить премию Алексею И.В. до 25 сентярбя'
            ],
        ]);
    }
}
