<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class LeadersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Ribbel leaders
         */
        DB::table('leaders')->insert([
            'name' => 'Victor',
            'familyname' => 'Van Rie',
            'resume'=>'Victor gaat zijn eerste jaar als ribbelleider in. Deze 16 jarige knaap zit al 10 jaar in onze Chiro. Victor zit in zijn laatste jaar wetenschappen wiskunde 8u wiskunde. Naast de Chiro en zijn studies houdt Victor zich vooral bezig met drummen en helpen in jeugdhuis De Redekiel. Zijn leukste kampherinnering is de 2daagse waarbij ze in een schuur mochten slapen en een kampvuur mochten maken. Victor heeft ervoor gekozen om leiding te worden om de kleine kindjes te amuseren, en hen een leuke zondagmiddag te bezorgen.',
            'group_id'=>1,
            'event_id'=>1,  //lotjesverkoop
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'user_id' => 1
        ]);

        DB::table('leaders')->insert([
            'name' => 'Leonie',
            'familyname' => 'Bonne',
            'resume'=>'Leonie is 20 jaar en zit al sinds haar eerste jaar Rakwi in de leiding. Haar 4e jaar als leiding zal ze tussen de ribbels doorbrengen. Leonie studeert voor leerkracht lager onderwijs. Daarmee wil ze later graag les gaan geven in de kansarme gebieden zodat ze mensen uit die vicieuze cirkel kan halen. Leonie is graag met kindjes bezig en vindt niets leuker dan ze elke zondag te zien genieten van een spel dat eens los staat van elektronica dingen.',
            'group_id'=>1,
            'event_id'=>2, //kinderfuif
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'user_id' => 2
        ]);

        DB::table('leaders')->insert([
            'name' => 'Lotte',
            'familyname' => 'Notteboom',
            'resume'=>'Lotte Notteboom is 18 jaar en is dit jaar aan haar 2e jaar leiding gestart. Ze is in haar eerste jaar Rakwi bij onze Chiro terecht gekomen, en is nu dus al 10 jaar in ons midden. Naast de Chiro is Lotte vooral bezig met haar studie Bachelor interieurarchitectuur, waar ze leert hoe je huizen en dergelijke moet inrichten. Lotte haalt haar motivatie om leiding te zijn vooral uit de schattige kinderen die iedere keer opnieuw het kind in haar naar boven halen',
            'group_id'=>1,
            'event_id'=>3, //winteractiviteit
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'user_id' => 3
        ]);

        DB::table('leaders')->insert([
            'name'=>'Seppe',
            'familyname' => 'Keen',
            'resume'=>'Seppe Keen is 16 jaar en zit al sinds zijn eerste jaar speelclub in de Chiro. Zijn eerste jaar leidings zal als ribbelleider zijn. Naast de Chiro voetbalt hij bij de beloften van KSK Maldegem, speelt hij samen met Victor in de Band BtN, is hij vrijwilliger in jeugdhuis De Redekiel en speelt hij altsax bij Nut & Vermaak. Zijn mooiste kampherinerring is het kampvuur. Seppe is leiding geworden omdat hij graag kinderen animeert, en voor de hechte groepsband in de leiding',
            'group_id'=>1,
            'event_id'=>4, //carnaval
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'user_id' => 4
        ]);

        DB::table('leaders')->insert([
            'name' => 'Idoia',
            'familyname' => 'Puype',
            'resume'=>'Idoia is 20 jaar en zit al sinds de Rawki’s bij onze Chiro. Dit jaar is haar 4e jaar als leiding, waarin ze nog eens de speelclubbers onder haar schouders neemt. Naast de Chiro doet Idoia van alles en nog wat, maar eens een avondje thuis zitten doet ze ook eens graag. Ze studeert verpleegkunde en heeft nog niet direct toekomstplannen, want te voorspelbaar is ook niet leuk! Ze is graag leiding omdat ze ziet hoe hard de kindjes genieten van een leuk en oud spel. Voor haarzelf is het ook heel leuk want soms op zondag voel ze zichzelf dan nog wel eens kind als ze meespeelt met een spelletje, door gewoon even te ravotten en aan niks anders denken. Ook het samen zijn met de medeleiding is iets waar je (bijna) ieder moment van geniet, als is het door gewoon onnozeligheden!',
            'group_id'=>2,
            'event_id'=>5, //slotactiviteit
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'user_id' => 5
        ]);

        DB::table('leaders')->insert([
            'name' => 'Shania',
            'familyname' => 'De Maertelaere',
            'resume'=>'Shania is 18 jaar en geeft in haar eerste jaar leiding aan de speelclubbers. Ze is al lid sinds het tweede jaar tito, en is nu dus aan het 5e jaar bij onze Chiro toe. Shania studeert landbouw en werkt in haar vrije tijd nog bij frituur Martens en in dierenhotel De Hoeve. Haar leukste Chiroherinneringen moeten de tweedaagse’s zijn, en het vuil spel dit jaar. Shania wilde leiding worden omdat ze vroeger altijd al heeft opgekeken naar de leiding van gelijk welke jeugdbeweging. Ze zet haar graag in en het helpt haar zeker om de sociale contacten te onderhouden!',
            'group_id'=>2,
            'event_id'=>1,  //lotjesverkoop
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'user_id' => 6
        ]);

        DB::table('leaders')->insert([
            'name' => 'Saar',
            'familyname' => 'Notteboom',
            'resume'=>'Ook Saar begint aan haar 2e jaar als leiding. Dit jaar neemt ze de speelclubbers onder haar vleugels. Ze is 18 jaar en zit al sinds het de rakwi’s in onze Chiro, waardoor ze nu al 10 jaar bij ons is. Naast de Chiro speelt ze piano als hobby. Saar is begonnen aan haar eerste jaar farmaceutische wetenschappen. Hier leert ze medicijnen maken en verbeteren. In de toekomst wil ze daar vooral mee in de industrie aan de slag gaan. Saar blijft zich keer op keer inzetten voor de Chiro vanwege de fantastische chirosfeer en de liefde die ze van de kinderen terugkrijgt.',
            'group_id'=>2,
            'event_id'=>2, //kinderfuif
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'user_id' => 7
        ]);

        DB::table('leaders')->insert([
            'name' => 'Sebastian',
            'familyname' => 'Mortier',
            'resume'=>'Seba is 17 jaar en start dit jaar aan zijn eerste jaar als speelclubleider. Seba is bij onze Chiro gekomen bij de tito’s en zit nu aan zijn 5e jaar als lid van Chiro Maldegem. Naast de Chiro houdt hij zich vooral bezig met tekenen, graffiti, helpen in het jeugdhuis en met zijn vrienden op stap gaan. Seba zit in het 6e middelbaar wetenschappen-wiskunde 8u wiskunde, en verdient in zijn vrije tijd een centje bij als barman in ’t Voske. Hij ziet zichzelf later trouwens wel werken in een brouwerij of café! Seba is leiding geworden om iets te kunnen betekenen voor de kindjes, en om met de vrienden samen te kunnen zijn',
            'group_id'=>2,
            'event_id'=>3, //winteractiviteit
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'user_id' => 8
        ]);

        DB::table('leaders')->insert([
            'name' => 'Cas',
            'familyname' => 'Demeulenaere',
            'resume'=>'Cas Demeulenaere gaat ook zijn eerste jaar als leider in. Deze 17 jarige knaap zal dit jaar tussen de speelclubbers te vinden zijn. Hij zit al sinds de speelclub in de Chiro en is dus al 11 jaar in ons midden te vinden. Cas studeert ASO economie moderne talen in de Maricolen Maldegem. Hierbij zijn economie, Frans, Duits en Engels zijn hoofdvakken. Na deze studies zou hij graag criminologie studeren aan de universiteit van Gent en later wil hij bij de federale recherche gaan. Cas wist al van kleins af aan dat hij leiding wilde worden, maar toen leider Aaron vorig jaar zei dat de Chiro nu in hun handen ligt is dit alleen maar versterkt',
            'group_id'=>2,
            'event_id'=>4, //carnaval
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'user_id' => 9
        ]);

        DB::table('leaders')->insert([
            'name'=>'Milan',
            'familyname' => 'Claeys',
            'resume'=>'Milan is bijna 17 en geeft dit jaar voor het eerst leiding aan de rakwi’s. Hij zit al sinds de speelclubbers in de Chiro en is dus al 11 jaar lid bij ons. Ook naast de Chiro is Milan een sportieve kerel en houdt hij zich bezig met voetbal, koersen en survival. Milan zit in zijn laatste jaar wetenschappen wiskunde 6u wiskunde. Zijn mooiste kampherinnering is de nachtelijke fietstocht richting een mysterieuze weerballon, die uiteindelijk de maan bleek te zijn. Milan is vooral leiding geworden omdat hij graag iets voor de Chiro wil doen, en omdat hij graag met kinderen bezig is',
            'group_id'=>3,
            'event_id'=>5, //slotactiviteit
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'user_id' => 10
        ]);

        DB::table('leaders')->insert([
            'name' => 'Niels',
            'familyname' => 'De Baets',
            'resume'=>'',
            'group_id'=>3,
            'event_id'=>1,  //lotjesverkoop
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'user_id' => 11
        ]);

        DB::table('leaders')->insert([
            'name' => 'Matisse',
            'familyname' => 'Maes',
            'resume'=>'Niels is ook één van de oude rotten van de leidingsploeg. Zijn zesde jaar leiding zal nog eens als Rakwileider zijn. Naast de Chiro beoefent hij nog trialbike en rijdt hij wel eens rond met de koersfiets. Niels is net als vorig jaar de enige leider die al werkt. Dit doet hij als projectleider/ontwerper bij SMO in Eeklo, wat inhoudt dat hij machines op vraag van klanten ontwerpt en uitwerkt, en dan een team van monteurs aanstuurt om die projecten tot een goed einde te brengen. Niels zet zich in voor de Chiro dankzij de fantastische sfeer van jongeren die zich belangeloos inzetten voor kinderen, en dankzij de kinderen die zich zo amuseren en jaar na jaar dingen bijleren',
            'group_id'=>3,
            'event_id'=>2, //kinderfuif
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'user_id' => 12
        ]);
        DB::table('leaders')->insert([
            'name' => 'Aukje',
            'familyname' => 'Van Rie',
            'resume'=>'Aukje is 17 jaar en begint aan haar eerste jaar leiding in onze Chiro. Ze zit sinds haar 2e jaar speelclub bij onze Chiro en zal zich dit jaar ontfermen over de rakwi’s. Naast de Chiro houdt Aukje van dansen, uitgaan, en geeft ze zwemles. Ze zit in het zesde jaar wetenschappen-wiskunde op het Atheneum in Maldegem. Aukje heeft ervoor gekozen leiding te worden om de kindjes een leuke Chiromiddag/kamp te bezorgen, om ze te motiveren naar de Chiro te komen, en ook wel omdat uitgaan met de leiding geniaal is',
            'group_id'=>3,
            'event_id'=>3, //winteractiviteit
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'user_id' => 13
        ]);

        DB::table('leaders')->insert([
            'name' => 'Charlotte',
            'familyname' => 'Bonne',
            'resume'=>'',
            'group_id'=>4,
            'event_id'=>4, //carnaval
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'user_id' => 14
        ]);

        DB::table('leaders')->insert([
            'name' => 'Simeon',
            'familyname' => 'Van Canneyt',
            'resume'=>'Simeon is 18 jaar en start aan zijn 2e jaar in de leidingsploeg, ditmaal bij de Tito’s. Hij zit al sinds de speelclub in de Chiro, wat dit zijn 12e jaar bij ons maakt. Naast de Chiro houdt hij zich bezig met creatief bezig zijn en uitgaan. Hij start dit jaar aan zijn zevende jaar muziekproductie: Hier wordt hij klaar gestoomd om verdere studies te starten die hem zullen leren hoe hij in een studio liedjes maakt. Hiermee hoopt hij in de toekomst ergens op een groot podium te belanden. Zijn mooist kampherinnering is de kindjes zicht helpen opmaken voor Discoavond. Simeon vindt de Chiro fantastisch: Een ubercoole vriendengroep die er samen tegen aangaat om zich in te zetten voor de jeugd',
            'group_id'=>4,
            'event_id'=>5, //slotactiviteit
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'user_id' => 15
        ]);

        DB::table('leaders')->insert([
            'name' => 'Maaike',
            'familyname' => 'Claeys',
            'resume'=>'Maaike is één van de nieuwe aanwinsten in onze leidingsploeg. Ze is 17 jaar en begint haar leidingscarrière als titoleiding. Ze zit in het 6e middelbaar verzorging, waar ze leert hoe ze kleine kinderen en ouderen de beste zorg kan toedienen. Maaike wil vooral leiding zijn om iets te betekenen voor kinderen en jongeren, om samen plezier te maken en er een fantastisch Chirojaar van te maken',
            'group_id'=>4,
            'event_id'=>1,  //lotjesverkoop
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'user_id' => 16
        ]);

        DB::table('leaders')->insert([
            'name'=>'Wouter',
            'familyname' => 'Standaert',
            'resume'=>'Ook Wouter is stillaan een oude rot in het vak aan het worden. Zijn vijfde jaar als leiding zal hij als KeAspleider doorbrengen. Hij is al lid sinds de speelclub (nu ribbels) en zit nu zijn 16e jaar bij ons. Net als Lukas studeert hij ICT aan odisee. . Hij leert er vooral programmeren en het opzetten en beheren van systemen en netwerken. Zijn afstudeerrichting is Web and mobile Development, dus de focus ligt op het ontwikkelen van websites en mobiele applicaties. Zijn mooiste kampherinnering is het moment dat de zon opkomt terwijl we nog rond het kampvuur spelletjes zitten te spelen. Wouter houdt ervan om met kindjes en jongeren bezig te zijn en te zorgen dat iedereen een leuke dag heeft.',
            'group_id'=>5,
            'event_id'=>2, //kinderfuif
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'user_id' => 17
        ]);

        DB::table('leaders')->insert([
            'name' => 'Lukas',
            'familyname' => 'Petit',
            'resume'=>'Lukas Petit begint aan zijn 4e jaar als leiding, en dit als KeAspleider! Lukas is 19 jaar en zit al sinds het de rakwi in onze Chiro. Ook naast de Chiro is Lukas nog een bezige bij: Frisbeeën, Oranje, organiseren bij Student-KickOff, Spikeballen, Diggie, uitgaan, hij doet het allemaal! Lukas studeert ICT aan Odisee in Gent. Hij koos IT – infrastructuur als afstudeerrichting. Dit wil zeggen dat hij alles leert over hoe een computer werkt, hoe gegevens doorgespeeld en opgeslaan worden, hoe het komt dat we allemaal “internet” hebben en met mekaar kunnen communiceren, … Ook leert hij verschillende programmeertalen om verschillende programma’s te schrijven.',
            'group_id'=>5,
            'event_id'=>3, //winteractiviteit
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'user_id' => 18
        ]);

    }
}
