<?php

use Illuminate\Database\Seeder;

class Setting extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        \App\Category::create(['name' => 'undefined‏']); 

        \App\Setting::create(['name' => 'delta library','email' => "delta@delta.com"]);
    }
}
