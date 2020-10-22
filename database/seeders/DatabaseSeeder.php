<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\TasksSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Запуск всех сидов
     *
     * @return void
     */
    public function run()
    {
        $this->call(TasksSeeder::class);
    }
}
