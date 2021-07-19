<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config("comic");

        foreach ($comics as $item) {
            $comic = new Comic();

            foreach ($item as $key => $value) {
                $comic->{$key} = $value;
            }

            $comic->slug = Str::slug($item["title"], '-');

            $comic->save();
        }
    }
}
