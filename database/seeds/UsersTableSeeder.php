<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        /**
         * Leader accounts
         */
        DB::table('users')->insert([
            'name' => 'Victor',
            'email' => 'victor@mail.be',
            'email_verified_at'=>Carbon::now(),
            'password'=>bcrypt('azerty123'),
            'telephone'=>'0412345678',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('users')->insert([
            'name' => 'Leonie',
            'email' => 'leonie@mail.be',
            'email_verified_at'=>Carbon::now(),
            'password'=>bcrypt('azerty123'),
            'telephone'=>'0412345678',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'Lotte',
            'email' => 'lotte@mail.be',
            'email_verified_at'=>Carbon::now(),
            'password'=>bcrypt('azerty123'),
            'telephone'=>'0412345678',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'Seppe',
            'email' => 'seppe@mail.be',
            'email_verified_at'=>Carbon::now(),
            'password'=>bcrypt('azerty123'),
            'telephone'=>'0412345678',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'Idoia',
            'email' => 'idoia@mail.be',
            'email_verified_at'=>Carbon::now(),
            'password'=>bcrypt('azerty123'),
            'telephone'=>'0412345678',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'Shania',
            'email' => 'shania@mail.be',
            'email_verified_at'=>Carbon::now(),
            'password'=>bcrypt('azerty123'),
            'telephone'=>'0412345678',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'Saar',
            'email' => 'saar@mail.be',
            'email_verified_at'=>Carbon::now(),
            'password'=>bcrypt('azerty123'),
            'telephone'=>'0412345678',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'Sebastian',
            'email' => 'seba@mail.be',
            'email_verified_at'=>Carbon::now(),
            'password'=>bcrypt('azerty123'),
            'telephone'=>'0412345678',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'Cas',
            'email' => 'cas@mail.be',
            'email_verified_at'=>Carbon::now(),
            'password'=>bcrypt('azerty123'),
            'telephone'=>'0412345678',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'Milan',
            'email' => 'milan@mail.be',
            'email_verified_at'=>Carbon::now(),
            'password'=>bcrypt('azerty123'),
            'telephone'=>'0412345678',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'Niels',
            'email' => 'niels@mail.be',
            'email_verified_at'=>Carbon::now(),
            'password'=>bcrypt('azerty123'),
            'telephone'=>'0412345678',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'Matisse',
            'email' => 'matisse@mail.be',
            'email_verified_at'=>Carbon::now(),
            'password'=>bcrypt('azerty123'),
            'telephone'=>'0412345678',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'Aukje',
            'email' => 'aukje@mail.be',
            'email_verified_at'=>Carbon::now(),
            'password'=>bcrypt('azerty123'),
            'telephone'=>'0412345678',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'Charlotte',
            'email' => 'charlotte@mail.be',
            'email_verified_at'=>Carbon::now(),
            'password'=>bcrypt('azerty123'),
            'telephone'=>'0412345678',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'Simeon',
            'email' => 'simeon@mail.be',
            'email_verified_at'=>Carbon::now(),
            'password'=>bcrypt('azerty123'),
            'telephone'=>'0412345678',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'Maaike',
            'email' => 'maaike@mail.be',
            'email_verified_at'=>Carbon::now(),
            'password'=>bcrypt('azerty123'),
            'telephone'=>'0412345678',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'Wouter',
            'email' => 'wouter@mail.be',
            'email_verified_at'=>Carbon::now(),
            'password'=>bcrypt('azerty123'),
            'telephone'=>'0412345678',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'Lukas',
            'email' => 'lukas@mail.be',
            'email_verified_at'=>Carbon::now(),
            'password'=>bcrypt('azerty123'),
            'telephone'=>'0412345678',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);


        /**
         * Parents who's kids subscribed
         */

        //ribbel parent
        DB::table('users')->insert([
            'name' => 'Sandra',
            'email' => 'sandra@mail.be',
            'email_verified_at'=>Carbon::now(),
            'password'=>bcrypt('azerty123'),
            'telephone'=>'0412345678',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        //speelclub parent
        DB::table('users')->insert([
            'name' => 'Koen',
            'email' => 'koen@mail.be',
            'email_verified_at'=>Carbon::now(),
            'password'=>bcrypt('azerty123'),
            'telephone'=>'0412345678',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        //rakwi parent
        DB::table('users')->insert([
            'name' => 'Mark',
            'email' => 'mark@mail.be',
            'email_verified_at'=>Carbon::now(),
            'password'=>bcrypt('azerty123'),
            'telephone'=>'0412345678',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        //tito parent
        DB::table('users')->insert([
            'name' => 'Peter',
            'email' => 'peter@mail.be',
            'email_verified_at'=>Carbon::now(),
            'password'=>bcrypt('azerty123'),
            'telephone'=>'0412345678',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        //keasp parent
        DB::table('users')->insert([
            'name' => 'Carine',
            'email' => 'carine@mail.be',
            'email_verified_at'=>Carbon::now(),
            'password'=>bcrypt('azerty123'),
            'telephone'=>'0412345678',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        /**
         * Parents who's kids didn't subscribe
         */

        //ribbel parent
        DB::table('users')->insert([
            'name' => 'Stefaan',
            'email' => 'stefaan@mail.be',
            'email_verified_at'=>Carbon::now(),
            'password'=>bcrypt('azerty123'),
            'telephone'=>'0412345678',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        //speelclub parent
        DB::table('users')->insert([
            'name' => 'Steven',
            'email' => 'steven@mail.be',
            'email_verified_at'=>Carbon::now(),
            'password'=>bcrypt('azerty123'),
            'telephone'=>'0412345678',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        //rakwi parent
        DB::table('users')->insert([
            'name' => 'Kim',
            'email' => 'kim@mail.be',
            'email_verified_at'=>Carbon::now(),
            'password'=>bcrypt('azerty123'),
            'telephone'=>'0412345678',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        //tito parent
        DB::table('users')->insert([
            'name' => 'Manfred',
            'email' => 'manfred@mail.be',
            'email_verified_at'=>Carbon::now(),
            'password'=>bcrypt('azerty123'),
            'telephone'=>'0412345678',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        //keasp parent
        DB::table('users')->insert([
            'name' => 'Johan',
            'email' => 'johan@mail.be',
            'email_verified_at'=>Carbon::now(),
            'password'=>bcrypt('azerty123'),
            'telephone'=>'0412345678',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);




    }
}
