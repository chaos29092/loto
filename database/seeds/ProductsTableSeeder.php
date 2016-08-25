<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($c=1;$c<7;$c++)
        {
            for ($i=1;$i<5;$i++)
            {
                DB::table('products')->insert([
                    'name'=>'product name '.$c.$i,
                    'title'=>'product title'.$c.$i,
                    'description'=>'description '.$c.$i,
                    'keywords'=>'keywords '.$c.$i,
                    'mainpic'=>'mainpic '.$c.$i,
                    'profile'=>'profile '.$c.$i,
                    'main'=>'main '.$c.$i,
                    'standard'=>'standard '.$c.$i,
                    'options'=>'options '.$c.$i,
                    'categorypic'=>'categorypic '.$c.$i,
                    'categorypara'=>'categorypara '.$c.$i,
                    'category_id'=>$c,
                ]);
            } 
        }
        
    }
}
