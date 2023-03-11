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
        $MyInfo = new MyInfo;

        return view('section.body',['data' => MyInfo::all()])
        -> with('img', $img -> img())
        -> with ('name', $MyInfo -> data());
        
    }
    public function SendData1()
    {

        return view('CRUDS.index');
    }
    public function SendData2(Request $request) {
        //dd($request);
        $validated = $request->validate([
            'Firstname' => ['required'],
            'Lastname' => ['required'],
            'Birthday' => ['required'],
            'Gender' => ['required'],
            'Email' => ['required'],
            'PhoneNumber' => ['required'],
        ]);

        MyInfo::create($validated);

        return redirect('/1') ->with('message', 'Successfully Registered!');
    }

}