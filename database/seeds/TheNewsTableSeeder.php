<?php

use Illuminate\Database\Seeder;

class TheNewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 11;$i++){
            DB::table('the_news')->insert(
                [
                    'title'=>'news '.$i,
                    'profile'=>'news profile '.$i,
                    'body'=>'news body '.$i,
                    'image'=>'news image '.$i,
                    'tag'=>'news'
                ]
            );
        }
        for ($i = 1; $i < 11;$i++){
            DB::table('the_news')->insert(
                [
                    'title'=>'cases '.$i,
                    'profile'=>'cases profile '.$i,
                    'body'=>'cases body '.$i,
                    'image'=>'cases image '.$i,
                    'tag'=>'cases'
                ]
            );
        }
    }
}
