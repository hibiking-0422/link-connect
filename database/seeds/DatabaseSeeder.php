<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(TodoTableSeeder::class);    //todoテーブルに初期値入れる
        $this->call(LinkTableSeeder::class);    //linksテーブルに初期値入れる
    }
}
