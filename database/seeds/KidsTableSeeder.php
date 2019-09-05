<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class KidsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Subscribed kids
         */
        DB::table('kids')->insert([
            'name' => 'Anneke',
            'familyname' => 'Declercq',
            'group_id'=>1,
            'birthday'=>Carbon::create(2012, 03, 19, 3, 14, 7, 'GMT'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);

        DB::table('kids')->insert([
            'name' => 'Bertje',
            'familyname' => 'De Smet',
            'group_id'=>2,
            'birthday'=>Carbon::create(2010, 03, 19, 3, 14, 7, 'GMT'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);

        DB::table('kids')->insert([
            'name' => 'Jantje',
            'familyname' => 'Van Hier',
            'group_id'=>3,
            'birthday'=>Carbon::create(2008, 03, 19, 3, 14, 7, 'GMT'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);

        DB::table('kids')->insert([
            'name' => 'Lies',
            'familyname' => 'Willems',
            'group_id'=>4,
            'birthday'=>Carbon::create(2006, 03, 19, 3, 14, 7, 'GMT'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);

        DB::table('kids')->insert([
            'name' => 'Emma',
            'familyname' => 'Willems',
            'group_id'=>5,
            'birthday'=>Carbon::create(2004, 03, 19, 3, 14, 7, 'GMT'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);

        /**
         * Unsubscribed kids
         */

        DB::table('kids')->insert([
            'name' => 'Josse',
            'familyname' => 'Devriendt',
            'group_id'=>1,
            'subscribed' => 1,
            'birthday'=>Carbon::create(2012, 03, 19, 3, 14, 7, 'GMT'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);

        DB::table('kids')->insert([
            'name' => 'Seppe',
            'familyname' => 'Naessens',
            'group_id'=>2,
            'subscribed' => 1,
            'birthday'=>Carbon::create(2010, 03, 19, 3, 14, 7, 'GMT'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);

        DB::table('kids')->insert([
            'name' => 'Ferre',
            'familyname' => 'De Baets',
            'group_id'=>3,
            'subscribed' => 1,
            'birthday'=>Carbon::create(2008, 03, 19, 3, 14, 7, 'GMT'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);

        DB::table('kids')->insert([
            'name' => 'Oscar',
            'familyname' => 'Claeys',
            'group_id'=>4,
            'subscribed' => 1,
            'birthday'=>Carbon::create(2006, 03, 19, 3, 14, 7, 'GMT'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);

        DB::table('kids')->insert([
            'name' => 'Timon',
            'familyname' => 'Van Rie',
            'group_id'=>5,
            'subscribed' => 1,
            'birthday'=>Carbon::create(2004, 03, 19, 3, 14, 7, 'GMT'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
    }
}
