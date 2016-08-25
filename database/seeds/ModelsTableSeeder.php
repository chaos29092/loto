<?php

use Illuminate\Database\Seeder;

class ModelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($p=1;$p<31;$p++)
        {
            for ($i=0;$i<3;$i++)
            {
                DB::table('product_models')->insert(
                    [
                        'name'=>'model name '.$i,
                        'main'=>'main table '.$i,
                        'more'=>'more table '.$i,
                        'product_id'=>$p,
                    ]
                );
            }
        }
    }
}
