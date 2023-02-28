<?php

namespace App\Http\Controllers;

use App\Models\IMG;
use App\Models\MyInfo;
use Illuminate\Http\Request;

class MainPageController extends Controller
{
    public function SendData()
    {
        $img = new IMG;

        return view('section.body',['data' => MyInfo::datas()])
        -> with('img', $img -> img());

    }
}
