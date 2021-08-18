<?php

namespace Database\Seeders;
use App\Models\Task;
use Illuminate\Database\Seeder;
use database\factories\TaskFactory;
class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::factory()->times(50)->create();
    }
}
