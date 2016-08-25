<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=1;$i<7;$i++)
        {
            DB::table('categories')->insert([
                'name' => 'cate_'.$i,
                'max_temp'=>'max_temp '.$i,
                'main_pic'=>'main_pic '.$i,
                'banner'=>'banner '.$i,
                'description'=>'description '.$i,
            ]);
        }
    }
}
