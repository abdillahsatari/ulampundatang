<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        // $data = [
        //     'appName' => 'hello bambang' 
        // ];
        // // return view('home', $homepage);
        // return view('home', compact('data'));
        return view('homepage.index');
    }

    public function article()
    {
        return 'Article Page';
    }

    public function member()
    {
        return 'Member Page';
    }

    public function about(): string
    {
        return redirect()->action([self::class, 'index']);
    }
    
    public function service(): RedirectResponse
    {
        return redirect()->action([self::class, 'index']);
    }
    
    public function contact(): RedirectResponse
    {
        return redirect()->action([HomepageController::class, 'index']);
    }

}
