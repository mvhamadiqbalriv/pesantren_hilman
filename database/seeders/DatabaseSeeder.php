<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Mapel;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([   
            'name' => 'Daniel Arya',
            'email' => 'daniel.aryas7@gmail.com',
            'password' => bcrypt(12345)
            ]);

            Mapel::create([   
                'name' => 'Bahasa Arab'
                ]);

                Mapel::create([   
                    'name' => 'Bahasa Indonesia'
                    ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
