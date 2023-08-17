<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        /*DB::table('image')->insert([
            'name' => 'test',

        ])*/
        DB::table('news')->insert([
            'title' => Str::random(10),
            'content' => Str::random(100)
        ]);
        DB::table('news')->insert([
            'title' => Str::random(10),
            'content' => Str::random(100)
        ]);
        DB::table('news')->insert([
            'title' => Str::random(10),
            'content' => Str::random(100)
        ]);
        DB::table('news')->insert([
            'title' => Str::random(10),
            'content' => Str::random(100)
        ]);
    }
}
