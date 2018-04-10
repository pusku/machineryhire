<?php

use Illuminate\Database\Seeder;
use Faker;

class categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker =Faker\Factory::create();
        
	    	DB::table('categories')->insert([
	            'id' =>0,
	            'name' =>'None',
	          
	            'parent'=>0
	        ]);
	        DB::table('categories')->insert([
	            
	            'name' =>'Construction Equipment',
	           
	            'parent'=>0
	        ]);
	    
    }
}
