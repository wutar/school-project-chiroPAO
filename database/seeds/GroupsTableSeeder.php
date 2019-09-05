<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insert([
            'name' => 'Ribbels',
            'description' =>'6- tot 8-jarigen. Nieuw sinds 2016, de jongste afdeling, waar jongens en meisjes tussen 6 en 8 jaar wekelijks de wereld samen ontdekken, fantasie ten top! Iedere week opnieuw andere spelletjes, zodat het nooit verveelt. Samen de grote draak verslaan, of de princes redden uit haar toren, een ezel knutselen of een dierentuin uitbouwen, \'t kan allemaal!',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        DB::table('groups')->insert([
            'name' => 'Speelclub',
            'description' =>'8- tot 10-jarigen. Speelclubbers houden van spelen, zo simpel is dat! Ze ontdekken de wereld en zijn onnoemelijk nieuwsgierig. Ze dollen en rennen door het bos, verkleden zich en kruipen allemaal samen voor of zelfs in de poppenkast. Of ze trekken eropuit voor een tocht vol spelletjes, plezante liedjes en gekke opdrachten. Ze worden ook al wat mondiger: de leiding zal het geweten hebben! Bij de speelclub leren kinderen al wat meer samen spelen. Vriendschappen (en kliekjes!) ontstaan, banden worden gesmeed.',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('groups')->insert([
            'name' => 'Rakwi',
            'description' =>'De 10 tot 12-jarigen hangen samen met hun rakwileiding de aap uit. Ze ravotten zich te pletter, trekken eropuit met de fiets en lopen zich de ziel uit het lijf bij een supergroot bosspel. Soms maken ze de gekste creaturen in klei en verkleden ze zich in monsters en draken. Regen en wind houden hen niet tegen om buiten te ravotten. Het liefst springen ze dan nog in een grote plas om lekker vuil te worden. Rakwi’s zijn sterk in het verzamelen van heel wat speledingen, waarmee de leiding toffe spelen verzint.',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('groups')->insert([
            'name' => 'Tito',
            'description' =>'De tito\'s (13-14 jaar) trekken eropuit met de fiets of met de trein om in de een of andere stad een groot zoekspel te doen. Keihard ertegenaan gaan in een pleinspel en graag winnen, door tactiek of door snelheid. Stilvallen om te zwijmelen over een superster of om de laatste stand van zaken in voetballand te bespreken, hoort erbij. Ze schminken zich om het gekst voor een show en zomerse zondagen eindigen steevast in een waterfestijn. Kortom: typisch tito’s',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('groups')->insert([
            'name' => 'Keasp',
            'description' =>'De keasp (14-17 jaar) trekken op avontuur, doen een tweedaagse tocht in de natuur met rugzak en kompas of bouwen zelf een vlot om de rivier over te steken. Ze beulen zich af in een zelfverzonnen sport, of zetten hun lokaal volledig op z’n kop om het een nieuwe look te geven. Het zijn rasacteurs en het duurt vast niet lang voor hun eerste fotoroman verschijnt in een zelfuitgegeven ketiblad. Af en toe staan de aspi\'s stil bij ‘leiding zijn’ of proeven ze van het leiden van een jongere afdeling.',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
    }
}
