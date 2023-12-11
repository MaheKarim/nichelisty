<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tasks = [
            [
                'user_id' => 1 ,
                'name' => 'Task 1',
                'description' => 'Description 1',
            ],
            [
                'user_id' => 1 ,
                'name' => 'Task 2',
                'description' => 'Description 2',
            ],
            [
                'user_id' => 1 ,
                'name' => 'Task 3',
                'description' => 'Description 3',
            ],
        ];

        foreach ($tasks as $task) {
            Task::insert($task);
        }

    }
}
