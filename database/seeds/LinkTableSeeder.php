<?php

use Illuminate\Database\Seeder;

class LinkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'url' => 'test01',
            'link_name' => 'test01',
            'comment' => 'test01',
            'user_id' => 1,
        ];
        DB::table('links')->insert($param);

        $param = [
            'url' => 'test02',
            'link_name' => 'test02',
            'comment' => 'test02',
            'user_id' => 2,
        ];
        DB::table('links')->insert($param);

        $param = [
            'url' => 'test03',
            'link_name' => 'test03',
            'comment' => 'test03',
            'user_id' => 3,
        ];
        DB::table('links')->insert($param);
    }
}
