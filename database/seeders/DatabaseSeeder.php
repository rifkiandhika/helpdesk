<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        User::create([
           "nama"  => "Admin",
           "email" => "admin@helpdesk.com",
           "password" => Hash::make("admin"),
           "divisi"=>"IT",
           "status"=>"Active"
          
        ]);

        User::create([
            "nama"  => "Support",
            "email" => "support@helpdesk.com",
            "password" => Hash::make("support"),
            "divisi"=>"IT",
            "status"=>"Active"
         ]);
    }
}
