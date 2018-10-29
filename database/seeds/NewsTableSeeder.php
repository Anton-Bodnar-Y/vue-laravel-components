<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
			[
				'title' => 'dfglkdfmgldkmfg lkmdfglkm',
			],
			[
				'title' => 'dfglkdfmgldkmfg lkmdfglkm',
			],
			[
				'title' => 'dfglkdfmgldkmfg lkmdfglkm',
			],
			[
				'title' => 'dfglkdfmgldkmfg lkmdfglkm',
			],
			[
				'title' => 'dfglkdfmgldkmfg lkmdfglkm',
			],
			
		]);
    }
}
