<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'title' => 'Spaghettiavond',
            'description' => 'Op zaterdag 20 oktober is het weer tijd voor onze jaarlijkse spaghettiavond. Dit jaar zal deze leuke avond doorgaan in het Koninklijk Atheneum Courtmans in Maldegem. Iedereen is welkom vanaf 18u
                Na het verorberen van onze lekkere spaghetti dompelen we jullie onder in kampherinneringen en leuke verhalen. De fotoshow met muziek is zonder twijfel het moment bij uitstek om die gekke stoten van op kamp te herdenken.
                Dit jaar werken we weer met een usb-stick waarop de kampfoto’s staan. U kan een usb-stick kopen voor €7,50. Deze usb-stick heeft een grootte van 16GB en bevat alle kampfoto’s. De stick is in de vorm van een armbandje zodat uw kind deze gemakkelijk kan bijhouden rond de pols.',
            'date' => Carbon::create(2019, 10, 20, 3, 14, 7, 'GMT'),
            'price' => 12.0,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('events')->insert([
            'title' => 'Kinderfuif',
            'description' => 'Hier is hij weer, onze jaarlijkse kinderfuif.
            Breng allemaal jullie vriendjes en vriendinnetjes mee en dans op de beats van onze Chiro-dj\'s .
            Ouders, niet getreurd! Wanneer uw sloeber zich de voeten vanonder het lijf danst kan u genieten van een drankje in de bar van Jeugdhuis de Redekiel.
            Vanaf 19u is iedereen welkom, en om 20:30 is het feestje afgelopen.
            De inkom is gratis, maar tijdens het feestje worden er drankjes en hotdogs voorzien die wel te betalen zijn (via drankkaarten) .',
            'date' => Carbon::create(2020, 03, 19, 3, 14, 7, 'GMT'),
            'price' => 2.0,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('events')->insert([
            'title' => 'Winteractiviteit',
            'description' => 'Het nieuwe jaar is alweer een tijdje van start gegaan en dit wil zeggen een nieuw jaar vol leuke chiroactiviteiten! Hierbij mag zeker onze winteractiviteit niet vergeten worden. Net als vorig jaar trekken we onze schaatsen aan en gaan we schaatsen.
            Dit doen we op 17 februari op de ijspiste in Maldegem.
            Hiervoor spreken we uitzonderlijk af om 13:30u  aan onze lokalen, zodat we om 14:00u kunnen beginnen met schaatsen.
            De kostprijs voor deze activiteit bedraagt 3,5 euro.
            Na het schaatsen krijgen de kinderen nog een lekkere warme chocomelk.
            Belangrijk is dat je zeker niet vergeet dikke,warme kousen en handschoenen mee te brengen.',
            'date' => Carbon::create(2020, 02, 17, 3, 14, 7, 'GMT'),
            'price' => 3.5,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('events')->insert([
            'title' => 'Carnaval',
            'description' => '',
            'date' => Carbon::create(2020, 03, 15, 3, 14, 7, 'GMT'),
            'price' => 2.0,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('events')->insert([
            'title' => 'Slotactiviteit',
            'description' => 'Zoals we allemaal al weten loopt het Chirojaar bijna ten einde maar niet getreurd! We hebben nog een spetterend kamp voor de boeg. Maar voor we wegdromen over kamp hebben we nog één zondagmiddag te gaan. Als allerlaatste Chirozondag van dit jaar organiseren we op zondag 30 juni de slotactiviteit.
            Bij goed weer gaan we met zijn allen naar de Boerekreek in Sint-Laureins. Daar kunnen we genieten van het mooie weer en pootje baden in het water. Indien we wat minder geluk hebben met het weer gaan we naar de Sportoase in Knokke. Een zwembad voor groot en klein waar de regen de pret niet zal bederven.',
            'date' => Carbon::create(2020, 06, 30, 3, 14, 7, 'GMT'),
            'price' => 5.0,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
    }
}
