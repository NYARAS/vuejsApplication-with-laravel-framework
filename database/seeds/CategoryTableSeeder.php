<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1,5) as $c)
        {
        $category  =  Category::create(['name' => "Category {$c}"]);

        $subcategories = [];
         foreach (range(1, rand(1,5)) as $s) 
         {
             $subcategories[] = ['name' => "Sub Category {$c} {$s}" ];
         }


        $category -> subcategories()->createMany($subcategories);
        }
    }
}
