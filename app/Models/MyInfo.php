<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyInfo extends Model
{

    protected $guarded =[];
    protected $table = 'webbase';
    
    use HasFactory;
    public static function datas(){
        // $webbase =[
        //     'name' => 'My Webpage',
        //     'information' => 'Welcome To My Page',
        //     'yourname' => 'ACEZYLLE ARANETA. QUIOYO',
        //     'about' => 'Built With ', 
            
        // ];
        // return $webbase;
    }
    public static function data(){
        $base =[
            'Blue Rose- As the general rose is associated with love, the blue rose can be commonly associated with unrequited love or true love. Possibly, true love that sadly only goes one way. Blue roses with a lighter hue symbolize sensitivity and feelings. Although, they do not represent romantic feelings.',
            'Yellow Rose- Yellow roses are universally known as symbols of friendship, most people give them to each other for their birthdays or to celebrate the love between two good friends.',
            'Violet Rose- The purest symbol of new love, love at first sight, or a “one and only love,” giving someone a single red rose symbolizes the giving of your heart.Purple roses: An enchanting purple rose is also known as the "mystical rose." This rose gives off special meanings like royalty and majesty. A deep purple rose is perfect when you want to show someone you look up to them, or value their opinions.',
            'Red Rose- The purest symbol of new love, love at first sight, or a “one and only love,” giving someone a single red rose symbolizes the giving of your heart.',
            
        ];
        return $base;

    }

}

