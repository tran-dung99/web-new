<?php

namespace Database\Seeders;

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Post::factory(15)->create();
    }
}
