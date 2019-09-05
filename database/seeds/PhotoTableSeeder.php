<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class PhotoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photos')->insert([

            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'extension'=>('jpg'),
            'leader_id'=>1
        ]);

        DB::table('photos')->insert([

            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'extension'=>('jpg'),
            'leader_id'=>2
        ]);

        DB::table('photos')->insert([

            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'extension'=>('jpg'),
            'leader_id'=>3
        ]);

        DB::table('photos')->insert([

            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'extension'=>('jpg'),
            'leader_id'=>4
        ]);

        DB::table('photos')->insert([

            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'extension'=>('jpg'),
            'leader_id'=>5
        ]);

        DB::table('photos')->insert([

            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'extension'=>('jpg'),
            'leader_id'=>6
        ]);

        DB::table('photos')->insert([

            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'extension'=>('jpg'),
            'leader_id'=>7
        ]);

        DB::table('photos')->insert([

            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'extension'=>('jpg'),
            'leader_id'=>8
        ]);

        DB::table('photos')->insert([

            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'extension'=>('jpg'),
            'leader_id'=>9
        ]);

        DB::table('photos')->insert([

            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'extension'=>('jpg'),
            'leader_id'=>10
        ]);

        DB::table('photos')->insert([

            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'extension'=>('jpg'),
            'leader_id'=>11
        ]);

        DB::table('photos')->insert([

            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'extension'=>('jpg'),
            'leader_id'=>12
        ]);

        DB::table('photos')->insert([

            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'extension'=>('jpg'),
            'leader_id'=>13
        ]);

        DB::table('photos')->insert([

            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'extension'=>('jpg'),
            'leader_id'=>14
        ]);

        DB::table('photos')->insert([

            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'extension'=>('jpg'),
            'leader_id'=>15
        ]);

        DB::table('photos')->insert([

            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'extension'=>('jpg'),
            'leader_id'=>16
        ]);

        DB::table('photos')->insert([

            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'extension'=>('jpg'),
            'leader_id'=>17
        ]);

        DB::table('photos')->insert([

            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'extension'=>('jpg'),
            'leader_id'=>18
        ]);

        DB::table('photos')->insert([

            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'extension'=>('png'),
            'group_id'=>1
        ]);

        DB::table('photos')->insert([

            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'extension'=>('png'),
            'group_id'=>2
        ]);

        DB::table('photos')->insert([

            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'extension'=>('png'),
            'group_id'=>3
        ]);

        DB::table('photos')->insert([

            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'extension'=>('png'),
            'group_id'=>4
        ]);

        DB::table('photos')->insert([

            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'extension'=>('png'),
            'group_id'=>5
        ]);

        DB::table('photos')->insert([

            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'extension'=>('jpg'),
            'activity_id'=>1
        ]);

        DB::table('photos')->insert([

            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'extension'=>('jpg'),
            'activity_id'=>2
        ]);

        DB::table('photos')->insert([

            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'extension'=>('jpg'),
            'activity_id'=>3
        ]);

        DB::table('photos')->insert([

            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'extension'=>('jpg'),
            'activity_id'=>4
        ]);

        DB::table('photos')->insert([

            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'extension'=>('jpg'),
            'activity_id'=>5
        ]);

    }
}
