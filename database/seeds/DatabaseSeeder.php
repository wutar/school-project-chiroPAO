<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(GroupsTableSeeder::class);
        $this->call(LeadersTableSeeder::class);
        $this->call(NewsTableSeeder::class);
        $this->call(ActivitiesTableSeeder::class);
        $this->call(PhotoTableSeeder::class);
        $this->call(KidsTableSeeder::class);
        $this->call(UsersKidsTableSeeder::class);

    }
}
