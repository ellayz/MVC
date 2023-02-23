<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyInfo extends Model
{
    use HasFactory;
    public static function datas(){
        $webbase =[
            'name' => 'My Web Page',
            'information' => 'This web page is free, responsive one page theme created by bootstrap',
            'yourname' => 'ACEZYLLE A. QUIOYO'
        ];
        return $webbase;
    }
}
