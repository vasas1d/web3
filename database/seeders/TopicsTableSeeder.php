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
        Topic::create(['name'=>'Soccer', 'description'=> 'At the top of the list of Most Popular Sports is soccer, with 3.3-3.5 billion fans all over the world.']);
        Topic::create(['name'=>'Cricket','description'=> 'Cricket is the 2nd Most Popular Sport in the World with 2-3 billion fans (Across India, the UK, Pakistan, Asia, Australia, etc).']);
        Topic::create(['name'=>'Basketball','description'=> 'With approximately 2-3 billion fans in the US, Canada, China, and the Philippines, Basketball is the 3rd most popular sport in the world.']);
        Topic::create(['name'=>'Field Hockey','description'=> 'Hockey [field + Ice] is the 3rd Most Popular Sport on Earth, with 2-2.2 billion fans in Asia, Europe, Africa, Australia, etc.']);
        Topic::create(['name'=>'Tennis','description'=> 'At No 5 on this list is Tennis. with around 1 billion fans in Europe, America, and Asia.']);
        Topic::create(['name'=>'Volleyball','description'=> 'With around 900 million fans across Asia, Europe, the Americas, and Australia, Volleyball is the 6th Most Popular Sport in the World']);
        Topic::create(['name'=>'Table Tennis','description'=> 'Around 850 million fans from Asia, Europe, Africa, and the Americas make Table Tennis the 7th most popular sport in the world.']);
        Topic::create(['name'=>'Baseball','description'=> 'There are Around 500 million fans in the US, Japan, Cuba, and the Dominican Republic, making Baseball the 8th Most Popular Sport in the World.']);
        Topic::create(['name'=>'American Football','description'=> 'The 9th most popular sport with around 390-410 million fans (France, England, New Zealand, and South Africa mainly).']);
        Topic::create(['name'=>'Golf','description'=> 'Golf is at No 10 in popularity in the world, among other sports. With more than 390 million fans in the USA, Canada, and Europe.']);
    }
}
