<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('yourtask')->InsertGetId([
            'Task' => str_random(22),
            'Name' => str_random(7),
            'SecondName' => str_random(8).'vych',
            'Post'=>str_random(10).'@gmail.com',
            'Price'=>random_int(0,500)

        ]);
    }
}
