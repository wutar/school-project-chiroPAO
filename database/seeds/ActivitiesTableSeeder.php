<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activities')->insert([
            'title' => 'De Ribbels  spelen buiten',
            'description' => 'Deze zondag spelen de ribbels buiten. Ze zullen onder andere spelletjes spelen met de parachute',
            'group_id' => 1,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('activities')->insert([
            'title' => 'Speelclub speelt binnen',
            'description' => 'De speelclub speelt deze zondag binnen. Leidster Saar brengt haar favoriete gezelschapsspelletjes mee.',
            'group_id' => 2,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        DB::table('activities')->insert([
            'title' => 'Verjaardagsfeest voor Niels',
            'description' => 'Dit weekend verjaart leider Niels, en dat zal bij de rakwi niet onopgemerkt voorbijgaan. Hij organiseert een heus verjaardagsfeest',
            'group_id' => 3,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        DB::table('activities')->insert([
            'title' => 'Escape room',
            'description' => 'De tito\'s worden opgesloten in een heuse gevangenis, en zullen alle opdrachten moeten volbrengen om ',
            'group_id' => 4,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        DB::table('activities')->insert([
            'title' => 'Kayak',
            'description' => 'De keasp gaat kayakken in Gent. ',
            'group_id' => 5,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('activities')->insert([
            'title' => 'Weekend',
            'description' => 'De keasp gaat op weekend naar Donk. ',
            'group_id' => 5,
            'created_at'=>Carbon::yesterday(),
            'updated_at'=>Carbon::now()
        ]);

    }
}
