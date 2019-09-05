<?php

use Illuminate\Database\Seeder;

class UsersKidsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users_kids')->insert([
            'kid_id'=>1,
            'user_id'=>19,
        ]);

        DB::table('users_kids')->insert([
            'kid_id'=>2,
            'user_id'=>20,
        ]);

        DB::table('users_kids')->insert([
            'kid_id'=>3,
            'user_id'=>21,
        ]);

        DB::table('users_kids')->insert([
            'kid_id'=>4,
            'user_id'=>22,
        ]);

        DB::table('users_kids')->insert([
            'kid_id'=>5,
            'user_id'=>23,
        ]);

        DB::table('users_kids')->insert([
            'kid_id'=>6,
            'user_id'=>24,
        ]);

        DB::table('users_kids')->insert([
            'kid_id'=>7,
            'user_id'=>25,
        ]);

        DB::table('users_kids')->insert([
            'kid_id'=>8,
            'user_id'=>26,
        ]);

        DB::table('users_kids')->insert([
            'kid_id'=>9,
            'user_id'=>27,
        ]);

        DB::table('users_kids')->insert([
            'kid_id'=>10,
            'user_id'=>28,
        ]);
    }
}
