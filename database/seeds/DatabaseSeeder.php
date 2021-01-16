<?php

use App\Model\Cart;
use App\Model\Review;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(Cart::class, 30)->create();
        factory(Review::class, 90)->create();
    }
}
