<?php

use Illuminate\Database\Seeder;

class TechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
       	 DB::table('technologies')->insert([
           	 'tech_name'=>'PHP',
           	 
       	 ]);
   	 }
	
    
}
