<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $comics = config('dbseeder.comics');
      foreach($comics as $comic){
        $newcomic= new Comic();
        $newcomic->title = $comic['title'];
        $newcomic->description = $comic['description'];
        $newcomic->thumb = $comic['thumb'];
        $newcomic->price = $comic['price'];
        $newcomic->series = $comic['series'];
        $newcomic->sale_date = $comic['sale_date'];
        $newcomic->type = $comic['type'];
        $newcomic->artists = $comic['artists'];
        $newcomic->writers = $comic['writers'];
        $newcomic->save();
      }
    }
}
