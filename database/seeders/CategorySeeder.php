<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name = "Cuộc sống";
        $category->save();

        $category = new Category();
        $category->name = "Tình yêu";
        $category->save();

        $category = new Category();
        $category->name = "Lịch sử";
        $category->save();
    }
}
