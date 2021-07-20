<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authors = array('Adam Mickiewicz', 'Henryk Sienkiewicz', 'Bolesław Prus');
        foreach($authors as $author)
            Author::create([
                'name' => $author
            ]);

    }
}
