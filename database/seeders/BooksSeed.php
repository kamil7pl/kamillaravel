<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BooksSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titles = array('Pan Tadeusz', 'Grażyna', 'Quo Vadis', 'Potop', 'Lalka', 'Katarynka');
        
            Book::create([
                'author_id' => 1,
                'title' => 'Pan Tadeusz'
            ]);
            Book::create([
                'author_id' => 1,
                'title' => 'Grażyna'
            ]);
            Book::create([
                'author_id' => 2,
                'title' => 'Quo Vadis'
            ]);
            Book::create([
                'author_id' => 2,
                'title' => 'Potop'
            ]);
            Book::create([
                'author_id' => 3,
                'title' => 'Lalka'
            ]);
            Book::create([
                'author_id' => 3,
                'title' => 'Katarynka'
            ]);
            

    }
}
