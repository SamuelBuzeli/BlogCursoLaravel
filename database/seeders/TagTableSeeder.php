<?php

namespace Database\Seeders;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Tag::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
       //Tag::truncate();
       
       Tag::factory()->count(15)->create();



    }
}
