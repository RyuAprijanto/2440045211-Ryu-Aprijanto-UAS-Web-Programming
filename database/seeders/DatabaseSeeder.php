<?php

namespace Database\Seeders;
use App\Models\Role;
use App\Models\User;
use App\Models\Item;
use App\Models\Order;
use App\Models\Gender;
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
        // \App\Models\User::factory(10)->create();
        Role::insert
        ([
            ['role_name' => 'Admin'],
            ['role_name' => 'User'],
        ]);

        Gender::insert
        ([
            ['gender_desc' => 'Male'],
            ['gender_desc' => 'Female'],
        ]);

        User::insert
        ([
            [
                'first_name' => 'sussus',
                'last_name' => 'amogus',
                'role_id' => 1,
                'gender_id' => 1,
                'email' => 'sussy@gmail.com',
                'password' => 'amongus123',
                'display_pict' => 'amongsus.png'
            ],

            [
                'first_name' => 'admin',
                'last_name' => 'admin',
                'role_id' => 2,
                'gender_id' => 2,
                'email' => 'admin@gmail.com',
                'password' => 'adminadmin',
                'display_pict' => 'default.jpg'
            ]
        ]);

        Order::insert
        ([
            [
                'user_id' => 1,
                'item_id' => 1,
                'price' => 150000
            ],

            [
                'user_id' => 1,
                'item_id' => 2,
                'price' => 134000
            ]
        ]);

            Item::insert
            ([
                [
                    'item_name' => 'Broccoli',
                    'item_desc' => '1 kgs of Good greens',
                    'price' => 150000,
                ],

                [
                    'item_name' => 'Carrot',
                    'item_desc' => '1 kgs of Carrots',
                    'price' => 134000,
                ],


        ]);
    }
}
