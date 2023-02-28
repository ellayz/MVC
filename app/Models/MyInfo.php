<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyInfo extends Model
{
    use HasFactory;
    public static function datas(){
        $webbase =[
            'name' => 'My Webpage',
            'information' => 'Welcome To My Page',
            'yourname' => 'ACEZYLLE ARANETA. QUIOYO',
            'about' => 'Built With ', 
            
        ];
        return $webbase;
    }
}

