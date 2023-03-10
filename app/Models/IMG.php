<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IMG extends Model
{
    use HasFactory;

    public static function img() {
        $data = [
            "assets/img/demo-image-01.jpg",
            "assets/img/bg-signup.jpg",
            "assets/img/bg-masthead.jpg",
            "assets/img/demo-image-02.jpg"
        ];

        return $data;
    }
}
