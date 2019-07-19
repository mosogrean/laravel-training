<?php

use Illuminate\Database\Seeder;
use App\Book;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Book::create([
        //     'writer' => 'oat',
        //     'book_name' => 'percy',
        //     'type' => 'fantacy',
        //     'price' => 60,
        // ]);
        factory(Book::class, 2)->create();
    }
}
