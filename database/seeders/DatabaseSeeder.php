<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        \App\Models\User::factory(10)->create();

        DB::table('webbase')->insert([
            'Firstname' => 'Acezylle',
            'Lastname' => 'Quioyo',
            'Birthday' => 'June 8, 2001',
            'Gender' => 'Female',
            'Email' => 'acezyllea@gmail.com',
            'PhoneNumber' => '09364719573',

        ]);

        DB::table('models')->insert([
            'Modelname' => 'Model1',
            'Description' => 'Blue Rose- As the general rose is associated with love, the blue rose can be commonly associated with unrequited love or true love.Possibly, true love that sadly only goes one way. Blue roses with a lighter hue symbolize sensitivity and feelings. Although, they do not represent romantic feelings.',
            'Directory' => 'assets/img/demo-image-01.jpg',
        ]);
        DB::table('models')->insert([
            'Modelname' => 'Model2',
            'Description' => 'Yellow Rose- Yellow roses are universally known as symbols of friendship, most people give them to each other for their birthdays or to celebrate the love between two good friends.',
            'Directory' => 'assets/img/bg-signup.jpg',
        ]);
        DB::table('models')->insert([
            'Modelname' => 'Model3',
            'Description' => 'Violet Rose- The purest symbol of new love, love at first sight, or a “one and only love,” giving someone a single red rose symbolizes the giving of your heart.Purple roses: An enchanting purple rose is also known as the "mystical rose." This rose gives off special meanings like royalty and majesty. A deep purple rose is perfect when you want to show someone you look up to them, or value their opinions.',
            'Directory' => 'assets/img/bg-masthead.jpg',
        ]);
        DB::table('models')->insert([
            'Modelname' => 'Model4',
            'Description' => 'Red Rose- The purest symbol of new love, love at first sight, or a “one and only love,” giving someone a single red rose symbolizes the giving of your heart.',
            'Directory' => 'assets/img/demo-image-02.jpg',
        ]);



        

        
    }
}
