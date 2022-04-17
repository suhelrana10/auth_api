<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([[
      //     'name' => 'admin',
      //     'email' => 'admin@gmail.com',
      //     'password' => Hash::make('password'),
      // ],

      'name' =>'user',
          'email' => 'user@gmail.com',
          'password' => Hash::make('password'),
      ],
      ['name' =>'user2',
        'email' => 'user2@gmail.com',
        'password' => Hash::make('password'),
      ]
    ]

    );


    }
}
