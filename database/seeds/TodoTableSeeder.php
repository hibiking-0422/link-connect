<?php

use Illuminate\Database\Seeder;

class TodoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'title' => 'test01',
            'details' => 'test01'
        ];
        DB::table('todo')->insert($param);

        $param = [
            'title' => 'test02',
            'details' => 'test02'
        ];
        DB::table('todo')->insert($param);

        $param = [
            'title' => 'test03',
            'details' => 'test03'
        ];
        DB::table('todo')->insert($param);
    }
}
