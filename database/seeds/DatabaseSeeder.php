<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // DB::table('products')->insert([
        //     [
        //         'name' => "Cocoa & Maize",
        //         'description' => Str::random(10),
        //         'price' => "100,000",
        //         "duration" => "5 years",
        //         "type" => 1,
        //     ],
        //     [
        //         'name' => "Cocoa & Cassava",
        //         'description' => Str::random(10),
        //         'price' => "100,000",
        //         "duration" => "5 years",
        //         "type" => 1,
        //     ],
        //     [
        //         'name' => "Cocoa & Mze",
        //         'description' => Str::random(10),
        //         'price' => "100,000",
        //         "duration" => "5 years",
        //         "type" => 1,
        //     ],
        //     [
        //         'name' => "Cocoa & Maize",
        //         'description' => Str::random(10),
        //         'price' => "100,000",
        //         "duration" => "5 years",
        //         "type" => 2,
        //     ],
        //     [
        //         'name' => "Cocoa & Cassava",
        //         'description' => Str::random(10),
        //         'price' => "100,000",
        //         "duration" => "5 years",
        //         "type" => 2,
        //     ],
        //     [
        //         'name' => "Cocoa & Mze",
        //         'description' => Str::random(10),
        //         'price' => "100,000",
        //         "duration" => "5 years",
        //         "type" => 2,
        //     ]
        // ]);
        DB::table('admins')->insert([
            [
                'name' => 'Admin1',
                'email' => 'admin@cocoadowo.com',
                'position' => 'Super_admin',
                'password' => bcrypt('123456')
            ],
        ]); 
        // DB::table('types')->insert([
        //     [
        //         'name' => "Cocoa Lite Plan",
        //         'description' => Str::random(30),
        //     ],
        //     [
        //         'name' => "Cocoa Express Plan",
        //         'description' => Str::random(30),
        //     ],
        // ]);
    }
}
