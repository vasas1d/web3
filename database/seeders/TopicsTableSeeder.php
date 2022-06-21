<?php

namespace Database\Seeders;

use App\Models\Topic;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class TopicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Topic::create(['name'=>'World', 'description'=> 'Marco Rossi for President']);
        Topic::create(['name'=>'U.S.','description'=> 'Marco Rossi for President']);
        Topic::create(['name'=>'Technology','description'=> 'Marco Rossi for President']);
        Topic::create(['name'=>'Design','description'=> 'Marco Rossi for President']);
        Topic::create(['name'=>'Culture','description'=> 'Marco Rossi for President']);
        Topic::create(['name'=>'Business','description'=> 'Marco Rossi for President']);
        Topic::create(['name'=>'Politics','description'=> 'Marco Rossi for President']);
        Topic::create(['name'=>'Opinion','description'=> 'Marco Rossi for President']);
        Topic::create(['name'=>'Science','description'=> 'Marco Rossi for President']);
        Topic::create(['name'=>'Health','description'=> 'Marco Rossi for President']);
        Topic::create(['name'=>'Style','description'=> 'Marco Rossi for President']);
        Topic::create(['name'=>'Travel', 'description'=> 'Marco Rossi for President']);
    }
}
