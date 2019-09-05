<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'title' => 'Lotjesverkoop gaat door ',
            'content' => 'op 26 mei is het lotjesverkoop en dan verkopen we lotjes bij de verkiezingen enal',
            'author_id' => 1,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('articles')->insert([
            'title' => 'Lotjesverkoop gaat door ',
            'content' => 'op 26 mei is het lotjesverkoop en dan verkopen we lotjes bij de verkiezingen enal',
            'author_id' => 1,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('articles')->insert([
            'title' => 'Lotjesverkoop gaat door ',
            'content' => 'op 26 mei is het lotjesverkoop en dan verkopen we lotjes bij de verkiezingen enal',
            'author_id' => 2,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
    }
}
