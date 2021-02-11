<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


       DB::table("categories")->insertGetId(['category_title'=> 'Product Design', 'slug' => 'product-design']);
       DB::table("categories")->insertGetId(['category_title'=> '3D Works', 'slug' => '3d-works']);
       DB::table("categories")->insertGetId(['category_title'=> 'POSM & Exhibition Design', 'slug' => 'product-design']);
       DB::table("categories")->insertGetId(['category_title'=> 'Graphic Design', 'slug' => 'graphic-design']);

    }
}
